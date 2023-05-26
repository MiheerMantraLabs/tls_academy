@extends('layouts/main')
@push('title')
    <title>Web Development</title>
@endpush
@section('main-section')
    @include('layouts/breadcrums')
    <section id="course-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-6 col-12">
                <div class="course-details">
                    <h2 id="course-type">Web Development</h2>
                    <p>Introducing TLS Academy, your premier destination for comprehensive website development courses. Whether you're a beginner looking to embark on a career in web development or an experienced professional seeking to upgrade your skills, our company offers a wide range of courses tailored to meet your specific needs.</p>
                    <p>At TLS Academy, we believe in providing practical and hands-on learning experiences. Our courses are designed and delivered by industry experts who have extensive knowledge and experience in the field. We offer both online and offline classes, allowing you to choose a learning format that suits your schedule and preferences.</p>
                    <p>We understand the importance of staying up-to-date with the latest trends and technologies in the rapidly evolving web development landscape. That's why our courses are regularly updated to incorporate the newest tools and techniques. You'll learn using industry-standard software and platforms, ensuring you're equipped with the most relevant knowledge.
                    </p>
                    <p>At TLS Academy, we foster a supportive and collaborative learning environment. Our instructors are passionate about teaching and are dedicated to helping you succeed. You'll have access to a vibrant community of fellow learners, where you can engage in discussions, share ideas, and collaborate on projects.</p>
                    <p>Don't miss out on the opportunity to kickstart or advance your web development journey. Enroll in TLS Academy today and unlock your full potential in the world of website development.</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                <div class="course-image">
                    <img src="{{asset('images/courses/programming.svg')}}" />
                    <div class="courses-offer-list">
                        <h4>Courses we cover</h4>
                        <ul>
                            <li>HTML / HTML5</li>
                            <li>CSS / CSS3</li>
                            <li>Bootstrap</li>
                            <li>Javascript</li>
                            <li>MySql & PHP </li>
                            <li>Ajax</li>
                            <li>Laravel</li>
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