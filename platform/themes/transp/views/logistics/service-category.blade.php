@php
    Theme::set('pageTitle', $serviceCategory->name);
    Theme::set('pageDescription', $serviceCategory->description);
@endphp

<main>
    {!! Theme::partial('breadcrumb') !!}

    <section class="section mt-50">
        <div class="container">
            <div class="row">
                @foreach($serviceCategory->services as $service)
                    <div class="col-md-6 mb-50 col-xl-3">
                        {!! Theme::partial('services.item-style-2', compact('service')) !!}
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>


