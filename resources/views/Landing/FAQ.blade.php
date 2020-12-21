@extends('Landing.template.app')
@section('content')

    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title"><span class="text-primary font-weight-bold">Pertanyaan yang Sering Diajukan </span></h4>
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
            <div class="row justify-content-center">
				<div class="col-lg-7 col-md-6">
                    <div class="faq-content mr-lg-5">
                        <div class="accordion" id="accordionExample">
                            <div class="card border rounded shadow mb-2">
                                <a data-toggle="collapse" href="#collapseOne" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header bg-light p-3" id="headingOne">
                                        <h4 class="title mb-0 faq-question"> Apa itu Cyber Solution ? </h4>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">Cyber Solution adalah wadah Bimbingan Belajar yang Kompetensi untuk pelajar, Mahasiswa  dan Umum di bidang Teknologi Informasi.</p>
                                    </div>
                                </div>
                            </div><!--end card-->

                            <div class="card border rounded shadow mb-2">
                                <a data-toggle="collapse" href="#collapseTwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header bg-light p-3" id="headingTwo">
                                        <h4 class="title mb-0 faq-question"> Apakah belajar di Cyber Solution gratis ? </h4>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans"> jika kamu ingin hasil belajar maksimal dan dukungan maksimal tentu saja kamu hanya bisa mendapatkannya di program kursus berbayar.</p>
                                    </div>
                                </div>
                            </div><!--end card-->
                                
                            <div class="card border rounded shadow mb-2">
                                <a data-toggle="collapse" href="#collapsethree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsethree">
                                    <div class="card-header bg-light p-3" id="headingthree">
                                        <h4 class="title mb-0 faq-question"> Apakah belajar di program ini dijamin bisa coding ? </h4>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">jika kamu benar-benar mengikuti program belajar di program ini dengan baik kami jamin kamu bisa coding bahkan bisa menjadi seorang developer profesional. Namun tingkat kemahiranmu dalam coding bergantung usaha belajar yang kamu lakukan.</p>
                                    </div>
                                </div>
                            </div><!--end card-->

                            <div class="card rounded shadow mb-0">
                                <a data-toggle="collapse" href="#collapsefour" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header bg-light p-3" id="headingfour">
                                        <h4 class="title mb-0 faq-question"> Saya seorang amatir, Apakah bisa ikutan belajar di Cyber Solution ? </h4>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">Sangat amat bisa. Materi di Cyber Solution bisa dipelajari oleh siapa saja termasuk yang baru mulai belajar coding. Kami sudah menyusun alur belajarnya.</p>
                                    </div>
                                </div>
                            </div><!--end card-->
							
							<div class="card rounded shadow mb-0">
                                <a data-toggle="collapse" href="#collapsefive" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefive">
                                    <div class="card-header bg-light p-3" id="headingfive">
                                        <h4 class="title mb-0 faq-question"> Apakah saya akan di ajarkan dari 0 sampai mahir ? </h4>
                                    </div>
                                </a>
                                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">Kami telah mempersiapkan materi belajar yang bisa kamu pelajari dan kami telah menyiapkan jalur belajarnya, sehingga buat kamu yang baru ingin memulai belajar pemrograman juga bisa mengikutinya.</p>
                                    </div>
                                </div>
                            </div><!--end card-->
							
							<div class="card rounded shadow mb-0">
                                <a data-toggle="collapse" href="#collapsesix" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsesix">
                                    <div class="card-header bg-light p-3" id="headingsix">
                                        <h4 class="title mb-0 faq-question"> Apakah saya bisa bertanya jika mengalami kesulitan ? </h4>
                                    </div>
                                </a>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">Kamu bisa bertanya sesuai dengan materi belajar yang kamu pelajari melalui kolom diskusi pada akhir setiap lesson. Bertanyalah dengan jelas dan sopan agar member lainnya atau tim developer Cyber Solution bisa membantu masalahmu.</p>
                                    </div>
                                </div>
                            </div><!--end card-->
							
                         </div>
                    </div>
                </div><!--end col-->
				<div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <img src="{{ asset('public/landing/images/illustrator/faq.svg') }}" alt="">
                </div><!--end col-->
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