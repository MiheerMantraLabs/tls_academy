@extends('layouts/main')
@push('title')
    <title>Contact Us</title>
@endpush
@section('main-section')
@include('layouts/breadcrums')
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.293078777964!2d85.32953097450553!3d23.377612502987315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e1b184e101e1%3A0xf8d8b867cc201477!2sTLS%20Academy!5e0!3m2!1sen!2sin!4v1685099998058!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    @include('layouts/contact-us')
    @include('layouts/student-feedback')
    @include('layouts/social-media-pages')
@endsection