@extends('layouts/main')
@push('title')
    <title>App Development</title>
@endpush
@section('main-section')
    @include('layouts/breadcrums')
    <section id="course-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-6 col-12">
                <div class="course-details">
                    <h2 id="course-type">App Development</h2>
                    <p>At TLS Academy, we believe that the power to shape the future lies in the hands of app developers. Our comprehensive app development courses are designed to equip aspiring developers like you with the skills and knowledge needed to excel in this dynamic field.</p>
                    <p>Whether you're a beginner with no prior coding experience or an experienced programmer looking to expand your skills, our courses cater to learners of all levels. Our team of industry experts and experienced developers have curated a curriculum that covers the latest trends, frameworks, and technologies, ensuring you stay ahead of the curve.</p>
                    <p>Through a combination of interactive lessons, hands-on projects, and real-world case studies, you'll gain a deep understanding of the app development process. From conceptualizing ideas and wireframing to coding, testing, and launching your app, our courses guide you through every stage of the development lifecycle.</p>
                    <p>Our courses cover a wide range of platforms and technologies, including iOS, Android, cross-platform development, web apps, and more. Whether you want to create engaging mobile games, utility apps, e-commerce solutions, or productivity tools, our courses will empower you to turn your ideas into reality.</p>
                    <p>Unlock your potential and become an app development genius with TLS Academy. Enroll today and embark on an exciting journey towards building innovative and impactful apps that transform the digital landscape.</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                <div class="course-image">
                    <img src="{{asset('images/courses/app-development.svg')}}" />
                    <div class="courses-offer-list">
                        <h4>Courses we cover</h4>
                        <ul>
                            <li>Firebase</li>
                            <li>UI / UX design </li>
                            <li>Api</li>
                            <li>3rd party libraries</li>
                            <li>Payment and google ads </li>
                            <li>Android studio</li>
                            <li>And many more...</li>
                        </ul>
                        <a href="{{ url('course-enquiry') }}"><button type="button" id="enquiry-btn">Apply Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    @include('layouts/student-feedback')
    @include('layouts/social-media-pages')
@endsection