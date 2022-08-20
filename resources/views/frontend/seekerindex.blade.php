@extends('frontendtemplate')

@section('content')
	
	<div class="container-fluid" id="banner" style="min-height: 100vh">
		<div class="row">
			<div class="col-md-8 col-lg-8 mx-auto my-4">
				<ul class="list-group shadow">
              		<li class="list-group-item">
              			<div class="row">
              				<div class="col-lg-4 col-md-4">
              					<img src="{{$seeker->photo}}" class="img-fluid">
							</div>
              				<div class="col-lg-8 col-md-8">
              					<h3 class="text-center text-capitalize">{{$seeker->user->name}}</h3>
              					<hr>
              					<div class="row my-2">
              						<div class="col-md-3 col-lg-3">
              							<label class="col-form-label font-weight-bold">Your Email</label>
              						</div>
              						<div class="col-md-9 col-lg-9">
              							<label class="col-form-label text-muted">{{$seeker->user->email}}</label>
              						</div>
              					</div>

                             <div class="row my-2">
                                    <div class="col-md-3 col-lg-3">
                                           <label class="col-form-label font-weight-bold">Phone Number</label>
                                    </div>
                                    <div class="col-md-9 col-lg-9">
                                           <label class="col-form-label text-muted">{{$seeker->phone}}</label>
                                    </div>
                             </div>

              					<div class="row my-2">
              						<div class="col-md-3 col-lg-3">
              							<label class="col-form-label font-weight-bold">Address</label>
              						</div>
              						<div class="col-md-9 col-lg-9">
              							<label class="col-form-label text-muted">{{$seeker->address}}</label>
              						</div>
              					</div>
              					<div class="row my-2">
              						<div class="col-md-3 col-lg-3">
              							<label class="col-form-label font-weight-bold">Gender</label>
              						</div>
              						<div class="col-md-9 col-lg-9">
              							<label class="col-form-label text-muted">{{$seeker->gender}}</label>
              						</div>
              					</div>
              					<hr>
              					<div class="row">
              						<div class="col-md-12 col-lg-12">
              							<label class="mr-auto ml-auto font-weight-bold">Your CV Preview</label>
              							<embed src="{{$seeker->cv}}" width="100%" height="500vh">
              						</div>
              					</div>




              					<div class="row mt-md-3 mt-lg-3">
              						
       							<div class="col-md-6 col-lg-6">
       								<a href="{{route('index')}}" class="btn btn-outline-danger">Back</a>
       							</div>
       							<div class="col-md-6 col-lg-6">
       								<a href="{{ route('seekers.edit',Auth::user()->id)}}" class="btn btn-outline-warning float-right">Update Profile</a>
       							</div>
              					
              					</div>

              				</div>
              			</div>
              		</li>
              	</ul>
		     </div> <!-- end col-8 -->
		</div> <!-- end row -->
	</div> <!-- end container -->


@if($jobs != null)
  <!-- show table -->
<div class="container-fluid my-2">
  <div class="row">
    <div class="col-md-10 col-lg-10 mx-auto">
      <h3>Your Applied Jobs</h3>
    </div>
  </div>
</div>
<div class="container-fluid">
      <div class="row">
          <div class="col-md-10 col-lg-10 mx-auto">
            <table class="table">
              <thead>
                <tr class="text-center">
                  <th scope="col">No</th>
                  <th scope="col">Position Name</th>
                  <th scope="col">Max Salary</th>
                  <th scope="col">Job Location</th>
                  <th scope="col">Applied On:</th>
                  <th scope="col">View</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1 @endphp
               @foreach($jobs as $row)
                  <tr class="text-center">
                    <td scope="col">{{$i++}}</td>
                    <td scope="col">{{$row->name}}</td>
                    <td scope="col">{{$row->salary}}</td>
                    <td scope="col">{{$row->township}}</td>
                    <td scope="col">{{$row->pivot->created_at->diffForHumans()}}</td>
                    <td>
                      <a href="{{route('jobdetail',$row->id)}}" class="btn search">View Job</a>
                    </td>
                  </tr>
               @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>
@endif


@endsection
