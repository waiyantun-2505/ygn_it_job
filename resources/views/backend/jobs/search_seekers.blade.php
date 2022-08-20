@extends('backendtemplate')

@section('content')
		
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<table class="table table-bordered mt-3">
					<thead class="table-dark">
						<tr>
							<th>No</th>
							<th>Seeker Name</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Applied Date</th>
						</tr>
					</thead>
					<tbody>
						@php $i=1; @endphp
						@foreach($users as $user)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->phone}}</td>
								<td>{{$user->address}}</td>
								<td>{{$user->updated_at}}</td>
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection