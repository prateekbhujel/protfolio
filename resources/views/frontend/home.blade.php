@extends('frontend.layouts.layout')

@section('title', 'Home')

@section('content')

<!-- Hero-Area-Start -->
    @include('frontend.sections.hero')
<!-- Hero-Area-End -->

<!-- Service-Area-Start -->
    @include('frontend.sections.service')
<!-- Service-Area-End -->

<!-- About-Area-Start -->
    @include('frontend.sections.hero')
<!-- About-Area-End -->

<!-- Portfolio-Area-Start -->
    @include('frontend.sections.portfolio')
<!-- Portfolio-Area-End -->

<!-- Skills-Area-Start -->
    @include('frontend.sections.skills')
<!-- Skills-Area-End -->

<!-- Experience-Area-Start -->
    @include('frontend.sections.experince')
<!-- Experience-Area-End -->

<!-- Testimonial-Area-Start -->
    @include('frontend.sections.testimonial')
<!-- Testimonial-Area-End -->

<!-- Blog-Area-Start -->
    @include('frontend.sections.blog')
<!-- Blog-Area-End -->

<!-- Contact-Area-Start -->
    @include('frontend.sections.contact')
<!-- Contact-Area-End -->

@endsection