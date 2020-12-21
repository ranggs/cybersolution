@extends('Admin.template.app')
@section('content')
	<div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">
	      		<div class="col-md-12 col-sm-12">
    				<div class="card">
    					<div class="card-header">
        					<h3 class="card-title">Form Edit Master Site</h3>
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
						              URL Site
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="url_site" class="form-control">
						            </div>
						        </div>
						        <div class="row">
						            <div class="col-md-4 form-group">
						              URL Develop
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="url_site_devapp" class="form-control">
						            </div>
						        </div>

						        <div class="row">
						            <div class="col-md-4 form-group">
						              URL Staging
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="url_site_staging" class="form-control">
						            </div>
						        </div>
						        <div class="row">
						            <div class="col-md-4 form-group">
						              Phone Support
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="phone_support" class="form-control">
						            </div>
						        </div>

						        <div class="row">
						            <div class="col-md-4 form-group">
						              Email Support
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="email_support" class="form-control">
						            </div>
						        </div>

						        <div class="row">
						            <div class="col-md-4 form-group">
						             Location Site
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="location_site" class="form-control">
						            </div>
						        </div>
						        <div class="row">
						            <div class="col-md-4 form-group">
						              URL Fb
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="url_fb" class="form-control">
						            </div>
						        </div>
						        <div class="row">
						            <div class="col-md-4 form-group">
						             URL Ig
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="url_ig" class="form-control">
						            </div>
						        </div>
						        <div class="row">
						            <div class="col-md-4 form-group">
						             URL Twitter
						            </div>
						            <div class="col-md-8 form-group">
						              <input type="text" name="url_twitter" class="form-control">
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
@endsection