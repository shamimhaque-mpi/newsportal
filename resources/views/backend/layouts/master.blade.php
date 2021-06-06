@include('backend.layouts.partials._header')

@include('backend.layouts.partials._navbar')

<div id="layoutSidenav">

    @include('backend.layouts.partials._leftsidebar')

    <div id="layoutSidenav_content">

        <main>
            @yield('content')
        </main>

    </div>

</div>

@include('backend.layouts.partials._footer')



