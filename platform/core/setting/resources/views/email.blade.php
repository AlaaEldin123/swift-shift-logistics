@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    {!! $form->renderForm() !!}
@stop

@push('footer')
    <x-core::modal
        id="send-test-email-modal"
        :title="trans('core/setting::setting.test_email_modal_title')"
        type="info"
    >
        <x-core::form.text-input
            :label="trans('core/setting::setting.test_email_description')"
            type="email"
            name="email"
            :placeholder="trans('core/setting::setting.test_email_input_placeholder')"
        />

        <x-slot:footer>
            <div class="w-100 row">
                <div class="col">
                    <x-core::button
                        data-bs-dismiss="modal"
                        class="w-100"
                    >
                        {{ __('Close') }}
                    </x-core::button>
                </div>
                <div class="col">
                    <x-core::button
                        color="primary"
                        id="send-test-email-btn"
                        class="w-100"
                    >
                        {{ trans('core/setting::setting.send') }}
                    </x-core::button>
                </div>
            </div>
        </x-slot:footer>
    </x-core::modal>
@endpush
