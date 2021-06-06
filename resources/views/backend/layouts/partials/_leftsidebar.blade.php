<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu ">
            <div class="nav">


                <div class="sb-sidenav-menu-heading pt-0"></div>


                <a class="nav-link"
                   href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-tachometer"></i></div>
                    Dashboard
                </a>

                <a class="nav-link"
                   href="{{route('category')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-cubes"></i></div>
                    Categories
                </a>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-paste"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePosts" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#collapsePosts"
                           href="{{route('post')}}">All Posts</a>
                        <a class="nav-link" data-parent="#collapsePosts"
                           href="{{route('post.create')}}">Add New</a>
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSponsor"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-handshake-o"></i></div>
                    Sponsor
                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSponsor" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" data-parent="#collapseSponsor"
                           href="{{route('sponsor')}}">All Sponsor</a>
                        <a class="nav-link" data-parent="#collapseSponsor"
                           href="{{route('sponsor.create')}}">Add New</a>
                    </nav>
                </div>

                <a class="nav-link"
                   href="{{route('setting')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-gears"></i></div>
                    Settings
                </a>
            </div>
        </div>
        {{-- <div class="sb-sidenav-footer">
             <div class="small">Logged in as:</div>
             Start Bootstrap
         </div>--}}
    </nav>
</div>
