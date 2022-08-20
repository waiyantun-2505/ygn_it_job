@extends('backendtemplate')

@section('content')
	<h1 class="text-center">Register Job</h1>
	<div class="container-fluid">
		<div class="row">
			<a href="{{route('jobs.index')}}" class="btn btn-outline-info float-right mb-3">Back</a>



			<div class="col-md-12">
				<form class="form-group" method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data">
					@csrf
					<label for="name" class="font-weight-bold">Name</label>
					<input type="text" id="name" name="name" class="form-control mb-4">


					<label for="description" class="font-weight-bold">Job Description</label>
					<textarea id="description" name="description" class="form-control summernote_desc mb-4 {{($errors->first('description') ? "form-error" : "")}}"></textarea>
					<span class="text-danger">{{ $errors->first('description') }}</span>


					<label for="requirement" class="font-weight-bold">Job Requirement</label>
					<textarea id="requirement" name="requirement" class="form-control summernote_require mb-4 {{($errors->first('requirement') ? "form-error" : "")}}"></textarea>
					<span class="text-danger">{{ $errors->first('requirement') }}</span>


					<label class="font-weight-bold">Choose Company</label>
					<select name="company_id" class="form-control mb-4">
						<option>Choose Company</option>
						@foreach($companies as $row)
							<option value="{{$row->id}}">{{$row->name}}</option>
						@endforeach
					</select>

					<label class="font-weight-bold">Choose Category</label>
					<select name="category_id" class="form-control mb-4">
						<option>Choose Category</option>
						@foreach($categories as $row1)
							<option value="{{$row1->id}}">{{$row1->name}}</option>
						@endforeach
					</select>


					<label for="salary" class="font-weight-bold">Max-Salary</label>
					<input type="number" id="salary" name="salary" class="form-control mb-4">

					<label for="township" class="font-weight-bold">Township</label>
					<input type="text" id="township" name="township" class="form-control mb-4">


					<label for="exp_yrs" class="font-weight-bold">Experience Years</label>
					<input type="number" id="exp_yrs" name="exp_yrs" class="form-control mb-4">

					
					<label class="font-weight-bold">Gender</label>
					<input type="radio" name="gender" value="Male" id="male" class="mb-4">
					<label for="male">Male</label>
					<input type="radio" name="gender" value="Female" id="female" class="mb-4">
					<label for="both">Female</label>
					<input type="radio" name="gender" value="Male/Female" id="both" class="mb-4">
					<label for="female">Both</label>

					<label class="font-weight-bold d-block">Choose Carrer Level</label>
					<select name="careerlevel" class="form-control mb-4">
						<option>Choose Career Level</option>
						<option value="Entry Level">Entry Level</option>
						<option value="Junior Level">Junior</option>
						<option value="Senior Level">Senior</option>
						<option value="Experienced Non-Manager">Experience Non-Manager</option>
						<option value="Manager">Manager</option>
					</select>


					<label class="font-weight-bold d-block">Start Date</label>
					<div class="col-md-3 col-lg-3">
						<input type="date" name="start_date" class="mb-3 form-control {{($errors->first('start_date') ? "form-error" : "")}}">
					</div>
					<span class="text-danger">{{ $errors->first('start_date') }}</span>
					


					<label class="font-weight-bold d-block">End Date</label>
					<div class="col-md-3 col-lg-3">
						<input type="date" name="end_date" class="mb-3 form-control {{($errors->first('end_date') ? "form-error" : "")}}">
					</div>
					<span class="text-danger">{{ $errors->first('end_date') }}</span>


					<label class="font-weight-bold d-block">Feature Status</label>
					<input type="radio" name="is_feature" value="1" id="feature" class="mb-4">
					<label for="feature">Feature</label>
					<input type="radio" name="is_feature" value="0" id="non-feature" class="mb-4">
					<label for="non-feature">Non-Feature</label>





					<div class="mt-3">
					<input type="submit" value="Save" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.summernote_desc').summernote({
		        placeholder: 'Description',
		        tabsize: 2,
		        height: 100													
    		});

			$('.summernote_require').summernote({
		        placeholder: 'Requirement',
		        tabsize: 2,
		        height: 100													
    		});


		});

		
	</script>
@endsection