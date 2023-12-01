@php
    $supportedLocales = Language::getSupportedLocales();
    $languageDisplay = setting('language_display', 'all');
@endphp

@if ($supportedLocales && count($supportedLocales) > 1)
    @if (setting('language_switcher_display', 'dropdown') === 'dropdown')
        <div class="d-inline-block box-dropdown-cart">
            <span class="font-lg icon-list icon-account">
                <span class="font-sm color-grey-900 arrow-down">
                    <span class="ms-1">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"></path>
                        </svg>
                        @if ($languageDisplay === 'all' || $languageDisplay === 'name')
                            {{ Language::getCurrentLocaleName() }}
                        @endif
                    </span>
                </span>
            </span>

            <div class="dropdown-account dropdown-language">
                <ul>
                    @foreach(Language::getSupportedLocales() as $locale => $language)
                        @continue($locale === Language::getCurrentLocale())
                        <li>
                            <a class="font-md" href="{{ Language::getSwitcherUrl($locale, $language['lang_code']) }}">
                                @if ($languageDisplay === 'all' || $languageDisplay === 'flag')
                                    {!! language_flag($language['lang_flag'], $language['lang_name']) !!}
                                @endif

                                <span class="ms-1">
                                    @if ($languageDisplay === 'all' || $languageDisplay === 'name')
                                        {{ $language['lang_name'] }}
                                    @endif
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @else
        <div class="d-inline-block me-2">
            <ul class="language-bar-list">
                @foreach ($supportedLocales as $locale => $language)
                    @if ($locale != Language::getCurrentLocale())
                        <li>
                            <a href="{{ Language::getSwitcherUrl($locale, $language['lang_code']) }}">
                                @if ($languageDisplay == 'all' || $languageDisplay == 'flag')
                                    {!! language_flag($language['lang_flag'], $language['lang_name']) !!}
                                @endif

                                @if ($languageDisplay == 'all' || $languageDisplay == 'name')
                                    <span class="ms-1">{{ $language['lang_name'] }}</span>
                                @endif
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif
@endif
