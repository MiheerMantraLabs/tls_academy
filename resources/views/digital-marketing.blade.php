@extends('layouts/main')
@push('title')
    <title>Digital Marketing</title>
@endpush
@section('main-section')
    @include('layouts/breadcrums')
    <section id="course-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-6 col-12">
                <div class="course-details">
                    <h2 id="course-type">Digital Marketing</h2>
                    <p>Introducing TLS Academy, your premier destination for comprehensive digital marketing courses. Whether you're an aspiring marketer seeking to enhance your skills or a business owner looking to expand your online presence, we have the expertise and resources to help you thrive in the ever-evolving digital landscape.</p>
                    <p>Our carefully crafted courses are designed to equip you with the latest industry knowledge and practical techniques needed to excel in digital marketing. Led by seasoned professionals with years of hands-on experience, our instructors bring real-world insights and strategies to the classroom, ensuring you receive a well-rounded education.</p>
                    <p>At TLS Academy, we prioritize experiential learning, providing you with opportunities to work on live projects and campaigns. This practical experience not only enhances your understanding of digital marketing concepts but also prepares you for real-world challenges and scenarios.</p>
                    <p>Our flexible course offerings cater to individuals with diverse backgrounds and schedules. Whether you prefer a part-time evening course or an intensive weekend workshop, we have options to suit your needs. Additionally, our online learning platform enables you to access course materials and collaborate with fellow students from anywhere, at any time.</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                <div class="course-image">
                    <img src="{{asset('images/courses/digital-marketing.svg')}}" />
                    <div class="courses-offer-list">
                        <h4>Courses we cover</h4>
                        <ul>
                            <li>Introduction to Digital Marketing</li>
                            <li>Website Planning and Creation</li>
                            <li>Search Engine Optimisation (SEO)</li>
                            <li>Social Media Marketing</li>
                            <li>Adsense, Blogging, and Affiliate Marketing </li>
                            <li>Graphics Designing (Canva)</li>
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