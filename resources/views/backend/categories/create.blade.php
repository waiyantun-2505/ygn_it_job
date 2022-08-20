@extends('backendtemplate')

@section('content')
	
	<h1 class="text-center">Create Category</h1>
	<div class="container-fluid">
		<div class="row">
			<a href="{{route('categories.index')}}" class="btn btn-outline-info float-right mb-3">Back</a>
			<div class="col-md-12">
				<form class="form-group" method="post" action="{{route('categories.store')}}">
					@csrf
					<label for="name" class="font-weight-bold">Name</label>
					<input type="text" id="name" name="name" class="form-control">
					<div class="mt-3">
					<input type="submit" name="" value="Save" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection