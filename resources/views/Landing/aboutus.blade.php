@extends('Landing.template.app')
@section('content')

    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title"><span class="text-primary font-weight-bold"> About US </span></h4>
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
    </section><!--end section-->

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0 text-center">
                    <div class="position-relative">
                        <img src="{{ asset('public/landing/images/profile-256px.png') }}" class="rounded-pill img-fluid mx-auto d-block" alt="">
                    </div>
                    <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Yohendra, C.B M.Kom</a></h5>
                    <small class="designation text-muted">Owner Of Cyber Solution</small>
                </div><!--end col-->

                <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ml-lg-3">
                        <h4 class="title mb-3">Welcome To Cyber Solution</h4>
                        <p class="text-muted">Kami menjawab kebutuhan SDM yang berkualitas untuk menghadapi Masyarakat Ekonomi Asean, yang berbasis kompetensi dan Teknologi Informasi & Komunikasi, didukung tenaga pengajar berpengalaman khusus yang selalu diperbaharui sesuai tuntutan Customer dan perkembangan teknologi paling mutakhir, serta metode pembelajaran yang mudah diserap oleh pelajar maupun mahasiswa hingga masyarakat umum.</p><br>

                        <p class="text-muted">Cyber Solution menyadari kebutuhan tenaga kerja tidak hanya dilihat dari kemampuan akademis saja, melainkan harus dibekali kemampuan non akademis. Oleh karena itu Kami memberikan bimbingan belajar, Peningkatan hard skills (pengetahuan, keterampilan dan keahlian di bidang bahasa atau Teknologi Informasi dan Komunikasi). Peningkatan soft skills agar peserta memiliki etos kerja yang baik dan mampu beradaptasi serta bersosialisasi dalam lingkungan kerjanya. </p>
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
                        <h6 class="title mb-2">VISI & MISSI</h6>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-lg-11 mb-4">
                    <div class="event-schedule bg-white rounded p-3 border">
                        <div class="content">
                            <p class="title text-muted mb-4 pb-2">Cyber Solution, akan mencetak skill yang tinggi dan sesuai dengan kubutuhan industry, tenaga ahli programmer yang siap pakai, sehinga langsung menghasilkan buat perusahaan anda, kami juga menyalurkan kerja keperushaan yang membutukan, kami bertekad akan merevolusi system pendidikan yang tidak menguntungkan buat mahasiswa, sehinga kami hadir untuk menampung kebutuhan skill dan mencetak tenaga kerja yang siap pakai serta menyalurkan kerja. </p>
                        </div>
                    </div>
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
    </section>
@endsection


