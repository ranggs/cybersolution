

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Kursus Website,Kursus Web,Kursus Web Design, Kursus Web Programming, Kursus Internet Marketing,Tempat Kursus Membuat Web, SEO, Web Design, kursus java, kusrsus android,Kursus ASP.Net, Kursus VB.net,Kursus C++,Kursus Algoritma, Kursus Bahasa C,Web Programming, Web Animation, HTML,CSS, Javascript,PHP, Codeigniter, framework YI, Ajax, jQuery, Search Engine Optimization, Wordpress, Joomla, Drupal, Toko Online, dan Internet Marketing, Kursus KKP,Kursus TA, Kursus Tugas Akhir,Kursus Membuat Skripsi , Kursus Skripsi, Kursus Mikrokontroller, Kursus Robot, Kursus PLC, Kursus Microcontroller Kursus bimbingan penulisan tugas akhir dan skripsi, Kursus bimbingan penulisan tugas akhir dan skripsi tangerang, Kursus bimbingan penulisan tugas akhir dan skripsi Jakarta, Kursus bimbingan penulisan tugas akhir dan skripsi bogor, Kursus bimbingan penulisan tugas akhir dan skripsi depok, Kursus bimbingan penulisan tugas akhir dan skripsi bekasi, kursus akuntansi , kursus pajak, kursus Coding Kidz, kursus coding School, kursus Koding anak-anak, kursus react Native, Kurus Golang, Kursus Laravel, Kursus Pyhton"/>
  <meta name="keyword" content="Kursus Website,Kursus Web,Kursus Web Design, Kursus Web Programming, Kursus Internet Marketing,Tempat Kursus Membuat Web, SEO, Web Design, kursus java, kusrsus android,Kursus ASP.Net, Kursus VB.net,Kursus C++,Kursus Algoritma, Kursus Bahasa C,Web Programming, Web Animation, HTML,CSS, Javascript,PHP, Codeigniter, framework YI, Ajax, jQuery, Search Engine Optimization, Wordpress, Joomla, Drupal, Toko Online, dan Internet Marketing, Kursus KKP,Kursus TA, Kursus Tugas Akhir,Kursus Membuat Skripsi , Kursus Skripsi, Kursus Mikrokontroller, Kursus Robot, Kursus PLC, Kursus Microcontroller  Kursus bimbingan penulisan tugas akhir dan skripsi, Kursus bimbingan penulisan tugas akhir dan skripsi tangerang, Kursus bimbingan penulisan tugas akhir dan skripsi Jakarta, Kursus bimbingan penulisan tugas akhir dan skripsi bogor, Kursus bimbingan penulisan tugas akhir dan skripsi depok, Kursus bimbingan penulisan tugas akhir dan skripsi bekasi, kursus akuntansi , kursus pajak, kursus Coding Kidz, kursus coding School, kursus Koding anak-anak, kursus react Native, Kurus Golang, Kursus Laravel, Kursus Pyhton"/>
  <title>Admin Cyber Solution</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/admin/app-assets/images/logo/logo_cybersolution.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">

  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/css/vendors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<!--   <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/vendors/css/editors/summernote.css') }}">
 -->  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/vendors/css/tables/jsgrid/jsgrid.min.css') }}">
  <!-- END VENDOR CSS-->

  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/css/app.css') }}">
  <!-- END MODERN CSS-->

  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/css/core/menu/menu-types/vertical-compact-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/css/core/colors/palette-gradient.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/vendors/css/charts/morris.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/fonts/simple-line-icons/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/app-assets/css/core/colors/palette-gradient.css') }}">
  <!-- END Page Level CSS-->

  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/css/style.css') }}">
  <!-- END Custom CSS-->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

</head>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

  @include('Admin.template.navbar')

  @include('Admin.template.menu-samping')

  <div class="app-content content">
    @yield('content')
  </div>

  @include('Admin.template.footer')

</body>

  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('public/admin/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"
  type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/buttons.flash.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/jszip.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/pdfmake.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/vfs_fonts.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/buttons.html5.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/buttons.print.min.js') }}" type="text/javascript"></script>

  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ asset('public/admin/app-assets/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/jsgrid/jsgrid.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/tables/jsgrid/griddata.js') }}" type="text/javascript"></script>

  <script src="{{ asset('public/admin/app-assets/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/vendors/js/editors/summernote/summernote.min.js') }}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->

  <!-- BEGIN MODERN JS-->
  <script src="{{ asset('public/admin/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/js/core/app.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <script src="{{ asset('public/admin/app-assets/js/scripts/tables/datatables/datatable-basic.js') }}"type="text/javascript"></script>

  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('public/admin/app-assets/js/scripts/pages/dashboard-sales.js') }}" type="text/javascript"></script>

  <script src="{{ asset('public/admin/app-assets/js/scripts/tables/jsgrid/jsgrid.js') }}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- BEGIN PAGE LEVEL JS-->
<!--   <script src="{{ asset('public/admin/app-assets/vendors/js/editors/summernote/summernote.js') }}" type="text/javascript"></script>
 -->  <!-- END PAGE LEVEL JS-->

  