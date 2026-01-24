@extends('store.layout')

@section('title', $siteSettings->tag_line)

@section('content')
    <!--Hero-->
    @if ($homePageSettings->enable_hero)
        <x-hero />
    @endif

    <!--Results (Real Results from the R2S Community)-->
    <x-results />

    <!--Features-->
    @if ($homePageSettings->enable_features)
        <x-features />
    @endif

    <!--Partner CTA Section-->
    <x-partner />

    <!--Categories-->


    <!--Stats-->

    <!--CTA-->
    @if ($homePageSettings->enable_cta)
        <x-cta />
    @endif
@endsection
