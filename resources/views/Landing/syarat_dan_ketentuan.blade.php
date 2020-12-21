@extends('Landing.template.app')
@section('content')

    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="main-title"><span class="text-primary font-weight-bold"> SYARAT DAN KETENTUAN </span></h4>
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
                <div class="col-lg-11">
                    <div class="p-4 shadow border rounded">
                        <p class="main-tittle">Dengan mengikuti proses pembelajaran di Cyber Solution, berarti semua peserta tanpa terkecuali harus mengikuti aturan serta syarat dan ketentuan yang berlaku. Adapun syarat dan ketentuan kursus yang dimaksud adalah sebagai berikut:</p>
                        <ul class="list-unstyled feature-list text-muted">
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Melakukan proses pendaftaran dan sekaligus memilih materi kursus yang akan diikuti. Pada saat ini peserta kursus dikenakan biaya administrasi sebesar Rp 150.000.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Pembayaran administrasi tahap pertama minimal 40% pada pertemuan pertama, untuk pembayaran tahap ke dua 100% pada pertemuan ke tiga.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Apabila peserta kursus tidak masuk elama dua minggu berturut-turut pihak Cyber Solution berhak menanyakan ke stasusannya apa masih menjadi perserta atau tidak.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>pembayaran dapat di cicil perbulan sesuai dengan paket yang di ambil kelas reguler.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Apabila telah menjadi peserta wajib untuk mengikuti jadwal yang telah di tentukan sampai program bimbingan belajar selesai.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Apabila telah menjadi peserta dan ingin mengundurkan diri maka peserta diwajibkan untuk menyelesaikan administrasi sesuai dengan paket yang diambil.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Apabula peserta baru ingin mengundurkan diri maka diwajibkan konfirmasi minimal satu minggu sebelum kelas dimulai.</li> 
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>uang pendaftaraan tidak dapat diambil kembali atau dialihkan.</li>
							<li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Apabila peserta ingin mendapatkan hasil yang maximal dan super skill maka peserta diwajibkan selalu hadir dan tepat waktu pada jadwal yang telah di tentukan.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Peserta diwajibkan datang 15 menit sebelum kelas di mulai untuk mendapatkan hasil yang maximal.</li>
                            <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Mentor Cyber Solution hanya membimbing dan mengarahkan tidak membuatkan papper atau program.</li>
							<li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Uang yang sudah masuk tidak dapat di ambil kembali.</li>
							<li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Apabila peserta tidak masuk wajib memberikan keterangan informasi ke admin Cyber Solution </li>
                        </ul>
                    </div>
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