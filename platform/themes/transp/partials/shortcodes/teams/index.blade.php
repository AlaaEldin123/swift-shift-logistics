<section class="section pt-110 pb-100">
    <div class="container">
        <div class="row align-items-center">
            @if ($title = $shortcode->title)
                <h2 class="title-favicon mb-20">{!! BaseHelper::clean($title) !!}</h2>
            @endif

            <div class="col-lg-8 col-md-8 mb-30">
                @if ($description = $shortcode->description)
                    <p class="font-md color-grey-700">{!! BaseHelper::clean($description) !!}</p>
                @endif
            </div>
            <div class="col-lg-4 col-md-4 mb-30 text-md-end text-start">
                @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                    <a class="btn btn-brand-1 hover-up" href="{{ $buttonUrl }}">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"> </path>
                        </svg> {!! BaseHelper::clean($buttonLabel) !!}
                    </a>
                @endif
            </div>
        </div>
        <div class="row mt-50">
            @foreach($teams as $team)
                <div class="col-xl-3 col-sm-6 mb-50">
                    <div class="cardTeam">
                        @if($photo = $team->photo)
                            <div class="cardImage">
                                <img src="{{ RvMedia::getImageUrl($photo) }}" alt="{{ $team->name }}">
                            </div>
                        @endif
                        <div class="cardInfo">
                            <h6 class="color-brand-2">{!! BaseHelper::clean($team->name ) !!}</h6>
                            <div class="info-bottom">
                                @if ($title = $team->title)
                                    <p class="color-grey-500">{!! BaseHelper::clean($title) !!}</p>
                                @endif

                                    <p class="color-grey-500">
                                        @if ($socials = $team->socials)
                                            @foreach(['facebook', 'twitter', 'instagram'] as $social)
                                                @if ($url = Arr::get($socials, $social))
                                                    @switch($social)
                                                        @case('twitter')
                                                            <a href="{{ $url }}" target="_blank" rel="noopener noreferrer">
                                                                <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#818692" viewbox="0 0 16 16">
                                                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                                                </svg>
                                                            </a>
                                                        @break

                                                        @case('facebook')
                                                            <a href="{{ $url }}" target="_blank" rel="noopener noreferrer">
                                                                <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.08433 14V7.61441H10.2268L10.5483 5.12509H8.08433V3.53603C8.08433 2.81554 8.28358 2.32453 9.31793 2.32453L10.635 2.32399V0.097461C10.4072 0.0678617 9.62539 0 8.71539 0C6.81517 0 5.51425 1.15988 5.51425 3.28949V5.12509H3.36523V7.61441H5.51425V14H8.08433Z" fill=""></path>
                                                                </svg>
                                                            </a>
                                                        @break

                                                        @case('instagram')
                                                            <a href="{{ $url }}" target="_blank" rel="noopener noreferrer">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                                                </svg>
                                                            </a>
                                                        @break
                                                    @endswitch
                                                @endif
                                            @endforeach
                                        @endif
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
