@extends('Landing.template.app')
@section('content')

    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title"><span class="text-primary font-weight-bold">DOKUMENTASI</span></h4>
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
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h6 class="title mb-2">Galery Foto</h6>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-01.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-02.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/galery-03.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-04.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-05.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-06.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-07.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div><!--end col-->
                    
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-08.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-09.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-10.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-11.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center">
                        <div class="position-relative">
                            <img src="{{ asset('public/landing/images/galarey_foto/Galery-12.jpg') }}" class="img-fluid d-block rounded-pill mx-auto" alt="">
                        </div>
                    </div>
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
                        <h6 class="title mb-2">PILIHAN JUDUL TA & SKRIPSI YANG TERSEDIA</h6>
                        <p class="text-muted">Di Cyber Solution kami menyediakan refrensi judul judul TA ataupun Skripsi buat kamu mahasiswa <br> yang sedang menjalani semester akhir berikut refrensinya :</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="p-4 shadow border rounded">
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Aplikasi Perpustakaan.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Aplikasi Penggajian Pegawai.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Absensi Karyawan, Pegawai.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Stok Inventori atau Gudang. </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Pembelian atau Purchasing.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Toko Online atau Ecomerce.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Koperasi Simpan Pinjam.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Ticket Online (Agen travel).</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Akademik Sekolah atau kampus. </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Pembayaran SPP.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 shadow border rounded">
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Penerimaan Siswa Baru.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>E-Learning Sistem.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Penjualan.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Pemesanan. </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Web Profile Property.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Rekrutmen Karyawan </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Asset manajemen Property </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem penilaian Kepegawaian </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Pendeteksian penyakit Jantung </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Sewa Rental </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 shadow border rounded">
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Aplikasi Bengkel </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Aplikasi Laundry </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Sistem Apalikasi Piutang Dagang </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Apalikasi Klinik </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>SPK Beassiswa </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>SKP Pilihan Menu Makanan Balita </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Aplikasi PPIC </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Aplikasi Rekrutmen Karyawan </li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Aplikasi Booking lapangan Futsal </li>
							<li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Aplikasi Sistem Antrian </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection