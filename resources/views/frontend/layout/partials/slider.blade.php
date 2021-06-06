<!-- Banner start -->
@php
    $districts = \App\District::get();
@endphp
<div class="banner bg-color-full" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100 h-100" src="{{asset('public/frontend/img/banner/banner-2.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
        </div>
    </div>
    <div class="banner-inner">
        <div class="container">
            <div class="text-center">
                <h3 class="b-text">Find your job</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="inline-search-area ml-auto mr-auto none-768">
                    <form action="{{ route('jobs') }}" method="post">
                        @csrf
                        <div class="search-boxs">
                            <div class="search-col">
                                <input type="text" name="search" class="form-control has-icon b-radius" placeholder="Job title, Keywords or company name">
                            </div>
                            <div class="search-col">
                                <select class="selectpicker search-fields" name="district_id">
                                    <option value="">location</option>
                                    @foreach($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="find">
                                <button class="btn button-theme btn-search btn-block b-radius">
                                    <i class="fa fa-search"></i><strong>Find Job</strong>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="banner-counter-box none-768">
                    <div class="counter-box">
                        <h1 class="counter">2967</h1>
                        <p>Views</p>
                    </div>
                    <div class="counter-box">
                        <h1 class="counter">167</h1>
                        <p>Jobs Posted</p>
                    </div>
                    <div class="counter-box">
                        <h1 class="counter">150</h1>
                        <p>Office</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->