@extends('backendtemplate')
	
@section('content')



	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 col-lg-7 mx-auto">
				<div class="page-header">
				
				<select id="employee" class="form-control">
				<option value="" selected="selected">Select Employee Name</option>
				@php
					$companies = DB::table('companies')->get();
				@endphp
				@foreach($companies as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
				@endforeach
				</select>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<table class="table table-bordered mt-3">
					<thead class="table-dark">
						<tr>
							<th>No</th>
							<th>Job Name</th>
							<th>Township</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="jobs">
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection

@section('script')
	<script type="text/javascript">

		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		$(document).ready(function(){
			$("#employee").change(function() {
			var id = $(this).find(":selected").val();
			var html="";
			var j=1;
			$.post('/search_company',{id:id},function(res){
				$.each(res,function(i,v){
					var id = v.id;
					var name = v.name;
					var start_date = v.start_date;
					var end_date = v.end_date;
					var township = v.township;
					
					html+=`	<tr>
								<td>${j++}</td>
								<td>${name}</td>
								<td>${township}</td>

								<td>${start_date}</td>
								<td>${end_date}</td>
								<td>
									<a href="{{route('search_seekers',':id')}}"  class="btn btn-outline-primary">View Applied Job</a>
								</td>
							</tr>
							`;


				html=html.replace(':id',v.id);
							
				});

				$("#jobs").html(html);	
			})

			});
		});
	</script>
@endsection
