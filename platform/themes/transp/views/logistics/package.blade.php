<div class="mb-50">
    <section class="section">
        <div class="container">
            <div class="box-pageheader-1 box-pageheader-services text-center">
                <h2 class="color-brand-2 mt-15 mb-10 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    {!! BaseHelper::clean($package->name) !!}
                </h2>
                <p class="font-md color-grey-900 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    {!! BaseHelper::clean($package->description) !!}
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="content-detail">
            {!! BaseHelper::clean($package->content) !!}
        </div>
    </div>
</div>
