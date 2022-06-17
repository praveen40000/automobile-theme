@extends('shop::layouts.master')

@section('page_title')
    {{ isset($metaTitle) ? $metaTitle : "" }}
@endsection

@section('head')
    @if (isset($homeSEO))
        @isset($metaTitle)
            <meta name="title" content="{{ $metaTitle }}" />
        @endisset

        @isset($metaDescription)
            <meta name="description" content="{{ $metaDescription }}" />
        @endisset

        @isset($metaKeywords)
            <meta name="keywords" content="{{ $metaKeywords }}" />
        @endisset
    @endif
@endsection


@section('full-content-wrapper')

    <div class="full-content-wrapper">
        {!! view_render_event('bagisto.shop.home.content.before') !!}

            Main Page from packages/HKSManpower/AutomobileTheme/src/Resources/views/shop/home/index.blade.php
            Make the changes inside resources/themes/automobile/views/home/index.blade.php

        {{ view_render_event('bagisto.shop.home.content.after') }}
    </div>

@endsection