@extends('backendtemplate')

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<table class="table table-bordered mt-3">
					<thead class="table-dark">
						<tr>
							<th>No</th>
							<th>Job Name</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@php $i=1; @endphp
						@foreach($jobs as $row)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$row->name}}</td>
								<td>{{$row->start_date}}</td>
								<td>{{$row->end_date}}</td>
								<td>
									<a href="{{route('extendjob',$row->id)}}" class="btn btn-outline-warning">Extend Here</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection