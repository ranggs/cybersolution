@extends('Admin.template.app')
@section('content')
	
	<div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">
	      		<div class="col-12">

	      			<div class="card">
		                <div class="card-header">
		                  <h4 class="card-title"><i class="la la-bars">&nbsp;Table List Master Content</i></h4>
		                  <div class="heading-elements">
			                <ul class="list-inline mb-0">
			                  <li><a href="{{url('/Admin/add_content')}}" class="btn btn-success"><i class="la la-edit"></i>&nbsp;Tambah Content</a></li>
			                </ul>
			              </div>
		                </div>
		                <div class="card-content collapse show">
		                  <div class="card-body card-dashboard table-responsive">
		                    <table class="table table-striped table-bordered zero-configuration">
		                      <thead>
		                        <tr>
					              <th>#</th>
					              <th>Menu</th>
					              <th>Menu Url</th>
					              <th>Title</th>
					              <th>Keywords</th>
					              <th>Tags </th>
					              <th>Author</th>
					              <th>Action </th>
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