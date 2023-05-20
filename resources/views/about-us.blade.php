@extends('layouts/main')
@push('title')
    <title>About Us</title>
@endpush
@section('main-section')
    @include('layouts/breadcrums')
    @include('layouts/about')
    @include('layouts/why-choose-us')
    @include('layouts/student-feedback')
    @include('layouts/social-media-pages')
@endsection