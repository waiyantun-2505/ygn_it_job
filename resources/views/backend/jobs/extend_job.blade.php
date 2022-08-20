@extends('backendtemplate')

@section('content')
	
	<div class="container-fluid" style="height: 65vh;">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<h1 class="text-center">{{$job->name}}</h1>
			</div>

			<div class="col-md-6 col-lg-6 mx-auto">
				<form class="form-group" method="post" action="{{route('jobs.update',$job->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
					<div class="col-md-5 col-lg-5">
						<label>Start Date</label>
						<input type="date" name="start_date" class="form-control" value="{{$job->start_date}}">
					</div>
					<div class="col-md-5 col-lg-5">
						<label>End Date</label>
						<input type="date" name="end_date" class="form-control" value="{{$job->end_date}}">
					</div>
					<input type="hidden" name="name" value="{{$job->name}}">
					<input type="hidden" name="description" value="{{$job->description}}">
					<input type="hidden" name="township" value="{{$job->township}}">
					<input type="hidden" name="requirement" value="{{$job->requirement}}">
					<input type="hidden" name="gender" value="{{$job->gender}}">
					<input type="hidden" name="careerlevel" value="{{$job->careerlevel}}">
					<input type="hidden" name="salary" value="{{$job->salary}}">
					<input type="hidden" name="exp_yrs" value="{{$job->exp_yrs}}">
					<input type="hidden" name="category_id" value="{{$job->category_id}}">
					<input type="hidden" name="company_id" value="{{$job->company_id}}">
					<input type="hidden" name="is_feature" value="{{$job->is_feature}}">
					</div>

					<div class="col-md-12 col-lg-12 mt-3">
						<div class="row">
						<div class="col-md-6 col-lg-6">
							<input type="submit" name="" class="btn btn-warning" value="Extend Date">
						</div>
						<div class="col-md-6 col-lg-6">
							<a href="{{route('extendjobs')}}" class="btn btn-danger">Back</a>
						</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection