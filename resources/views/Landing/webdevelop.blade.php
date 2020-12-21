@extends('Landing.template.app')
@section('content')
        
    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title mb-4"><span class="text-primary font-weight-bold"> KURSUS WEB DEVELOPMENT </span></h4>
                            </div>
                        </div>  <!--end col-->
                    </div><!--end row-->
                </div> <!--end container-->
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-bottom">
                    <img src="{{ asset('public/landing/images/shapes/round-white.png') }}" alt="" class="img-fluid mx-auto d-block">
                </div> 
            </div><!--end row-->
        </div>
    </section>



    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="position-relative">
                        <img src="{{ asset('public/landing/images/Images_Banner/webmaster-project.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                    </div>
                </div><!--end col-->
                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="title mb-4">WEBMASTER PROJECT</h4>
                        <p class="text-muted">Tujuan kursus webmaster project adalah peserta mampu membangun project dan mempelajari tentang konsep Object Oriented Programming dalam webmaster dan bagaimana cara membuat aplikasi menggunakan bahasa Pemrograman berbasis web dengan baik dan benar.</p>

                        <p class="title mb-4">* MATERI : </p>
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>HTML5 + CSS3</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Our PHP + Jquery + My Sql</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Bootstrap</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Project Oriented</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Reporting PDF</li>
                        </ul>                            
                        <div class="btn btn-primary mt-3">Rp.450.000/bulan Durasi 20 Sesi</div>
                        <a href="#" class="btn btn-primary mt-3">Daftar Sekarang</a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title">
                        <h4 class="title mb-4">WEBMASTER EXPERT</h4>
                        <p class="text-muted">Tujuan kursus webmaster expert adalah siswa ingin meng-upgrate skill mampu membangun project website secara profesional dan mempelajari tentang konsep class Programming dengan framework dalam webmaster dan bagaimana cara membuat website menggunakan bahasa Pemrograman berbasis web dengan baik dan benar.</p>
                        <p class="title mb-4">* MATERI : </p>
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Framework  Code Igniter</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Framework Laravel</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Golang</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>React Native + JS</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Bootstrap</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Project Oriented</li>
                        </ul>
                        <div class="btn btn-primary mt-3">Rp.600.000/bulan Durasi 20 Sesi</div>
                        <a href="#" class="btn btn-primary mt-3">Daftar Sekarang</a>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 order-1 order-md-2">
                    <img src="{{ asset('public/landing/images/Images_Banner/WebMaster_Expert.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-bottom">
                    <img src="{{ asset('public/landing/images/shapes/curve-dark.png') }}" alt="" class="img-fluid mx-auto d-block">
                </div> 
            </div>
        </div>
    </section>
@endsection