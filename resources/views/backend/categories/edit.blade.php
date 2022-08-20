@extends('backendtemplate')

@section('content')
	<h1 class="text-center"></h1>
	<h1 class="text-center">Edit Category</h1>
	<div class="container-fluid">
		<div class="row">
			<a href="{{route('categories.index')}}" class="btn btn-outline-info float-right mb-3">Back</a>
			<div class="col-md-12">
				<form class="form-group" method="post" action="{{route('categories.update',$category->id)}}">
						@csrf
						@method('PUT')
					<label for="name" class="font-weight-bold">Name</label>
					<input type="text" id="name" name="name" class="form-control" value="{{$category->name}}">
					<div class="mt-3">
					<input type="submit" name="" value="Save" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection