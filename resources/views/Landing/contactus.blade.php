@extends('Landing.template.app')
@section('content') 

	<section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title mb-4"><span class="text-primary font-weight-bold"> Contact Us </span></h4>
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
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
					
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6 mt-2 pt-2 mt-sm-0 pt-sm-0">
							<div class="position-relative">
								<img src="{{ asset('public/landing/images/Logo/Logo-CS-512.png') }}" class="img-fluid rounded-top mx-auto" alt="">
							</div>
						</div><!--end col-->
						<div class="col-lg-6 col-md-6 mt-2 mt-sm-0 pt-sm-0">
							<div class="title-heading mt-5 pt-4">
                                <h4 class="title mb-4">Silahkan hubungi kami dengan mengisi form dibawah ini atau dengan menghubungi kami dengan telepon. </h4>
                                <div class="contact-detail mt-3">
                                    <div class="icon mt-3 float-left">
                                        <i class="mdi mdi-email-variant text-muted mdi-36px mr-3"></i>
                                    </div>
                                    <div class="content mt-3 overflow-hidden d-block">
                                        <h4 class="title font-weight-bold mb-0">Email</h4>
                                        <a href="admin@webcybercenter.com" class="text-primary h5">admin@webcybercenter.com</a>
                                    </div>  
                                </div>

                                <div class="contact-detail mt-3">
                                    <div class="icon mt-3 float-left">
                                        <i class="mdi mdi-phone text-muted mdi-36px mr-3"></i>
                                    </div>
                                    <div class="content mt-3 overflow-hidden d-block">
                                        <h4 class="title font-weight-bold mb-0">Phone</h4>
                                        <a href="tel:+6221-968-856-60" class="text-primary h5">+6221-968-856-60</a>
                                    </div>  
                                </div>

                                <div class="contact-detail mt-3">
                                    <div class="icon mt-3 float-left">
                                        <i class="mdi mdi-map-marker-outline text-muted mdi-36px mr-3"></i>
                                    </div>
                                    <div class="content mt-3 overflow-hidden d-block">
                                        <h4 class="title font-weight-bold mb-0">Location</h4>
                                        <a href="https://www.google.com/maps/place/Cyber+Solution/@-6.2193703,106.5932533,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69fe9b5e79ee91:0x154c9d556a7af6c!8m2!3d-6.2193703!4d106.595442" class="video-play-icon h5 text-primary">View on Google map</a>
                                    </div>  
                                </div>

                                <ul class="list-unstyled social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google +"></i></a></li>
                                </ul><!--end icon-->
                            </div>
						</div><!--end col-->
            		</div><!--end row-->
                </div><!--end container--> 
				
				<div class="container-fluid">
					<div class="row">
						<div class="home-shape-bottom">
							<img src="{{ asset('public/landing/images/shapes/curve-dark.png') }}" alt="" class="img-fluid mx-auto d-block">
						</div> 
					</div><!--end row-->
        		</div><!--end container-->
            </div><!--end home desc center-->
        </div><!--end home center-->
    </section><!--end section-->
@endsection
