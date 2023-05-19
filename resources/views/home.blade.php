@extends('layouts/main')
@push('title')
    <title>TLS Academy - Home</title>
@endpush
@section('main-section')
    @include('layouts/hero_banner')
    @include('layouts/about')
    @include('layouts/why-choose-us')
    @include('layouts/popular-courses')
    @include('layouts/contact-for-demo')
    @include('layouts/benefits')
    @include('layouts/student-feedback')
    @include('layouts/social-media-pages')
    @include('layouts/contact-us')
@endsection