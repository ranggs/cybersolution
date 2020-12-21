@extends('Admin.template.app')
@section('content')
	
	<div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">

	      		<div class="col-md-12  col-sm-12">
	    			<div class="card">
	    				<div class="card-header">
					        <h3 class="card-title"><i class="la la-bars">&nbsp;From Edit Pendaftaran</i></h3>
					        <div class="heading-elements">
			                  <ul class="list-inline mb-0">
			                    <li><a href="{{url('/Admin/table_pendaftaran')}}" class="btn btn-warning"><i class="ft-chevrons-left"></i>&nbsp; Kembali</a></li>
			                  </ul>
			                </div>
					    </div>
					    <div class="card-body">

					        <form method="POST" action="post" autocomplete="off" enctype='multipart/form-data'>
					          <div class="row">
							    <div class="col-6">
							    	<div class="row">
							            <div class="col-md-4 form-group">
							              Nama Lengkap
							            </div>
							            <div class="col-md-6 form-group">
							              <input type="text" name="nama" class="form-control">
							            </div>
							        </div>
							        <div class="row">
							            <div class="col-md-4 form-group">
							              Email
							            </div>
							            <div class="col-md-6 form-group">
							              <input type="text" name="email" class="form-control">
							            </div>
							        </div>
							        <div class="row">
							            <div class="col-md-4 form-group">
							              No Telp
							            </div>
							            <div class="col-md-6 form-group">
							              <input type="phone" name="phone" class="form-control">
							            </div>
							        </div>
							        <div class="row">
							            <div class="col-md-4 form-group">
							              Jenis Kelamin
							            </div>
							            <div class="col-md-6 form-group">
							              	<select id="jeniskelamin" name="jeniskelamin" class="form-control" data-toggle="tooltip"
					                          data-trigger="hover" data-placement="top">
					                          	<option value="none" selected="" disabled=""></option>
					                            <option value="lakilaki">Laki Laki</option>
					                            <option value="perempuan">Perempuan</option>
					                        </select>
							            </div>
							        </div>
							        <div class="row">
							            <div class="col-md-4 form-group">
							              Alamat 
							            </div>
							            
							            <div class="form-group col-6 mb-2">
							              <textarea id="alamat" rows="5" class="form-control" name="content"></textarea>
							            </div>
							        </div>
							        <div class="row">
							            <div class="col-md-4 form-group">
							              Sekolah
							            </div>
							            <div class="col-md-6 form-group">
							              <input type="text" name="nama" class="form-control">
							            </div>
							        </div>

							    </div>
							    <div class="col-6">
							        <div class="row">
							            <div class="col-md-4 form-group">
							              Pilihan Kursus
							            </div>
							            <div class="col-md-6 form-group">
							              	<select id="jeniskelamin" name="jeniskelamin" class="form-control" data-toggle="tooltip"
					                          data-trigger="hover" data-placement="top">
					                          <option value="none" selected="" disabled=""></option>
				                              <option value="webdev">Web Development</option>
				                              <option value="mobiledev">Mobile Development</option>
				                              <option value="digital">Digital Marketing</option>
				                              <option value="javadekstop">Java Dekstop App</option>
				                              <option value="cmsmaster">CMS Master</option>
				                              <option value="seoengineer">SEO Engineering</option>
				                              <option value="robotic">Robotic Development</option>
				                              <option value="codingkids">Coding Kids</option>
				                              <option value="akuntansi">Accounting Master</option>
				                              <option value="pajak">TAX Master</option>
					                        </select>
							            </div>
							        </div>


							        <div class="row">
							            <div class="col-md-4 form-group">
							              Skill Level
							            </div>
							            <div class="col-md-6 form-group">
							              	<select id="jeniskelamin" name="jeniskelamin" class="form-control" data-toggle="tooltip"
					                          data-trigger="hover" data-placement="top">
					                          	<option value="none" selected="" disabled=""></option>
					                            <option value="beginner">Beginner</option>
					                            <option value="advanced">Advanced</option>
					                            <option value="intermediate">Intermediate</option>
					                        </select>
							            </div>
							        </div>
							        <div class="row">
							            <div class="col-md-4 form-group">
							              Kelas
							            </div>
							            <div class="col-md-6 form-group">
							              	<select id="jeniskelamin" name="jeniskelamin" class="form-control" data-toggle="tooltip"
					                          data-trigger="hover" data-placement="top">
					                          	<option value="none" selected="" disabled=""></option>
					                            <option value="reguler">Reguler</option>
					                            <option value="private">Private</option>
					                        </select>
							            </div>
							        </div>
							        <div class="row">
							            <div class="col-md-4 form-group">
							              Biaya Kursus
							            </div>
							            <div class="col-md-6 form-group">
							              <input type="text" name="biaya" class="form-control">
							            </div>
							        </div>

							        <div class="row">
							            <div class="col-md-4 form-group">
							              Total Bayar
							            </div>
							            <div class="col-md-6 form-group">
							              <input type="text" name="total" class="form-control">
							            </div>
							        </div>

							        <div class="row">
							            <div class="col-md-4 form-group">
							              Bayar
							            </div>
							            <div class="col-md-6 form-group">
							              <input type="text" name="bayar" class="form-control">
							            </div>
							        </div>

							        <div class="row">
							            <div class="col-md-4 form-group">
							              Type Bayar
							            </div>
							            <div class="col-md-6 form-group">
							              	<select id="typebayar" name="typebayar" class="form-control" data-toggle="tooltip"
					                          data-trigger="hover" data-placement="top">
					                          	<option value="none" selected="" disabled=""></option>
					                            <option value="cash">Bayar Di Tempat</option>
					                            <option value="transfer">Transfer Bank</option>
					                        </select>
							            </div>
							        </div>

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