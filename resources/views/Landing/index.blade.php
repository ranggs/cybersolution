@extends('Landing.template.app')
@section('content')

    <section class="bg-home" style="background: url('public/landing/images/Images_Banner/banner_landing.png') center center;" id="home">
        <div class="bg-overlay bg-overlay-light"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row margin-top-100 justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center mt-3 position-relative" style="z-index: 1;">
                                <h1 class="heading text-white mb-1">Cyber Solution</h1>
                                <p class="para-desc mx-auto text-light">Wadah bimbingan belajar yang sangat cocok untuk kamu yang ingin melipatgandakan kecepatan belajar dan meningkatkan keahlian di bidang yang sedang kamu geluti tanpa harus mengganggu aktivitas harianmu.</p>
                                <div class="mt-4 pt-2">
                                    <a href="{{url('/Landing/formulir')}}" class="btn btn-success">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container--> 

            </div><!--end home desc center-->
        </div><!--end home center-->
    </section><!--end section--> 

        
    <section class="section-two bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="course-feature text-center position-relative d-block overflow-hidden bg-white rounded p-4 pt-5 pb-5">
                        <div class="icon">
                            <img src="{{ asset('public/landing/images/img_pendukung/online-learning.svg') }}" height="55" alt="">
                        </div>
                            
                        <h4 class="mt-3"><a href="#" class="title text-dark"> Belajar Cepat dan Terarah </a></h4>
                        <p class="text-muted">Bosan dengan tutorial di internet yang tidak terarah? Bagaimana jika kamu bisa menghemat waktu belajarmu dan biarkan kami menyiapkan alur belajar terbaik untukmu.</p>
                    </div>
                </div><!--end col--> 
                    
                <div class="col-md-4">
                    <div class="course-feature text-center position-relative d-block overflow-hidden bg-white rounded p-4 pt-5 pb-5">
                        <div class="icon">
                            <img src="{{ asset('public/landing/images/img_pendukung/alarm.svg') }}" height="55" alt="">
                        </div>
                            
                        <h4 class="mt-3"><a href="#" class="title text-dark"> Kamu yang Tentukan <br> Waktu Belajarmu </a></h4>
                        <p class="text-muted">aktivitasmu saat ini Bekerja Kuliah ataupun Sekolah? Tak perlu khawatir kamu bisa ikut belajar di sini. Kamu yang tentukan sendiri kapan waktu terbaikmu dalam belajar. </p>
                    </div>
                </div><!--end col--> 
                    
                <div class="col-md-4">
                    <div class="course-feature text-center position-relative d-block overflow-hidden bg-white rounded mb-0 p-4 pt-5 pb-5">
                        <div class="icon">
                            <img src="{{ asset('public/landing/images/img_pendukung/report.svg') }}" height="55" alt="">
                        </div>
                
                        <h4 class="mt-3"><a href="#" class="title text-dark"> Belajar dari Project<br>Studi Kasus </a></h4>
                        <p class="text-muted">Tidak hanya membahas teori, di sini <br>kamu juga akan belajar secara manual menggunakan teknologi aplikasi melalui project studi kasus.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="counter">
                <div class="col-md-3 col-6 mt-2 pt-2">
                    <div class="counter-box text-center">
                        <h2 class="mb-0 mt-3"><span class="counter-value" data-count="50">10</span>+</h2>
                        <h5 class="counter-head text-muted">Siswa Aktif</h5>
                    </div><!--end counter box-->
                </div>

                <div class="col-md-3 col-6 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <h2 class="mb-0 mt-3"><span class="counter-value" data-count="50">10</span>+</h2>
                        <h5 class="counter-head text-muted">Paket Kursus</h5>
                    </div><!--end counter box-->
                </div>

                <div class="col-md-3 col-6 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <h2 class="mb-0 mt-3"><span class="counter-value" data-count="50">10</span>+</h2>
                        <h5 class="counter-head text-muted">Universitas</h5>
                    </div><!--end counter box-->
                </div>

                <div class="col-md-3 col-6 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <h2 class="mb-0 mt-3"><span class="counter-value" data-count="50">10</span>+</h2>
                        <h5 class="counter-head text-muted">Kota</h5>
                    </div><!--end counter box-->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-bottom">
                    <img src="{{ asset('public/landing/images/shapes/round-white.png') }}" alt="" class="img-fluid mx-auto d-block">
                </div> 
            </div>
        </div>
    </section>

    <section class="section" id="courses">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 order-1 order-md-2">
                    <div class="title-heading mt-4 ml-lg-5">
                        <h1 class="heading mb-3">KAMI ADALAH ?</h1>
                        <p class="para-desc text-muted">Cyber Solution adalah wadah Bimbingan Belajar yang Kompetensi untuk pelajar, Mahasiswa  dan Umum di bidang Teknologi Informasi, Kami satu-satunya bimbingan belajar untuk membuat project KKP, TUGAS AKHIR & SKRIPSI di Indonesia yang mengajarkan kepada siswa bagaimana cara membuat website KREATIF & DINAMIS serta Software APLIKASI yang menyesuaikan kebutuhan siswa.</p>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{ asset('public/landing/images/illustrator/working_with_computer.svg') }}" class="img-fluid" alt="">
                </div>
            </div><!--end row-->
        </div><!--end container--> 

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">LAYANAN KURSUS</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Bingung mulai belajar coding dari mana? Tenang saja! Kami sudah menyiapkan layanan kursus belajar yang bisa kamu ikut </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="courses-desc position-relative overflow-hidden rounded border">
                        <div class="position-relative d-block overflow-hidden">
                            <img src="{{ asset('public/landing/images/Images_Banner/webmaster-project.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                        </div>
                        <div class="content p-3">
                            <h5><a href="web_development.html" class="title text-dark">Web Development</a></h5>
                            <div class="rating">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
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
                            <img src="{{ asset('public/landing/images/Images_Banner/Mobile_Programing.png') }}" class="img-fluid rounded-top mx-auto" alt="">
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
                        </div>
                        <div class="collection">
                            <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="courses-desc rounded border position-relative overflow-hidden">
                        <div class="position-relative d-block overflow-hidden">
                            <img src="{{ asset('public/landing/images/Images_Banner/Digitar_Marketing.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                        </div>
                        <div class="content p-3">
                            <h5><a href="#" class="title text-dark">Digital Marketing</a></h5>
                            <div class="rating">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
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
                            <img src="{{ asset('public/landing/images/Images_Banner/Java-Programing.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                        </div>
                        <div class="content p-3">
                            <h5><a href="#" class="title text-dark">Java Desktop Development</a></h5>
                            <div class="rating">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
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
                            <img src="{{ asset('public/landing/images/Images_Banner/CMS.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                        </div>
                        <div class="content p-3">
                            <h5><a href="javascript:void(0)" class="title text-dark">CMS Master</a></h5>
                            <div class="rating">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
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
                            <img src="{{ asset('public/landing/images/Images_Banner/SEO.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                        </div>
                        <div class="content p-3">
                            <a href="#"><h5 class="title text-dark">SEO Engineering</h5></a>
                            <div class="rating">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star h5 mb-0 text-warning"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="collection">
                            <a href="javascript:void(0)"><i class="mdi mdi-heart h5"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-12 mt-4 pt-2 text-center">
                    <a href="{{url('/Landing/layanan')}}" class="btn btn-primary">View More <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>

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
                        <h4 class="main-title mb-4">KEUNGGULAN KAMI</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Semua yang kamu butuhkan untuk memulai belajar coding<br> dan meningkatkan keahlian codingmu</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/online-learning.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Alur Belajar Terarah</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/clipboard.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Belajar Terukur</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/tick.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Waktu Fleksibel</h4>
                        </div>
                    </div>
                </div>
                    
                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/web-programming.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Garansi Mahir</h4>
                        </div>
                    </div>
                </div>
                    
                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/book.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Kurikulum Standar Industri</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/ribbon.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Sertifikat</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/file.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Kumpulan Project</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/chat.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Diskusi Tanya Jawab</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="main-title mb-4">FASILITAS KAMI</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Pendukug Belajarmu, sangat nyaman dan kondusif</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">

                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/air-conditioner.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Ruangan AC</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/wifi.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Free Akses Internet</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/coffee.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">Coffee Break</h4>
                        </div>
                    </div>
                </div>
                    
                <div class="col-lg-3 col-md-4 col-6 mt-4 pt-2">
                    <div class="features text-center pt-3 pb-3">
                        <img src="{{ asset('public/landing/images/img_pendukung/projector.svg') }}" height="50" alt="">
                        <div class="content mt-3">
                            <h4 class="title-2">LCD Proyektor</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="main-title mb-4">TEAM TUTOR KAMI</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Untuk hasil terbaik dalam belajar coding, Instructur kami siap <br> membimbing anda belajar coding step by step </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 pt-2 text-center">
                    <div id="customer-testi" class="owl-carousel owl-theme">
                        <div class="customer-testi m-2 text-center p-4">
                            <div class="position-relative">
                                <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                            </div>
                            <h5 class="mb-0"><a href="#" class="name text-dark">Ary Budi Warsito, M.Kom</a></h5>
                            <small class="designation text-muted">Web Developers</small>
                        </div><!--end customer testi-->
                            
                        <div class="customer-testi m-2 text-center p-4">
                            <div class="position-relative">
                                <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                            </div>
                            <h5 class="mb-0"><a href="#" class="name text-dark">Tiar S.Kom</a></h5>
                            <small class="designation text-muted">Dekstop Developers</small>
                        </div><!--end customer testi-->
                            
                        <div class="customer-testi m-2 text-center p-4">
                            <div class="position-relative">
                                <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                            </div>
                            <h5 class="mb-0"><a href="#" class="name text-dark">Dony Saputra, M.Kom</a></h5>
                            <small class="designation text-muted">Mobile Application & Web Developers </small> 
                        </div><!--end customer testi-->
                            
                        <div class="customer-testi m-2 text-center p-4">
                            <div class="position-relative">
                                <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                            </div>
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Gento. S.Kom</a></h5>
                            <small class="designation text-muted">Microcontroller Programing</small>
                        </div><!--end customer testi-->
                            
                        <div class="customer-testi m-2 text-center p-4">
                            <div class="position-relative">
                                <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                            </div>
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Yohendra, M.Kom</a></h5>
                            <small class="designation text-muted">SEO & Internet Marketing</small>
                        </div><!--end customer testi-->
                            
                        <div class="customer-testi m-2 text-center p-4">
                            <div class="position-relative">
                                <img src="{{ asset('public/landing/images/user-profile.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                            </div>
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Surya Wedi, ST</a></h5>
                            <small class="designation text-muted">Web Programing</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="home-shape-bottom">
                        <img src="{{ asset('public/landing/images/shapes/curve-white.png') }}" alt="" class="img-fluid mx-auto d-block">
                    </div> 
                </div>
            </div>
        </div>
    </section>
        
    <section class="section">
    <!-- Testi Subscribe Start -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5 mt-6 pt-6">
                    <img src="{{ asset('public/landing/images/TOP_Service_CyberSolution.png') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-5">
                        <h4 class="main-title mb-4">TOP LAYANAN KAMI</h4>
                        <p class="text-muted para-desc mb-0 mx-auto"><span class="text-primary font-weight-bold">Cyber Solution</span> Menawarkan Sistem belajar semi private. Diajarkan secara step by step mulai dari NOL sampai Mahir  untuk Project fleksible kami menyesuaikan dengan project KKP, TA/SKRIPSI siswa masing-masing, di dampingi oleh mentor yang berpengalaman bidang Praktisi dan akademisi plus spesialis yang handal</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">DIPERCAYA OLEH</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Member aktif kami dari berbagai perusahaan dan universitas di Indonesia</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/Universitas-Pamulang.png') }}" height="70" alt="">
                    </div>
                </div><!--end col-->
                    
                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/Universitas-Gunadarma.png') }}" height="70" alt="">
                    </div>
                </div><!--end col-->
                    
                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/BSI.png') }}" height="70" alt="">
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/UBL.png') }}" height="70" alt="">
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/Universitas-Mercubuana.png') }}" height="70" alt="">
                    </div>
                </div>
                    
                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/STMIK-Nusa-Mandiri.png') }}" height="70" alt="">
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/Logo-Bank-Mandiri.png') }}" height="70" alt="">
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/logo-bca.png') }}" height="70" alt="">
                    </div>
                </div><!--end col-->
                <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('public/landing/images/permata_bank.png') }}" height="70" alt="">
                    </div>
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
    </section><!--end section-->
        
@endsection