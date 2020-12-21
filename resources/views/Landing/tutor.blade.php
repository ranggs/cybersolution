@extends('Landing.template.app')
@section('content')

    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title mb-4"><span class="text-primary font-weight-bold"> TEAM TUTOR </span></h4>
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
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h6 class="title mb-2">Untuk hasil terbaik dalam belajar coding, Instructur kami siap <br> membimbing anda belajar coding step by step </h6>
                    </div>
                </div>
            </div>

                <!-- Profile Instructur Start -->
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="#" class="name text-dark">Ary Budi Warsito, M.Kom</a></h5>
                            <small class="designation text-muted">Web Developers</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="#" class="name text-dark">Tiar S.Kom</a></h5>
                            <small class="designation text-muted">Dekstop Programing</small>
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="#" class="name text-dark">Dony Saputra, M.Kom</a></h5>
                            <small class="designation text-muted">Mobile Application & Web Developers </small>
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Gento. S.Kom</a></h5>
                            <small class="designation text-muted">Microcontroller Programming</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Yohendra, M.Kom</a></h5>
                            <small class="designation text-muted">SEO & Internet Marketing</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Surya Wedi, ST</a></h5>
                            <small class="designation text-muted">Web Developers</small>
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Oyon, S.Kom</a></h5>
                            <small class="designation text-muted">Web Developers & Java Developers</small>
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                         <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Bayu Porsea Yudha, S.Kom</a></h5>
                            <small class="designation text-muted">3D Modeling & Animasi 3D</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ariya</a></h5>
                            <small class="designation text-muted">Analisis Sistem</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Dedy Alamsya, M.Kom</a></h5>
                            <small class="designation text-muted">Mobile Application & Web Developers</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aepsaifullo, M.Kom</a></h5>
                            <small class="designation text-muted">Mobile Application & Web Developers</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ryan Lilik, S.Kom</a></h5>
                            <small class="designation text-muted">Analisis Sistem</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-bottom">
                    <img src="{{ asset('public/landing/images/shapes/curve-light.png') }}" alt="" class="img-fluid mx-auto d-block">
                </div> 
            </div>
        </div>
    </section>

    <!-- FAQ n Contact Start -->
    <section class="section bg-light">
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                    <h4 class="main-title mb-4 text-center">Konsultasi Dengan Instructur Kami</h4>
                    <div class="pt-5 pb-5 p-4 bg-light shadow rounded">
                        <p class="text-muted para-desc mb-0 mx-auto">Isi form dibawah ini untuk berkonsultasi dengan instructur kami. Kami akan menghubungi email anda</p>
                        <div class="custom-form mt-4">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Nama</label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input type="text" name="name" id="name" class="form-control pl-5" placeholder="Name :">
                                        </div>                                                                   
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Email</label>
                                            <i class="mdi mdi-email ml-3 icons"></i>
                                            <input name="subject" id="subject" class="form-control pl-5" placeholder="Email :">
                                        </div>                                                                   
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Comments</label>
                                            <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
                                            <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Submit">
                                        <div id="simple-msg"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form--> 
                        </div><!--end custom-form-->
                    </div>
                </div><!--end col-->
                <div class="col-lg-7 col-md-6 order-1 order-md-2">
                    <img src="{{ asset('public/landing/images/contact.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-bottom">
                    <img src="{{ asset('public/landing/images/shapes/curve-dark.png') }}" alt="" class="img-fluid mx-auto d-block">
                </div> 
            </div>
        </div>
    </section>
@endsection 