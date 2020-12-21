<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{url('/Admin') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a></li>

        <li class=" nav-item"><a href="#"><i class="la la-desktop"></i><span class="menu-title" data-i18n="nav.dash.main">Master Landing</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{url('/Admin/master_menu')}}" data-i18n="nav.dash.ecommerce">Master Menu</a></li>
            <li><a class="menu-item" href="{{url('/Admin/master_site')}}" data-i18n="nav.dash.ecommerce">Master Site</a></li>
            <li><a class="menu-item" href="{{url('/Admin/table_content') }}" data-i18n="nav.dash.ecommerce">Master Content</a></li>
            <li><a class="menu-item" href="{{url('/Admin/master_news') }}" data-i18n="nav.dash.ecommerce">Master News</a></li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-database"></i><span class="menu-title" data-i18n="nav.dash.main">Master Data</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">Master Kursus</a>
              <ul class="menu-content">
                <li><a class="menu-item" href="{{url('/Admin/tambah_category') }}" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Tambah Category</a>
                </li>
                <li><a class="menu-item" href="{{url('/Admin/kursus_list') }}" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Kursus List</a>
                </li>
              </ul>
            </li>

            <li><a class="menu-item" href="{{url('/Admin/table_tutor') }}" data-i18n="nav.dash.ecommerce">Master Tutor</a></li>
            <li><a class="menu-item" href="{{url('/Admin/table_pendaftaran') }}" data-i18n="nav.dash.ecommerce">Master Pendaftaran</a></li>
          </ul>
        </li>


        <li class=" nav-item"><a href="#"><i class="la la-file-text-o"></i><span class="menu-title" data-i18n="nav.dash.main">Laporan</span></a>
          <ul class="menu-content">
              <li><a class="menu-item" href="{{url('/Admin/invoice_peserta') }}" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Invoice Peserta</a></li>
              <li><a class="menu-item" href="#" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Pendapatan Admin</a></li>
              <li><a class="menu-item" href="{{url('/Admin/fee_tutor') }}" data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Pendapatan Tutor</a></li>
          </ul>
        </li>
      </ul>
    </div>
</div>