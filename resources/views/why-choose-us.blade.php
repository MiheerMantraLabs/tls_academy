@extends('layouts/main')
@push('title')
    <title>Why Chosse Us</title>
@endpush
@section('main-section')
@include('layouts/breadcrums')
    @include('layouts/why-choose-us')
    @include('layouts/student-feedback')
    @include('layouts/social-media-pages')
    @include('layouts/contact-us')
@endsection