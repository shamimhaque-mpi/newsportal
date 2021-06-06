@extends('frontend.layout.master')

@section('content')
    @include('frontend.layout.partials.slider')

    <!-- Popular categories strat -->
    <div class="popular-categories content-area-7">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1>Job Categories</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="{{ route('jobs', $category->id) }}">
                            <div class="categorie-box">
                                <i class="{{ $category->icon }}"></i>
                                <h5>{{ $category->category_name }}</h5>
                                <span>({{ $category->post_count }})</span>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Popular categories end -->

    <!-- Job section strat -->
    @if(!$posts->isEmpty())
        <div class="job-section content-area-5 bg-grea">
            <div class="container">
                <!-- Main title -->
                <div class="main-title text-center">
                    <h1>Recent Jobs</h1>
                    <p>Find your next job at Job Portal.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        @foreach($posts as $post)
                            <div class="job-box">
                                <div class="company-logo">
                                    <img src="{{asset($post->company_logo)}}" alt="logo">
                                </div>
                                <div class="description">
                                    <div class="float-left">
                                        <h5 class="title">
                                            <a href="{{ route('jobs_details', $post->id) }}">{{ $post->title }}</a>
                                        </h5>
                                        <div class="candidate-listing-footer">
                                            <ul>
                                                <li><i class="flaticon-work"></i>&nbsp;{{ $post->job_type }}</li>
                                            </ul>
                                            <h6>Deadline:&nbsp;{{ $post->end_date }}</h6>
                                        </div>
                                    </div>
                                    <div class="div-right">
                                        <a href="{{ route('jobs_details', $post->id) }}" class="apply-button">View</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-center clearfix">
                            <a href="{{ route('jobs') }}" class="browse-all mt-3">Browse All Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Job section end -->

    <!-- Counters strat -->
    <div class="counters bg-color-full-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box">
                        <i class="flaticon-user"></i>
                        <h1 class="counter">1967</h1>
                        <p>View</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box">
                        <i class="flaticon-work"></i>
                        <h1 class="counter">667</h1>
                        <p>Jobs</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box">
                        <i class="flaticon-document"></i>
                        <h1 class="counter">475</h1>
                        <p>visited</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-box">
                        <i class="flaticon-factory"></i>
                        <h1 class="counter">475</h1>
                        <p>Office</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counters end -->

    <!-- Partners strat -->
    @if(!$sponsors->isEmpty())
        <div class="partners content-area-15 bg-grea">
            <div class="container">
                <div class="main-title text-center">
                    <h1>Our Sponsor</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="slick-slider-area">
                    <div class="row slick-carousel"
                         data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                        @foreach($sponsors as $key=>$value)
                            <a href="{{ url($value->site_link) }}" target="_blank">
                                <div class="slick-slide-item">
                                    <img src="{{asset($value->logo)}}" alt="{{ $value->name }}" class="img-fluid">
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Partners end -->

    <!-- Blog start -->
    <div class="blog content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Latest Jobs Post</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <!-- Slick slider area start -->
            <div class="slick-slider-area">
                <div class="row slick-carousel"
                     data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    <div class="slick-slide-item">
                        <div class="blog-3">
                            <div class="blog-photo">
                                <img src="{{asset('public/frontend')}}/img/blog/blog-2.jpg" alt="blog"
                                     class="img-fluid">
                                <div class="date-box">
                                    <span>27</span>Feb
                                </div>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-details.html">How To Get Out Of Stress At Work</a>
                                </h3>
                                <div class="post-meta">
                                    <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                    <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                    <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="blog-3">
                            <div class="blog-photo">
                                <img src="{{asset('public/frontend')}}/img/blog/blog-3.jpg" alt="blog"
                                     class="img-fluid">
                                <div class="date-box">
                                    <span>23</span>Feb
                                </div>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-details.html">Back To Work After Vacation</a>
                                </h3>
                                <div class="post-meta">
                                    <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                    <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                    <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="blog-3">
                            <div class="blog-photo">
                                <img src="{{asset('public/frontend')}}/img/blog/blog-1.jpg" alt="blog"
                                     class="img-fluid">
                                <div class="date-box">
                                    <span>23</span>Feb
                                </div>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-details.html">Job Motivational Quote</a>
                                </h3>
                                <div class="post-meta">
                                    <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                    <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                    <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="blog-3">
                            <div class="blog-photo">
                                <img src="{{asset('public/frontend')}}/img/blog/blog-1.jpg" alt="blog"
                                     class="img-fluid">
                                <div class="date-box">
                                    <span>23</span>Feb
                                </div>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-details.html">Job Motivational Quote</a>
                                </h3>
                                <div class="post-meta">
                                    <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                    <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                    <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-prev slick-arrow-buton">
                    <i class="fa fa-angle-left fa-lg"></i>
                </div>
                <div class="slick-next slick-arrow-buton">
                    <i class="fa fa-angle-right fa-lg"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog end -->

    <!-- Intro section -->
    <div class="intro-section bg-color-full-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="intro-text">
                        <h3>Gat in Touch</h3>
                        <p>Searching for jobs never been that easy. Now you can find job matched your career
                            expectation</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="app-download-button">
                        <a href="#" class="android-app"><i class="flaticon-robot"></i>Google Play</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro end -->
@endsection
