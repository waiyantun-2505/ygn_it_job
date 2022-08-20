@extends('backendtemplate')

@section('content')
	<h1 class="text-center">Register Job</h1>
	<div class="container-fluid">
		<div class="row">
			<a href="{{route('jobs.index')}}" class="btn btn-outline-info float-right mb-3">Back</a>

			@if($errors->any())
		
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif


			<div class="col-md-12">
				<form class="form-group" method="post" action="{{route('jobs.update',$job->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<label for="name" class="font-weight-bold">Name</label>
					<input type="text" id="name" name="name" class="form-control mb-4" value="{{$job->name}}">


					<label for="description" class="font-weight-bold">Job Description</label>
					<textarea id="description" name="description" class="form-control mb-4 {{($errors->first('description') ? "form-error" : "")}}">{{$job->description}}</textarea>
					<span class="text-danger">{{ $errors->first('description') }}</span>


					<label for="requirement" class="font-weight-bold">Job Requirement</label>
					<textarea id="requirement" name="requirement" class="form-control mb-4 {{($errors->first('requirement') ? "form-error" : "")}}">{{$job->requirement}}</textarea>
					<span class="text-danger">{{ $errors->first('requirement') }}</span>


					<label class="font-weight-bold">Choose Company</label>
					<select name="company_id" class="form-control mb-4">
						<option>Choose Company</option>
						@foreach($companies as $row)
							<option value="{{$row->id}}" @if($job->company_id == $row->id){{'selected'}} @endif>{{$row->name}}</option>
						@endforeach
					</select>

					<label class="font-weight-bold">Choose Category</label>
					<select name="category_id" class="form-control mb-4">
						<option>Choose Category</option>
						@foreach($categories as $row1)
							<option value="{{$row1->id}}" @if($job->category_id == $row1->id){{'selected'}} @endif>{{$row1->name}}</option>
						@endforeach
					</select>


					<label for="salary" class="font-weight-bold">Max-Salary</label>
					<input type="number" id="salary" name="salary" class="form-control mb-4" value="{{$job->salary}}">

					<label for="township" class="font-weight-bold">Township</label>
					<input type="text" id="township" name="township" class="form-control mb-4" value="{{$job->township}}">


					<label for="exp_yrs" class="font-weight-bold">Experience Years</label>
					<input type="number" id="exp_yrs" name="exp_yrs" class="form-control mb-4" value="{{$job->exp_yrs}}">

					
					<label class="font-weight-bold">Gender</label>
					<input type="radio" name="gender" value="Male" id="male" class="mb-4" {{ $job->gender == 'male' ? 'checked' : '' }}>
					<label for="male">Male</label>
					<input type="radio" name="gender" value="Female" id="female" class="mb-4" {{ $job->gender == 'female' ? 'checked' : '' }}>
					<label for="female">Female</label>
					<input type="radio" name="gender" value="Male/Female" id="both" class="mb-4" {{ $job->gender == 'Male/Female' ? 'checked' : '' }}>
					<label for="both">Both</label>

					<label class="font-weight-bold d-block">Choose Carrer Level</label>
					<select name="careerlevel" class="form-control mb-4">
						<option>Choose Career Level</option>
						<option value="Entry Level">Entry Level</option>
						<option value="Junior Level">Junior</option>
						<option value="Senior Level">Senior</option>
						<option value="Experienced Non-Manager">Experience Non-Manager</option>
						<option value="Manager">Manager</option>
					</select>


					<label class="font-weight-bold">Feature Status</label>
					<input type="radio" name="is_feature" value="1" id="feature" class="mb-4" {{ $job->is_feature == '1' ? 'checked' : '' }} >
					<label for="feature">Feature</label>
					<input type="radio" name="is_feature" value="0" id="non-feature" class="mb-4" {{ ($job->is_feature=="0")? "checked" : "" }}>
					<label for="non-feature">Non-Feature</label>

					<div class="mt-3">
					<input type="submit" value="Save" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection