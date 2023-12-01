<div class="col-lg-3 width-16 mb-30">
    <h5 class="mb-10 color-brand-1">{{ $config['name'] }}</h5>

    {!! Menu::generateMenu([
       'slug' => Arr::get($config, 'menu_id'),
       'view' => 'footer-menu',
       'options' => ['class' => 'menu-footer'],
   ]) !!}
</div>
