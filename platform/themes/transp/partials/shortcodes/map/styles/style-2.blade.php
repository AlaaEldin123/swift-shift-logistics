<div class="box-map">
    @if($address = $shortcode->address ?: theme_option('address'))
        <iframe src="https://maps.google.com/maps?q={{ addslashes($address) }}&output=embed" height="570" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    @endif
</div>
