
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>AyoPos - Daftar sekarang!! Aplikasi Kasir Gratis tanpa iklan </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Kursus Website,Kursus Web,Kursus Web Design, Kursus Web Programming, Kursus Internet Marketing,Tempat Kursus Membuat Web, SEO, Web Design, kursus java, kusrsus android,Kursus ASP.Net, Kursus VB.net,Kursus C++,Kursus Algoritma, Kursus Bahasa C,Web Programming, Web Animation, HTML,CSS, Javascript,PHP, Codeigniter, framework YI, Ajax, jQuery, Search Engine Optimization, Wordpress, Joomla, Drupal, Toko Online, dan Internet Marketing, Kursus KKP,Kursus TA, Kursus Tugas Akhir,Kursus Membuat Skripsi , Kursus Skripsi, Kursus Mikrokontroller, Kursus Robot, Kursus PLC, Kursus Microcontroller Kursus bimbingan penulisan tugas akhir dan skripsi, Kursus bimbingan penulisan tugas akhir dan skripsi tangerang, Kursus bimbingan penulisan tugas akhir dan skripsi Jakarta, Kursus bimbingan penulisan tugas akhir dan skripsi bogor, Kursus bimbingan penulisan tugas akhir dan skripsi depok, Kursus bimbingan penulisan tugas akhir dan skripsi bekasi, kursus akuntansi , kursus pajak, kursus Coding Kidz, kursus coding School, kursus Koding anak-anak, kursus react Native, Kurus Golang, Kursus Laravel, Kursus Pyhton"/>
        <meta name="keyword" content="Kursus Website,Kursus Web,Kursus Web Design, Kursus Web Programming, Kursus Internet Marketing,Tempat Kursus Membuat Web, SEO, Web Design, kursus java, kusrsus android,Kursus ASP.Net, Kursus VB.net,Kursus C++,Kursus Algoritma, Kursus Bahasa C,Web Programming, Web Animation, HTML,CSS, Javascript,PHP, Codeigniter, framework YI, Ajax, jQuery, Search Engine Optimization, Wordpress, Joomla, Drupal, Toko Online, dan Internet Marketing, Kursus KKP,Kursus TA, Kursus Tugas Akhir,Kursus Membuat Skripsi , Kursus Skripsi, Kursus Mikrokontroller, Kursus Robot, Kursus PLC, Kursus Microcontroller  Kursus bimbingan penulisan tugas akhir dan skripsi, Kursus bimbingan penulisan tugas akhir dan skripsi tangerang, Kursus bimbingan penulisan tugas akhir dan skripsi Jakarta, Kursus bimbingan penulisan tugas akhir dan skripsi bogor, Kursus bimbingan penulisan tugas akhir dan skripsi depok, Kursus bimbingan penulisan tugas akhir dan skripsi bekasi, kursus akuntansi , kursus pajak, kursus Coding Kidz, kursus coding School, kursus Koding anak-anak, kursus react Native, Kurus Golang, Kursus Laravel, Kursus Pyhton"/>
        <meta content="index,follow" name="robots">
        <meta content="ayopos.id" name="Author">
        <meta content="index,follow" name="MSNBOT">
        <meta content="index,follow" name="YAHOOSLURP">
        <meta content="index,follow" name="GOOGLEBOT">
        <meta content="index,follow" name="ArchitextSpider">
        <meta content="index,follow" name="FAST-WebCrawler/">
        <meta content="index,follow" name="Lycos_Spider_(T-Rex)">
        <meta name="author" content="ayopos.id">
        
        <!-- Bootstrap -->
        <link href="{{ asset('public/landing/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Magnific -->
        <link href="{{ asset('public/landing/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('public/landing/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
                <!-- Slider -->               
        <link rel="stylesheet" href="{{ asset('public/landing/css/owl.carousel.min.css') }}"/> 
        <link rel="stylesheet" href="{{ asset('public/landing/css/owl.theme.default.min.css') }}"/> 
        <!-- Main css -->
        <link href="{{ asset('public/landing/css/style.css') }}" rel="stylesheet" type="text/css" />
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
                                    <img src="{{ asset('public/landing/images/user/signup.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="login-page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Register</h4>  
                                    </div>
                                    <form method="POST" action="{{ route('register') }}" class="login-form">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Your Name<span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="text" class="form-control pl-5 @error('name') is-invalid @enderror" placeholder="Name" name="name" required="">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input type="email" class="form-control pl-5 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required="" autocomplete="email">
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
                                                    <input id="password" type="password" class="form-control pl-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

    
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input id="password-confirm" type="password" class="form-control pl-5" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-0">
                                                <button type="submit" class="btn btn-primary w-100">Register </button>
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