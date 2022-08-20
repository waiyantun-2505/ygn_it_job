@extends('backendtemplate')

@section('content')
	<h1 class="text-center">Register Company</h1>
	<div class="container-fluid">
		<div class="row">
			<a href="{{route('companies.index')}}" class="btn btn-outline-info float-right mb-3">Back</a>

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
				<form class="form-group" method="post" action="{{route('companies.store')}}" enctype="multipart/form-data">
					@csrf 	 	
					<label for="name" class="font-weight-bold">Name</label>
					<input type="text" id="name" name="name" class="form-control mb-4">


					<label for="address" class="font-weight-bold">Address</label>
					<textarea id="address" name="address" class="form-control mb-4"></textarea>


					<label for="num_employee" class="font-weight-bold">No of Employee</label>
					<input type="number" id="num_employee" name="num_employee" class="form-control mb-4">


					<label for="visi_misi" class="font-weight-bold">Vision and Mission</label>
					<textarea type="text" id="visi_misi" name="visi_misi" class="form-control mb-4"> </textarea>


					<label for="what_do" class="font-weight-bold">What We Do</label>
					<textarea type="text" id="what_do" name="what_do" class="form-control mb-4"> </textarea>


					<label for="culture" class="font-weight-bold">Our Workplace and Culture</label>
					<textarea type="text" id="culture" name="culture" class="form-control mb-4"> </textarea>


					<label for="facebook" class="font-weight-bold d-block">Facebook Link</label>
					<input type="text" id="facebook" name="facebook" class="d-block mb-4">


					<label for="instagram" class="font-weight-bold d-block">Instagram Link</label>
					<input type="text" id="instagram" name="instagram" class="d-block mb-4">


					<label for="logo" class="font-weight-bold d-block">Logo</label>
					<input type="file" id="logo" name="logo" class="d-block mb-4">


					<label for="banner" class="font-weight-bold d-block">Banner</label>
					<input type="file" id="banner" name="banner" class="d-block mb-4">



					<div class="mt-3">
					<input type="submit" value="Save" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection