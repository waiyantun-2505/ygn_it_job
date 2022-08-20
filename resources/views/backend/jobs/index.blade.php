@extends('backendtemplate')
	
@section('content')
<h1 class="text-center">Showing Jobs Data</h1>
@if($errors->any())

		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>

	@endif
	<div class="container-fluid">
		<div class="row">
			<div class="ml-auto col-md-6">
			<a href="{{route('jobs.create')}}" class="btn btn-outline-info mb-3">Add New</a>
			</div>
			<div class="col-md-6">
			<a href="{{route('extendjobs')}}" class="btn btn-outline-warning float-right mb-3">Extend Jobs</a>
			</div>
			<div class="col-lg-12 col-md-12">
				<table class="table table-bordered mt-3">
					<thead class="table-dark">
						<th>No</th>
						<th>Name</th>
						<th>Company</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Salary</th>
						<th>Action</th>
					</thead>
					<tbody>
						@php $i=1 @endphp
						@foreach($jobs as $row)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$row->name}}</td>
								<td>{{$row->company->name}}</td>
								<td>{{$row->start_date}}</td>
								<td>{{$row->end_date}}</td>
								<td>{{$row->salary}}</td>
								<td>
									<a href="{{route('jobs.show',$row->id)}}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
									<a href="{{route('jobs.edit',$row->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
									<form method="post" action="{{route('jobs.destroy',$row->id)}}" onsubmit="return comfirm('Are you sure?')" class="d-inline-block">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger"><i class="fas fa-minus-circle"></i></button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
