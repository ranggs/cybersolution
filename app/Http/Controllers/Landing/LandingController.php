<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{

	public function index()
    {
        return view('Landing.index');
    }

    public function layanan_kursus()
    {
        return view('Landing.layanan');
    }

    public function webdev()
    {
        return view('Landing.webdevelop');
    }

    public function mobileapp()
    {
        return view('Landing.mobiledevelop');
    }

    public function profiletutor()
    {
        return view('Landing.tutor');
    }
   
    public function digitalmarketing()
    {
        return view('Landing.digital_marketing');
    }

    public function javadekstop()
    {
        return view('Landing.java_dekstop');
    }

    public function cms()
    {
        return view('Landing.cms_master');
    }

    public function seo()
    {
        return view('Landing.seo_engineering');
    }
	
	public function about()
    {
        return view('Landing.aboutus');
    }

    public function tof()
    {
        return view('Landing.syarat_dan_ketentuan');
    }
	
	public function tanyajawab()
	{
		return view('Landing.FAQ');
	}

    public function dokumen()
    {
        return view('Landing.dokumentasi');
    }
	
	public function kontak()
    {
        return view('Landing.contactus');
    }
	
	public function daftar()
	{
		return view('Landing.formulir');
	}
	
    public function register()
    {
        return view('Landing.register');
    }

	public function login()
	{
		return view('Landing.login');
	}
	
}
