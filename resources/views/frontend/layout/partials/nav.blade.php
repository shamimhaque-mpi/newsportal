        <!-- Main header start -->
        <header class="main-header header-transparent sticky-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('public/frontend/img/logos/black-logo.png')}}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav header-ml">

                            <li><a class="nav-link active" href="{{route('home')}}">Home</a></li>

                            <li><a class="nav-link" href="{{route('jobs')}}">Jobs</a></li>
                            <li><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                            <li><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>

                            {{--<li><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                            <li><a class="nav-link" href="{{route('terms')}}">Terms & Condition</a></li>
                            <li><a class="nav-link" href="{{route('faq')}}">Faq</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    For Design
                                </a>
                                <ul class="dropdown-menu dm-2" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{route('typography')}}">Typography</a></li>
                                    <li><a class="dropdown-item" href="{{route('icons')}}">Icons</a></li>
                                    <li><a class="dropdown-item" href="{{route('coming_soon')}}">Coming Soon</a></li>
                                    <li><a class="dropdown-item" href="{{route('alert')}}">Alert</a></li>
                                    <li><a class="dropdown-item" href="{{route('error_404')}}">404</a></li>
                                </ul>
                            </li>--}}
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Main header end -->
