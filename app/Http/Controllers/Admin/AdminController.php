<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('Admin.index');
    }

    public function mastermenu()
    {
    	return view('Admin.master_menu');
    }

    public function mastersite()
    {
    	return view('Admin.master_site');
    }

    public function tambahcontent()
    {
    	return view('Admin.add_content');
    }

    public function tablecontent()
    {
    	return view('Admin.table_content');
    }

    public function masternews()
    {
        return view('Admin.master_news');
    }

    public function addcategory()
    {
        return view('Admin.tambah_category');
    }

    public function listkursus()
    {
        return view('Admin.kursus_list');
    }

    public function tabletutor()
    {
        return view('Admin.table_tutor');
    }

    public function tambahtutor()
    {
        return view('Admin.tambah_tutor');
    }

    public function tabledaftar()
    {
        return view('Admin.table_pendaftaran');
    }

    public function editpendaftaran()
    {
        return view('Admin.edit_pendaftaran');
    }

    public function reportinvoice()
    {
        return view('Admin.invoice_peserta');
    }

    public function reportfee()
    {
        return view('Admin.fee_tutor');
    }

}
