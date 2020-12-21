<head>
    <meta charset="utf-8" />
    <title>CyberSolution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kursus Website,Kursus Web,Kursus Web Design, Kursus Web Programming, Kursus Internet Marketing,Tempat Kursus Membuat Web, SEO, Web Design, kursus java, kusrsus android,Kursus ASP.Net, Kursus VB.net,Kursus C++,Kursus Algoritma, Kursus Bahasa C,Web Programming, Web Animation, HTML,CSS, Javascript,PHP, Codeigniter, framework YI, Ajax, jQuery, Search Engine Optimization, Wordpress, Joomla, Drupal, Toko Online, dan Internet Marketing, Kursus KKP,Kursus TA, Kursus Tugas Akhir,Kursus Membuat Skripsi , Kursus Skripsi, Kursus Mikrokontroller, Kursus Robot, Kursus PLC, Kursus Microcontroller Kursus bimbingan penulisan tugas akhir dan skripsi, Kursus bimbingan penulisan tugas akhir dan skripsi tangerang, Kursus bimbingan penulisan tugas akhir dan skripsi Jakarta, Kursus bimbingan penulisan tugas akhir dan skripsi bogor, Kursus bimbingan penulisan tugas akhir dan skripsi depok, Kursus bimbingan penulisan tugas akhir dan skripsi bekasi, kursus akuntansi , kursus pajak, kursus Coding Kidz, kursus coding School, kursus Koding anak-anak, kursus react Native, Kurus Golang, Kursus Laravel, Kursus Pyhton"/>
    <meta name="keyword" content="Kursus Website,Kursus Web,Kursus Web Design, Kursus Web Programming, Kursus Internet Marketing,Tempat Kursus Membuat Web, SEO, Web Design, kursus java, kusrsus android,Kursus ASP.Net, Kursus VB.net,Kursus C++,Kursus Algoritma, Kursus Bahasa C,Web Programming, Web Animation, HTML,CSS, Javascript,PHP, Codeigniter, framework YI, Ajax, jQuery, Search Engine Optimization, Wordpress, Joomla, Drupal, Toko Online, dan Internet Marketing, Kursus KKP,Kursus TA, Kursus Tugas Akhir,Kursus Membuat Skripsi , Kursus Skripsi, Kursus Mikrokontroller, Kursus Robot, Kursus PLC, Kursus Microcontroller  Kursus bimbingan penulisan tugas akhir dan skripsi, Kursus bimbingan penulisan tugas akhir dan skripsi tangerang, Kursus bimbingan penulisan tugas akhir dan skripsi Jakarta, Kursus bimbingan penulisan tugas akhir dan skripsi bogor, Kursus bimbingan penulisan tugas akhir dan skripsi depok, Kursus bimbingan penulisan tugas akhir dan skripsi bekasi, kursus akuntansi , kursus pajak, kursus Coding Kidz, kursus coding School, kursus Koding anak-anak, kursus react Native, Kurus Golang, Kursus Laravel, Kursus Pyhton"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('public/peserta/images/Logo/Logo-CS-New-Transparan.png') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('public/peserta/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('public/peserta/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Magnific -->
    <link href="{{ asset('public/peserta/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <!-- Slider -->               
    <link rel="stylesheet" href="{{ asset('public/peserta/css/owl.carousel.min.css') }}"/> 
    <link rel="stylesheet" href="{{ asset('public/peserta/css/owl.theme.default.min.css') }}"/>   
    <!-- FLEXSLIDER -->
    <link href="{{ asset('public/peserta/css/flexslider.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main css --> 
    <link href="{{ asset('public/peserta/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-1149512713749678",
            enable_page_level_ads: true
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-84752934-1', 'auto');
        ga('send', 'pageview');

    </script>
        

    <!------------------------------------------------ANALYTICS---------------------------->
    <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-50083861-1', 'webcybercenter.com'); ga('send', 'pageview'); </script>
</head>

  <body>

    @include('Peserta.template.navbar')

    @yield('content')

    @include('Peserta.template.footer')

   <!-- javascript -->
    <script src="{{ asset('public/peserta/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/peserta/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/peserta/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/peserta/js/scrollspy.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('public/peserta/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/peserta/js/magnific.init.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('public/peserta/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/peserta/js/owl.init.js') }}"></script>
    <!--FLEX SLIDER-->
    <script src="{{ asset('public/peserta/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('public/peserta/js/flexslider.init.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('public/peserta/js/counter.init.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('public/peserta/js/app.js') }}"></script>

  </body>
