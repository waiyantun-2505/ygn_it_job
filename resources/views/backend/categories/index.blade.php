@extends('backendtemplate')

@section('content')
<h1 class="text-center">Showing Categories Data</h1>
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
			
			<a href="{{route('categories.create')}}" class="btn btn-outline-info float-right mb-3">Add New</a>
			<div class="col-lg-12 col-md-12">
				<table class="table table-bordered mt-3">
					<thead class="table-dark">
						<th>No</th>
						<th>Name</th>
						<th>Action</th>
					</thead>
					<tbody>
						@php $i=1; @endphp
						@foreach($categories as $row)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$row->name}}</td>
								<td>
									<a href="{{route('categories.edit',$row->id)}}" class="btn btn-primary">Edit</a>
									<form method="post" action="{{route('categories.destroy',$row->id)}}" onsubmit="return comfirm('Are you sure?')" class="d-inline-block">
										@csrf
										@method('DELETE')
									<button type="submit" class="btn btn-danger">Delete</button>
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