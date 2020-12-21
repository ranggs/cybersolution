@extends('Landing.template.app')
@section('content')

    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title mb-4"><span class="text-primary font-weight-bold"> KURSUS JAVA DEKSTOP APP</span></h4>
                            </div>
                        </div>  <!--end col-->
                        
                    </div><!--end row-->
                </div> <!--end container-->
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="position-relative">
                        <img src="{{ asset('public/landing/images/Images_Banner/Java-Programing.png') }}" class="img-fluid shadow rounded" alt="">
                    </div>
                </div><!--end col-->
                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="title mb-4">JAVA DEKSTOP APP</h4>
                        <p class="text-muted">Tujuan kursus Java Destop adalah siswa mempelajari tentang konsep Object Oriented Programming dalam Java dan bagaimana membuat aplikasi menggunakan bahasa Pemrograman Java dengan baik dan benar. Peserta akan dituntun secara bertahap dalam memahami dan membuat aplikasi berbasis Java.</p> 
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-arrow">
                    <img src="{{ asset('public/landing/images/shapes/arrow-bottom.png') }}" alt="" class="img-fluid mx-auto d-block">
                    <a href="#cta" class="mouse-down"><i class="mdi mdi-chevron-double-down arrow-icon mover text-dark h5"></i></a>
                </div> 
            </div>
        </div>
    </section>
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h6 class="title mb-2">PEMATERIAN</h6>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="event-schedule bg-white rounded p-3 border">
                        <div class="content">
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Introduction to Java</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Basic Element in Java</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Object Oriented Programming in Java</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Data Type, Variable and Array</li>
                            </ul>    
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-schedule bg-white rounded p-3 border">
                        <div class="content">
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Control Statement</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Dan Mteri Lainnya</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Class and Object </li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Package and Interface </li>
                            </ul>    
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-schedule bg-white rounded p-3 border">
                        <div class="content">
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Exception </li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Input and output </li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>String in Java </li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Thread </li>
                            </ul>    
                        </div>
                    </div>
                </div>
                <div class="content mt-4 pt-2 text-center">
                    <div class="btn btn-primary mt-3">Rp.500.000/Bulan Durasi 20 Sesi</div>
                    <a href="#" class="btn btn-primary mt-3">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-bottom">
                    <img src="{{ asset('public/landing/images/shapes/curve-dark.png') }}" alt="" class="img-fluid mx-auto d-block">
                </div> 
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection 