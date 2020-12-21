@extends('Admin.template.app')
@section('content')

	<div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">
	      		<div class="col-md-4  col-sm-12">
				    <div class="card">
				      <div class="card-header">
				        <h3 class="card-title">Form Master News </h3>
				      </div>
				      <div class="card-body">
				        <form method="POST" autocomplete="off" enctype='multipart/form-data'>
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Title
				            </div>
				            <div class="col-md-8 form-group">
				              <input type="text" name="title" class="form-control">
				            </div>
				          </div>
				          
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Seo Title
				            </div>
				            <div class="col-md-8 form-group">
				              <input type="text" name="seo_title" class="form-control">
				            </div>
				          </div>
				          
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Excerpt
				            </div>
				            <div class="col-md-8 form-group">
				              <input type="text" name="excerpt" class="form-control">
				            </div>
				          </div>
				          
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Body
				            </div>
				            <div class="col-md-8 form-group">
				              <input type="text" name="body" class="form-control">
				            </div>
				          </div>
				          
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Image
				            </div>
				            <div class="col-md-8 form-group">
				                <input type="file" name="image" class="form-control"> </br>
				            </div>
				          </div>
				          
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Slug
				            </div>
				            <div class="col-md-8 form-group">
				              <input type="text" name="slug" class="form-control">
				            </div>
				          </div>
				          
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Meta Description 
				            </div>
				            <div class="col-md-8 form-group">
				              <input type="text" name="meta_description" class="form-control">
				            </div>
				          </div>
				          
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Meta Keywords
				            </div>
				            <div class="col-md-8 form-group">
				              <input type="text" name="meta_keywords" class="form-control">
				            </div>
				          </div>
				          
				          <div class="row">
				            <div class="col-md-4 form-group">
				              Status 
				            </div>
				            <div class="col-md-8 form-group">
				              <input type="text" name="status" class="form-control">
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
		                  <h4 class="card-title"><i class="la la-bars">&nbsp;Table Master Menu</i></h4>
		                </div>
		                <div class="card-content collapse show">
		                  <div class="card-body card-dashboard table-responsive">
		                    <table class="table table-striped table-bordered zero-configuration">
		                      <thead>
		                        <tr>
					              <th>#</th>
					              <th>Title</th>
					              <th>Seo Title</th>
					              <th>Excerpt</th>
					              <th>Body</th>
					              <th>Image</th>
					              <th>Slug</th>
					              <th>Meta Description</th>
					              <th>Meta Keywords</th>
					              <th>status</th>
					              <th>Actions </th>
					            </tr>
		                      </thead>
		                      <tbody>
					            <tr>
					              <td> </td>
					              <td> </td>
					              <td> </td>
					              <td> </td>
					              <td> </td>
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

@endsection