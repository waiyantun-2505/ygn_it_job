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
				<form class="form-group" method="post" action="{{route('companies.update',$company->id)}}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<label for="name" class="font-weight-bold">Name</label>
					<input type="text" id="name" name="name" class="form-control mb-4 {{($errors->first('name') ? "form-error" : "")}}" value="{{$company->name}}">
					<span class="text-danger">{{ $errors->first('name') }}</span>


					<label for="address" class="font-weight-bold">Address</label>
					<textarea id="address" name="address" class="form-control mb-4 {{($errors->first('address') ? "form-error" : "")}}">{{$company->address}}</textarea>
					<span class="text-danger">{{ $errors->first('address') }}</span>


					<label for="num_employee" class="font-weight-bold">No of Employee</label>
					<input type="number" id="num_employee" name="num_employee" class="form-control mb-4 {{($errors->first('num_employee') ? "form-error" : "")}}" value="{{$company->no_of_employee}}">
					<span class="text-danger">{{ $errors->first('num_employee') }}</span>


					<label for="visi_misi" class="font-weight-bold">Vision and Mission</label>
					<textarea type="text" id="visi_misi" name="visi_misi" class="form-control mb-4 {{($errors->first('visi_misi') ? "form-error" : "")}}">{{$company->visi_misi}}</textarea>
					<span class="text-danger">{{ $errors->first('visi_misi') }}</span> 


					<label for="what_do" class="font-weight-bold">What We Do</label>
					<textarea type="text" id="what_do" name="what_do" class="form-control mb-4 {{($errors->first('what_do') ? "form-error" : "")}}">{{$company->what_do}}</textarea>
					<span class="text-danger">{{ $errors->first('what_do') }}</span>

					<label for="culture" class="font-weight-bold">Our Workplace and Culture</label>
					<textarea type="text" id="culture" name="culture" class="form-control mb-4 {{($errors->first('culture') ? "form-error" : "")}}">{{$company->culture}}</textarea>
					<span class="text-danger">{{ $errors->first('culture') }}</span>


					<label for="facebook" class="font-weight-bold">Facebook Link</label>
					<input type="text" id="facebook" name="facebook" class="form-control mb-4" value="{{$company->facebook}}">
					


					<label for="instagram" class="font-weight-bold">Instagram Link</label>
					<input type="text" id="instagram" name="instagram" class="form-control mb-4" value="{{$company->instagram}}">
					


					<div class="my-2">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Old Logo</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Add New Logo</a>
						  </li>
						  
						</ul>
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">

						  	<img src="{{asset($company->logo)}}" class="img-fluid mt-3" width="120px" height="170px">
						  	<input type="hidden" name="oldlogo" value="{{$company->logo}}">

						  </div>

						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

						<input type="file" name="logo" class="form-control-file mt-3"></div>
						  
						</div>
					</div>


					<div class="my-2">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Old Banner</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Add New Banner</a>
						  </li>
					  
						</ul>
						
					<div class="tab-content mt-3" id="myTabContent">
					  <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">

					  	<img src="{{asset($company->banner)}}" class="img-fluid mt-3" width="120px" height="170px">
					  	<input type="hidden" name="oldbanner" value="{{$company->banner}}">

					  </div>

					  <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">

						<input type="file" name="banner" class="form-control-file mt-3"></div>
					  
					</div>
				</div>

					<div class="mt-3">
					<input type="submit" value="Save" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection