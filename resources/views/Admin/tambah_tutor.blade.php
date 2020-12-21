@extends('Admin.template.app')
@section('content')
	
	<div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">

	      		<div class="col-md-12  col-sm-12">
	    			<div class="card">
	    				<div class="card-header">
					        <h3 class="card-title"><i class="la la-bars">&nbsp;From Master Tutor</i></h3>
					        <div class="heading-elements">
			                  <ul class="list-inline mb-0">
			                    <li><a href="{{url('/Admin/table_tutor')}}" class="btn btn-warning"><i class="ft-chevrons-left"></i>&nbsp; Kembali</a></li>
			                  </ul>
			                </div>
					    </div>
					    <div class="card-body">
					        <form method="POST" action="post" autocomplete="off" enctype='multipart/form-data'>
					          
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Nama Lengkap
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="nama" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Email
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="email" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              No Telp
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="phone" name="phone" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Spesialis
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="spesialis" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Sesi Pertemuan
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="number" name="sesi" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Fee Tutor
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="fee" class="form-control">
					            </div>
					          </div>
					          <hr>
					          <div class="float-right">
					            <button type="submit" class="btn btn-success">Save</button> &nbsp;&nbsp;
					            <button type="reset" class="btn btn-warning">Reset</button>
					          </div>
					        </form>
					    </div>
	    			</div>
	    		</div>
	        </div>
	    </div>
	</div>

@endsection