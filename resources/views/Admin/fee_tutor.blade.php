@extends('Admin.template.app')
@section('content')
	
	<div class="content-wrapper">
      	<div class="content-body">
	      	<div class="row">
	      		<div class="col-12">
	      			<div class="card">
		                <div class="card-header">
		                  <h4 class="card-title"><i class="la la-bars">&nbsp;Table Pendapatan Tutor</i></h4>
		                  	<div class="heading-elements">
			                  <ul class="list-inline mb-0">
			                    <li><a href="#" class="btn btn-info"><i class="ft-download"></i>&nbsp;download pdf</a></li>
			                  </ul>
			                </div>
		                </div>
		                <div class="card-content collapse show">
		                  <div class="card-body card-dashboard table-responsive">
		                    <table class="table table-striped table-bordered zero-configuration">
		                      <thead>
		                        <tr>
					              <th>#</th>
					              <th>Nama</th>
					              <th>Kursus Title</th>
					              <th>Total Bayar</th>
					              <th>Fee Tutor</th>
					              <th>Status</th>
					              <th>Action</th>
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
					              <td>
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