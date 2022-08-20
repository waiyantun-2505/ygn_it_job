@extends('backendtemplate')
	
@section('content')
<h1 class="text-center">Showing Companies Data</h1>
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
			
			<a href="{{route('companies.create')}}" class="btn btn-outline-info float-right mb-3">Add New</a>
			<div class="col-lg-12 col-md-12">
				<table class="table table-bordered mt-3">
					<thead class="table-dark">
						<th>No</th>
						<th>Name</th>
						<th>No of Employee</th>
						<th>Address</th>
						<th>Action</th>
					</thead>
					<tbody>
						@php $i=1 @endphp
						@foreach($companies as $row)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$row->name}}</td>
								<td>{{$row->no_of_employee}}</td>
								<td style="max-width: 200px;">{{$row->address}}</td>
								<td>
									<a href="{{route('companies.show',$row->id)}}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
									<a href="{{route('companies.edit',$row->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
									<form method="post" action="{{route('companies.destroy',$row->id)}}" onsubmit="return comfirm('Are you sure?')" class="d-inline-block">
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
