<div class="d-none d-sm-inline-block">
    <div class="me-1 d-inline-block box-search-top">
        <div class="form-search-top" style="display: none;">
            <form action="{{ route('public.search') }}">
                <input class="input-search" name="q" type="text" placeholder="{{ __('Search...') }}" required/>
                <button class="btn btn-search">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
        </div>
        <span class="font-lg icon-list search-post">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </span>
    </div>
    <div class="d-none d-md-inline-block"></div>
</div>
