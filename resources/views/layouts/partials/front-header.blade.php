 <!-- Modal -->

    <div class="modal fade offcanvas-modal" id="exampleModal">

        <div class="modal-dialog offcanvas-dialog">

            <div class="modal-content">

                <div class="modal-header offcanvas-header">

                    <a class="offcanvas-logo" href="{{route('home')}}"><img src="{{ asset('assets/images/logo-dark.png')}}" alt="logo" /></a>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>



                <!-- offcanvas-mobile-menu start -->



                <nav id="offcanvasNav" class="offcanvas-menu">

                    <ul>

                        <li><a href="{{route('home')}}">Home</a></li>

                        <li><a href="about.html">About</a></li>

                        <li><a href="javascript:void(0)">Services</a></li>

                        <li><a href="javascript:void(0)">Faq</a></li>

                        <li><a href="javascript:void(0)">Blog</a></li>

                        <li><a href="contact.html">Contact</a></li>

                        @if(Auth::guest())

                        <li class="btn-register"><a href="javascript:void(0);"  class="btn btn-secondary btn-hover-secondary" data-bs-toggle="modal" data-bs-target="#registerpopup">Register</a></li>

                        <li class="btn-login"><a href="javascript:void(0);"  class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#loginpopup">Login</a></li>

                        @else



                        <li>

                            <a class="btn btn-dark" href="{{route('my-profile')}}" id="myacc" >

                            Profile

                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a class="sub-menu-link" href="{{route('userdashboard')}}">My Account</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a class="sub-menu-link" href="{{url('frontlogout')}}">Logout</a>
                                </li>
                                
                            </ul>
                           

                           </li>



                           @endif

                    </ul>





                </nav>

                <!-- offcanvas-mobile-menu end -->

            </div>

        </div>

    </div>

    <header id="active-sticky" class="header-section">

        <!-- Header  Start -->

        <div class="container">

            <div class="row align-items-center">

                <!-- Header Logo Start -->

                <div class="col">

                    <div class="header-logo">
                            @if(request()->route()->uri == '/')
                                <a href="{{route('home')}}" class="dark-logo"><img src="{{ asset('assets/images/logo-dark.png')}}" alt="Site Logo" /></a>
                                <a href="{{route('home')}}" class="light-logo"><img src="{{ asset('assets/images/logo-light.png')}}" alt="Site Logo" /></a>
                            @else
                                <a href="{{route('home')}}" class="dark-logo"><img src="{{ asset('assets/images/logo-dark.png')}}" alt="Site Logo" /></a>
                                <a href="{{route('home')}}" class="light-logo"><img src="{{ asset('assets/images/logo-dark.png')}}" alt="Site Logo" /></a>
                            @endif

                    </div>

                </div>

                <!-- Header Logo End -->



                <!-- Header Menu Start -->

                <div class="col text-end">

                    <nav class="main-menu d-none d-lg-block">

                        <ul class="d-flex">

                            <li><a href="{{route('home')}}">Home</a></li>

                            <li><a href="#">About</a></li>

                            <li><a href="#">Service</a></li>

                            <li><a href="#">Faq</a></li>

                            <li><a href="#">Blog</a></li>

                            <li><a href="contact.html">Contact</a></li>

                            @if(Auth::guest())

                            <li><a href="javascript:void(0);"  class="btn btn-secondary btn-hover-secondary" data-bs-toggle="modal" data-bs-target="#registerpopup">Register</a></li>

                            <li><a href="javascript:void(0);"  class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#loginpopup" id="loginbtn">Login</a></li>

                            @else

                            <li>

                            <a class="btn btn-dark" href="{{route('my-profile')}}" id="myacc" >

                            Profile

                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a class="sub-menu-link" href="{{route('userdashboard')}}">My Account</a>
                                </li>
                                <li class="sub-menu-item">
                                    <a class="sub-menu-link" href="{{url('frontlogout')}}">Logout</a>
                                </li>
                                
                            </ul>
                           

                           </li>






                            @endif

                        </ul>

                    </nav>

                    <button class="toggle" data-bs-toggle="modal" data-bs-target="#exampleModal">

                        <span class="icon-top"></span>

                        <span class="icon-middle"></span>

                        <span class="icon-bottom"></span>

                    </button>

                </div>

                <!-- Header Menu End -->

            </div>

        </div>

        <!-- Header  End -->

    </header>