

    <header id="topnav" class="defaultscroll sticky bg-white">
        <div class="container">
                    <!-- Logo container-->
            <div>
                <a class="logo" href="{{url('/')}}"><img src="{{ asset('public/landing/images/Logo/Logo_CyberSolution_.png') }}" height="65" ></a>
            </div>                 
            <div class="buy-button pt-3">
                <a href="{{url('/Landing/register')}}" target="_blank" class="btn btn-primary">Register Now</a>
            </div>

            <div class="buy-button">
                <a href="{{url('/Landing/login')}}" target="_blank" class="btn btn-primary" >Login Now</a>  &nbsp;
            </div>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li><a href="{{url('/')}}">HOME</a></li>
                    <li class="has-submenu">
                        <a href="#">KURSUS</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{url('/Landing/layanan')}}">All Kursus</a></li>
                                    <li><a href="{{url('/Landing/webdevelop')}}">Web Development</a></li>
                                    <li><a href="{{url('/Landing/mobiledevelop')}}">Mobile Development</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
            
                    <li class="has-submenu">
                        <a href="{{url('/Landing/tutor')}}">INSTRUCTUR</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">LAINNYA</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{url('/Landing/aboutus')}}">About Us</a></li>
                                    <li><a href="{{url('/Landing/contactus')}}">Contact Us</a></li>
                                    <li><a href="{{url('/Landing/FAQ')}}">FAQ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div>
    </header>