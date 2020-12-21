
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Cyber Solution|Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="AyoPos Aplikasi Kasir Gratis tanpa iklan - solusi point of sales UKM Indonesia ">
        <meta name="keywords" content="AyoPos,stock of name, aplikasi kasir, marketing, software pos, software point of sale, ayopos.id, ayopos point of sale, ayopos pos, program penjualan, program kasir, program pos, program point of sale, program restoran, android pos, point of sale android, program toko, program penjualan toko, pos cloud, point of sale cloud, pos ayopos, ayopos.com , aplikasi kasir, aplikasi penjualan kasir, aplikasi pos, sistem kasir, software kasir, software penjualan">
        <meta content="index,follow" name="robots">
        <meta content="ayopos.id" name="Author">
        <meta content="index,follow" name="MSNBOT">
        <meta content="index,follow" name="YAHOOSLURP">
        <meta content="index,follow" name="GOOGLEBOT">
        <meta content="index,follow" name="ArchitextSpider">
        <meta content="index,follow" name="FAST-WebCrawler/">
        <meta content="index,follow" name="Lycos_Spider_(T-Rex)">
        <meta name="author" content="webcybercenter.com">
        
        <link href="{{ asset('public/landing/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        
        <link href="{{ asset('public/landing/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
        
        <link href="{{ asset('public/landing/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="{{ asset('public/landing/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/landing/css/owl.theme.default.min.css') }}">
        
        <link href="{{ asset('public/landing/css/style.css') }}" rel="stylesheet" type="text/css">
        <link id="noteanywherecss" media="screen" type="text/css" rel="stylesheet" href="data:text/css,.note-anywhere%20.closebutton%7Bbackground-image%3A%20url%28chrome-extension%3A//bohahkiiknkelflnjjlipnaeapefmjbh/asset/deleteButton.png%29%3B%7D%0A">

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="{{url('/')}}" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="bg-home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-6">
                                <div class="mr-lg-5">   
                                    <img src="{{ asset('public/landing/images/user/login.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="login-page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Login</h4>  
                                    </div>
                                    <form method="POST" action="{{ route('login') }}" class="login-form">
                                     @csrf

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" name="email" required="">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
    
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" name="password" class="form-control pl-5 @error('password') is-invalid @enderror" placeholder="Password" required="">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <p class="float-right forgot-pass"><a href="page_recovery_passward.html" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-0">
                                                <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                            </div>
                                            <div class="col-lg-12 mt-4 text-center">
                                                <h6>Or Login With</h6>
                                                <ul class="list-unstyled social-icon mb-0 mt-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                                </ul><!--end icon-->
                                            </div>
                                            <div class="col-12 text-center">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="{{url('/Landing/register')}}" class="text-dark font-weight-bold">Sign Up</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div><!---->
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="{{ asset('public/landing/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/landing/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/landing/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('public/landing/js/scrollspy.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('public/landing/js/app.js') }}"></script>
    </body>
</html>