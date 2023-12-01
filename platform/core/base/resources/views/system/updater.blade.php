@php
    use Botble\Base\Enums\SystemUpdaterStepEnum;
@endphp

@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <x-core::alert
        type="warning"
        title="Important notes:"
        :important="false"
    >
        <ul class="mt-3 mb-0 ps-2">
            <li class="mb-2">Please back up your database and script files before upgrading.</li>
            <li class="mb-2">You need to activate your license before doing upgrade.</li>
            <li class="mb-2">If you don't need this 1-click update, you can disable it in <strong>.env</strong> by adding
                <strong>CMS_ENABLE_SYSTEM_UPDATER=false</strong>
            </li>
            <li>It will override all files in <strong>platform/core</strong>, <strong>platform/packages</strong>, all
                plugins developed by us in <strong>platform/plugins</strong> and theme developed by us in
                <strong>platform/themes</strong>.
            </li>
        </ul>
    </x-core::alert>

    <x-core::card class="mb-3">
        <x-core::card.header>
            <x-core::card.title>System Updater</x-core::card.title>
        </x-core::card.header>

        <x-core::card.body
            @class(['text-center' => !($noAJAX = request()->query('no-ajax'))])
            dir="ltr"
        >
            @if (!empty($latestUpdate))
                @php($changelog = trim(str_replace(PHP_EOL . PHP_EOL, PHP_EOL, strip_tags(str_replace(['<li>', '</li>', '<ul>'], ['<li>- ', '</li>' . PHP_EOL, PHP_EOL . '<ul>'], $latestUpdate->changelog)))))

                @if ($noAJAX)
                    @if ($isOutdated)
                        <h3 class="text-success mb-4">
                            {{ __('A new version (:version / released on :date) is available to update!', ['version' => $latestUpdate->version, 'date' => BaseHelper::formatDate($latestUpdate->releasedDate)]) }}
                        </h3>

                        <pre>{!! $changelog !!}</pre>
                    @else
                        <h3 class="text-success">{{ __('The system is up-to-date. There are no new versions to update!') }}</h3>
                    @endif

                    <form
                        action="{{ route('system.updater') }}?no-ajax=1&update_id={{ $latestUpdate->updateId }}&version={{ $latestUpdate->version }}"
                        method="POST"
                    >
                        <x-core::step :vertical="true" :counter="true">
                            @foreach (SystemUpdaterStepEnum::labels() as $step => $label)
                                @break($step === SystemUpdaterStepEnum::lastStep())

                                <x-core::step.item>
                                    <div class="h4 mb-2">{{ $label }}</div>
                                    <x-core::button
                                        class="mb-3"
                                        type="submit"
                                        name="step_name"
                                        value="{{ $step }}"
                                        color="warning"
                                        data-updating-text="Updating..."
                                    >
                                        {{ __('Run') }}
                                    </x-core::button>
                                </x-core::step.item>
                            @endforeach
                        </x-core::step>
                        @csrf
                    </form>
                @else
                    <system-update-component
                        update-url="{{ route('system.updater.post') }}"
                        update-id="{{ $latestUpdate->updateId }}"
                        version="{{ $latestUpdate->version }}"
                        first-step="{{ SystemUpdaterStepEnum::firstStep() }}"
                        first-step-message="{{ SystemUpdaterStepEnum::DOWNLOAD()->message() }}"
                        last-step="{{ SystemUpdaterStepEnum::lastStep() }}"
                        :is-outdated="{{ json_encode($isOutdated) }}"
                    >
                        @if ($isOutdated)
                            <p class="text-success mb-4 fw-bold">
                                {{ __('A new version (:version / released on :date) is available to update!', ['version' => $latestUpdate->version, 'date' => BaseHelper::formatDate($latestUpdate->releasedDate)]) }}
                            </p>

                            <pre class="text-start">{!! $changelog !!}</pre>
                        @else
                            <h3 class="text-success">{{ __('The system is up-to-date. There are no new versions to update!') }}</h3>
                        @endif
                    </system-update-component>
                @endif
            @else
                <p class="mb-0 text-success">{{ __('The system is up-to-date. There are no new versions to update!') }}</p>
            @endif

            @if (!request()->query('no-ajax'))
                <p
                    class="updater-box mt-3"
                    dir="ltr"
                >
                    If you don't see the update button, please <a
                        href={{ route('system.updater', ['no-ajax' => 1]) }}>click here</a>.
                </p>
            @endif
        </x-core::card.body>
    </x-core::card>

    @if (isset($isOutdated) && isset($latestUpdate) && !$isOutdated && $latestUpdate)
        <x-core::card>
            <x-core::card.header>
                <x-core::card.title>Latest changelog ({{ BaseHelper::formatDate($latestUpdate->releasedDate) }})</x-core::card.title>
            </x-core::card.header>
            <x-core::card.body>
                <pre>{!! $changelog !!}</pre>
            </x-core::card.body>
        </x-core::card>
    @endif
@endsection
