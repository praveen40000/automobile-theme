{{-- bootstrap --}}
<link rel="stylesheet" href="{{ asset('themes/velocity/assets/css/bootstrap.min.css') }}" />

{{-- bootstrap flipped for rtl --}}
@if (core()->getCurrentLocale() && core()->getCurrentLocale()->direction === 'rtl')
    <link href="{{ asset('themes/velocity/assets/css/bootstrap-flipped.css') }}" rel="stylesheet">
@endif

{{-- mix versioned compiled file --}}
<link rel="stylesheet" href="{{ asset('themes/automobile/assets/css/automobile.css') }}" />

{{-- custom css --}}
<style>
    {!! core()->getConfigData('general.content.custom_scripts.custom_css') !!}
</style>