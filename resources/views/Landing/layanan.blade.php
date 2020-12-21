@extends('Landing.template.app')
@section('content')

    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title mb-4"><span class="text-primary font-weight-bold"> LAYANAN KURSUS </span></h4>
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
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h6 class="title mb-2">Bingung mulai belajar coding dari mana? Tenang saja! Kami sudah menyiapkan layanan kursus belajar yang bisa kamu ikut </h6>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc position-relative overflow-hidden rounded border">
                            <div class="position-relative d-block overflow-hidden">
                                <a href="{{url('/Landing/webdevelop')}}">
                                    <img src="{{ asset('public/landing/images/Images_Banner/webmaster-project.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                                </a>
                            </div>
                            <div class="content p-3">
                                <h5><a href="#" class="title text-dark">Web Development</a></h5>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>600.000/Bulan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <a href="{{url('/Landing/mobiledevelop')}}">
                                    <img src="{{ asset('public/landing/images/Images_Banner/Mobile_Programing.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                                </a>
                            </div>
                            <div class="content p-3">
                                <h5><a href="#" class="title text-dark">Mobile Development</a></h5>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>450.000/Bulan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <a href="{{url('/Landing/digital_marketing')}}">
                                    <img src="{{ asset('public/landing/images/Images_Banner/Digitar_Marketing.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                                </a>
                            </div>
                            <div class="content p-3">
                                <a href="#">
                                    <h5 class="title text-dark">Digital Marketing</h5>
                                </a>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>2.500.000/Paket</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <a href="{{url('/Landing/java_dekstop')}}">
                                    <img src="{{ asset('public/landing/images/Images_Banner/Java-Programing.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                                </a>
                            </div>
                            <div class="content p-3">
                                <a href="#">
                                    <h5 class="title text-dark">Java Desktop App</h5>
                                </a>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>500.000/Bulan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <a href="{{url('/Landing/cms_master')}}">
                                    <img src="{{ asset('public/landing/images/Images_Banner/CMS.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                                <a/>
                            </div>
                            <div class="content p-3">
                                <a href="#">
                                    <h5 class="title text-dark">CMS Master</h5>
                                </a>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>400.000/Bulan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <a href="{{url('/Landing/seo_engineering')}}">
                                    <img src="{{ asset('public/landing/images/Images_Banner/SEO.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                                </a>
                            </div>
                            <div class="content p-3">
                                <a href="#">
                                    <h5 class="title text-dark">SEO Engineering</h5>
                                </a>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>2.000.000/Paket</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{ asset('public/landing/images/Images_Banner/Robotic-Development.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                                <div class="overlay-work"></div>
                                <a href="#" class="text-muted h6 preview">Lihat Detail<i class="mdi mdi-chevron-right"></i></a>
                            </div>
                            <div class="content p-3">
                                <a href="#">
                                    <h5 class="title text-dark">Robotic Development</h5>
                                </a>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>2.000.000/Paket</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{ asset('public/landing/images/Images_Banner/codeing_for_kids.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                            </div>
                            <div class="content p-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Coding Kids</a></h5>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>2.250.000/Paket</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{ asset('public/landing/images/Images_Banner/Accounting.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                            </div>
                            <div class="content p-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">Accounting Master</a></h5>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>2.500.000/Paket</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="courses-desc rounded border position-relative overflow-hidden">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{ asset('public/landing/images/Images_Banner/Illustration_Pajak.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                            </div>
                            <div class="content p-3">
                                <h5><a href="javascript:void(0)" class="title text-dark">TAX Master</a></h5>
                                <div class="rating">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    </ul>
                                </div>
                                <div class="fees">
                                    <ul class="list-unstyled float-right mb-0">
                                        <li class="h6"><span class="h6">Rp</span>2.500.000/Paket</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="collection">
                                <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="home-shape-bottom">
                        <img src="{{ asset('public/landing/images/shapes/round-light.png') }}" alt="" class="img-fluid mx-auto d-block">
                    </div> 
                </div>
            </div>
        </section>

        <!-- FAQ n Contact Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="main-title mb-4"> Anda Memiliki Pertanyaan Mengenai Layanan <br> Kursus? Silahkan Hubungi Tim Kami</h4>
                            <a href="page_contact_two.html" class="btn btn-primary mt-4">Contact us <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </section>
        
@endsection