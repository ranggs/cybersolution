@extends('Admin.template.app')
@section('content')

	<div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">
	      		<div class="col-md-4  col-sm-12">
	    			<div class="card">
	    				<div class="card-header">
					        <h3 class="card-title"><i class="la la-bars">&nbsp;From Tambah kursus</i></h3>
					    </div>
					    <div class="card-body">
					        <form method="POST" action="post" autocomplete="off" enctype='multipart/form-data'>
					          
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Kursus Tittle
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="kursus_tittle" class="form-control">
					            </div>
					          </div>


					          <div class="row">
					            <div class="col-md-4 form-group">
					              Deskripsi
					            </div>
					           
					            <div class="form-group col-8 mb-2">
					              <textarea id="deskripsi" class="form-control" name="content"></textarea>
					            </div>
					          </div>

					          <div class="row">
					            <div class="col-md-4 form-group">
					              Harga
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="Harga" class="form-control">
					            </div>
					          </div>

					          <div class="row">
					            <div class="col-md-4 form-group">
					              Category
					            </div>
					            <div class="col-md-8 form-group">
					              	<select id="menuparent" name="menuparent" class="form-control custom-select" data-toggle="tooltip" data-trigger="hover" data-placement="top">
		                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
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
					              Thumbnail Kursus
					            </div>
					            <div class="col-md-8 form-group">
					                <input type="file" name="image" class="form-control"> </br>
					            </div>
					          </div>
					          <hr>
					          <div class="float-right">
					            <button type="submit" class="btn btn-success">Save</button> &nbsp;&nbsp;&nbsp;
					            <button type="reset" class="btn btn-warning">Reset</button>
					          </div>
					        </form>
					    </div>
	    			</div>
	    		</div>
	    		<div class="col-md-8  col-sm-12">
	    			<div class="card">
		                <div class="card-header">
		                  <h4 class="card-title"><i class="la la-bars">&nbsp;Table Kursus List</i></h4>
		                </div>
		                <div class="card-content collapse show">
		                  <div class="card-body card-dashboard table-responsive">
		                    <table class="table table-striped table-bordered zero-configuration">
		                      <thead>
		                        <tr>
		                          <th>Kursus Tittle</th>
		                          <th>Deskripsi </th>
		                          <th>Harga </th>
		                          <th>Category </th>
		                          <th>Thumbnail Kursus </th>
		                          <th>Actions</th>
		                        </tr>
		                      </thead>
		                      <tbody>
		                        <tr>
		                          <td> </td>
		                          <td> </td>
		                          <td> </td>
		                          <td> </td>
		                          <td> </td>
		                          <td>
					                <a href="#" class="btn btn-warning"><i class="la la-edit"></i></a>
					                <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="la la-trash"></i></a>
					              </td>
		                        </tr>
		                      </tbody>
		                    </table>
		                  </div>
		                </div>
	              	</div>
	    		</div>
	      	</div>
	    </div>
	</div>
	<script>
 $(document).ready(function() {
    $('#deskripsi').summernote({
      height: "450px",
      width:"850px",
      styleWithSpan: true,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
      ],
    });
  }); 
</script>

@endsection