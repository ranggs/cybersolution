@extends('Admin.template.app')
@section('content')
	
	<div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">
	      		<div class="col-12">
				    <div class="card">
				    	<div class="card-header">
					        <h3 class="card-title"> Form Master Content</h3>
					        <div class="heading-elements">
			                  <ul class="list-inline mb-0">
			                    <li><a href="{{url('/Admin/table_content')}}" class="btn btn-warning"><i class="ft-chevrons-left"></i>&nbsp; Kembali</a></li>
			                  </ul>
			                </div>
					    </div>
					    <div class="card-body pad">
					        <form method="POST" autocomplete="off" enctype='multipart/form-data'>
					          <div class="row">
					            <div class="col-md-3 form-group">
					             Menu
					            </div>
					            <div class="col-md-8 form-group">
					            	<select id="jeniskelamin" name="jeniskelamin" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top">
					                    <option value="none" selected="" disabled=""></option>
					                    <option value="home">Home</option>
		                              	<option value="kursus">Kursus</option>
		                              	<option value="allkursus">All Kursus</option>
		                              	<option value="webdevelopment">
		                              		Web Development
		                          	  	</option>
		                          	  	<option value="mobiledevelopment">
		                          	  		Mobile Development
		                          	  	</option>
		                              	<option value="instructur">Instructur</option>
		                              	<option value="lainnya">Lainnya</option>
					                </select>
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-3 form-group">
					              Title
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="title" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-3 form-group">
					              Keywords
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="keywords" class="form-control">
					            </div>
					          </div>
					          <div class="row d-none">
					            <div class="col-md-3 form-group">
					              Tags
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="tags" class="form-control" value="&nbsp;">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-3 form-group">
					              Author
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="author" class="form-control">
					            </div>
					          </div>
					          <br>


					          <div class="row">
					            <div class="col-md-3 form-group">
					              Image
					            </div>
					            <div class="col-md-8 form-group">
					                <input type="file" name="image" class="form-control"> </br>
					            </div>
					          </div>


					          <div class="row">
					            <div class="col-md-3 form-group">
					              Content
					            </div>
					            
					            <div class="form-group col-8 mb-2">
					              <textarea rows="5" class="form-control" id="summernote" name="content"></textarea>
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
	      	</div>
	    </div>
	</div>

    <script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 120,
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
        ]
      });
    </script>


@endsection