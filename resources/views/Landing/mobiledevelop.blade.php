@extends('Landing.template.app')
@section('content')
        
    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title mb-4"><span class="text-primary font-weight-bold"> KURSUS MOBILE DEVELOPMENT </span></h4>
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
                        <img src="{{ asset('public/landing/images/Images_Banner/android_app.jpeg') }}" class="img-fluid rounded-top mx-auto" alt="">
                    </div>
                </div><!--end col-->
                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="title mb-4">ANDROID APP DEVELOPMENT</h4>
                        <p class="text-muted">Tujuan kursus Mobile App Android adalah siswa mampu membuat aplikasi mobile di berbagai sistem operasi Android, Dengan ilmu yang anda dapatkan di paket ini, anda mampu mengerjakan project – project berbagai macam aplikasi yang di butukan di bidang industry dunia kerja atau anda bisa membuat produk sendiri sebagai developer android.</p>

                        <p class="title mb-4">* MATERI : </p>
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Desain Front End</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Back End</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>CRUD</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>API</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Web Service / Server</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Project Oriented</li>
                        </ul>                            
                        <div class="btn btn-primary mt-3">450.000/bulan Durasi 16 Sesi</div>
                        <a href="#" class="btn btn-primary mt-3">Daftar Sekarang</a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title">
                        <h4 class="title mb-4">IOS APP DEVELOPMENT</h4>
                        <p class="text-muted">Tujuan kursus Mobile App Android adalah siswa mampu membuat aplikasi mobile di sistem operasi IOS, Dengan ilmu yang anda dapatkan di paket ini, anda mampu mengerjakan project – project berbagai macam aplikasi yang di butukan di bidang industry dunia kerja atau anda bisa membuat produk sendiri sebagai developer IOS.</p>
                        <p class="title mb-4">* MATERI : </p>
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Desain Front End</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Back End</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>CRUD</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>API</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Web Service / Server</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Project Oriented</li>
                        </ul>
                        <div class="btn btn-primary mt-3">450.000/bulan Durasi 16 Sesi</div>
                        <a href="#" class="btn btn-primary mt-3">Daftar Sekarang</a>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 order-1 order-md-2">
                    <img src="{{ asset('public/landing/images/Images_Banner/ios_app.jpeg') }}" class="img-fluid rounded-top mx-auto" alt="">
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