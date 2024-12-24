@extends('layouts.client')
@section('meta-data')
    <link rel="apple-touch-icon" href="{{ asset('assets/images/bg/logo.png') }}">
    <link rel="icon" href="{{ asset('assets/images/bg/logo.png') }}"">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/bg/logo.png') }}"">
    <link rel="icon" href="{{ asset('assets/images/bg/logo.png') }}"">
    <meta name="description" content="{{ $tip->short_description }}">
    <meta name="keywords"
        content="Cambodian fitness center, Best gym in Phnom Penh, Gym training in Cambodia, Personal training Phnom Penh, Fitness classes Cambodia, Gym memberships Phnom Penh, Top fitness center Cambodia, Gym equipment Phnom Penh, Yoga classes Cambodia, Health and wellness Phnom Penh">

    <title>Best Gym in Phnom Penh | Repeat Gym Cambodia</title>
    <link rel="canonical" href="https://www.repeatgym.com/">
    <meta name="author" content="Repeat Gym">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ $tip->name }}">
    <meta property="og:url" content="https://www.repeatgym.com/">
    <meta property="og:description" content="{{ $tip->short_description }}">
    <meta property="og:image" content="{{ asset('assets/images/tips/thumb/' . $tip->image) }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
    <div class="no-tailwind max-w-screen-xl mx-auto mt-32">
        <div>
            {!! $tip->description !!}
        </div>

    </div>
@endsection
