@extends('Admin.template.app')
@section('content')

    <div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">
	  			<div class="col-md-4  col-sm-12">
	    			<div class="card">
	    				<div class="card-header">
					        <h3 class="card-title"><i class="la la-bars">&nbsp;From Master Menu</i></h3>
					    </div>
					    <div class="card-body">
					        <form method="POST" action="post" autocomplete="off" enctype='multipart/form-data'>
					          
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Menu Name
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="menu_name" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Urutan Menu
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="order_show" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Menu URL
					            </div>
					            <div class="col-md-8 form-group">
					              <input type="text" name="menu_url" class="form-control">
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Menu Parent
					            </div>
					            <div class="col-md-8 form-group">
					              	<select id="menuparent" name="menuparent" class="form-control custom-select" data-toggle="tooltip" data-trigger="hover" data-placement="top">
		                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
		                              <option value="kursus">Kursus</option>
		                              <option value="instructur">Instructur</option>
		                              <option value="lainnya">Lainnya</option>
	                            	</select>
					            </div>
					          </div>
					          <div class="row">
					            <div class="col-md-4 form-group">
					              Submenu
					            </div>
					            <div class="col-md-8 form-group">
					              	<select id="submenu" name="submenu" class="form-control custom-select" data-toggle="tooltip" data-trigger="hover" data-placement="top">
		                              <option value="none" selected="" disabled="">--- Silahkan Pilih ---</option>
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
		                  <div class="card-body card-dashboard">
		                    <table class="table table-striped table-bordered zero-configuration">
		                      <thead>
		                        <tr>
		                          <th>Menu Name</th>
		                          <th>Menu URL</th>
		                          <th>Menu Parent</th>
		                          <th>Actions</th>
		                        </tr>
		                      </thead>
		                      <tbody>
		                        <tr>
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