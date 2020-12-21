@extends('Landing.template.app')
@section('content')

    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title mb-4"><span class="text-primary font-weight-bold"> KURSUS SEO ENGINEERING</span></h4>
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
                        <img src="{{ asset('public/landing/images/Images_Banner/SEO.png') }}" class="img-fluid rounded-top mx-auto" alt="">
                    </div>
                </div><!--end col-->
                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="title mb-4">SEO ENGINEERING</h4>
                        <p class="text-muted">Tujuan Kursus  SEO (Search Engine Optimization) agar website anda tampil dihalaman awal mesin pencari seperti google.com, yahoo.com, bing.com dll. Tehnik ini mutlak harus anda ketahui agar anda paham mengapa website bisa tampil di rangking awal mesin pencari sehingga mendapat banyak trafik.</p>  
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
                        <h6 class="title mb-2">PEMATERIAN & MANFAAT YANG DI DAPATKAN OLEH PERSERTA</h6>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="event-schedule bg-white rounded p-3 border">
                        <div class="content">
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Riset kata kunci (keyword)</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Tehnik lengkap ONPAGE SEO</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Tehnik lengkap OFFPAGE SEO</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Trik meng-outsource-kan pekerjaan SEO</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Rahasia Menjadi No.1 di Google</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Rahasia Mendatangkan Trafik Instant</li>
                            </ul>   
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-schedule bg-white rounded p-3 border">
                        <div class="content">
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Meningkatkan Pengunjung Website Bisnis</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Target Pasar Lebih Jelas</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Meningkatkan Brand atau Merek</li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Berpotensi Meningkatkan Penjualan </li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Dapat Bersaing Dengan Perusahaan Besar </li>
                                <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Investasi Jangka Panjang </li>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="content mt-4 pt-2 text-center">
                    <div class="btn btn-primary mt-3">Rp.2000.000/Paket Durasi 6 Sesi</div>
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