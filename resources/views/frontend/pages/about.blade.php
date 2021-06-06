@extends('frontend.layout.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner bg-color-full">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>About Us</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- About us start -->
<div class="about-us  content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <div class="about-slider-box simple-slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('public/frontend/img/gallery/img-2.jpg')}}" alt="slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('public/frontend/img/gallery/img-3.jpg')}}" alt="slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('public/frontend/img/gallery/img-1.jpg')}}" alt="slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="slider-mover-left slider-btn-l" aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="slider-mover-right slider-btn-r " aria-hidden="true">
                                 <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text">
                    <h3>Welcome To Jobb</h3>
                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                    <p>transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted. transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->

<!-- Services start -->
<div class="services content-area-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Our Service</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-work"></i>
                    </div>
                    <h5>Advertise A Job</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-search"></i>
                    </div>
                    <h5>CV Search</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-none d-xl-block d-lg-block">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <h5>Recruiter Profiles</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->

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
@endsection