@extends('frontendtemplate')

@section('content')

      <div class="container-fluid" id="banner">
        <div class="row">
          <div class="col-md-8 col-lg-8 mx-auto my-5">
            <form method="post" action="{{route('seekers.update',$seeker->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <ul class="list-group shadow">
              <li class="list-group-item">
                <div class="row">
                  <div class="col-md-3 col-lg-3">
                    <img src="{{$seeker->photo}}" class="img-fluid">


                    <!-- hidden old image -->
                    <input type="hidden" name="oldphoto" value="{{$seeker->photo}}">

                  </div>
                  <div class="col-md-9 col-lg-9">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$seeker->user->name}}" class="form-control"><hr>

                    <label class="mt-3">Email</label>
                    <input type="email" name="email" value="{{$seeker->user->email}}" class="form-control"><hr>

                    <!-- hidden password -->
                    <input type="hidden" name="password" value="{{$seeker->user->password}}">



                    <label class="mt-3">Phone Number</label>
                    <input class="form-control" name="phone">{{$seeker->phone}}<hr>


                    <label class="mt-3">Address</label>
                    <textarea class="form-control" name="address">{{$seeker->address}}</textarea><hr>

                    <label class="mt-3">Gender</label>
                    <input type="radio" name="gender" value="Male" {{ $seeker->gender == 'Male' ? 'checked' : '' }}>Male
                    <input type="radio" name="gender" value="Female" {{ $seeker->gender == 'Female' ? 'checked' : '' }}>Female <hr>

                    

                    <div class="mt-3">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Latest CV</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Add New CV</a>
                        </li>
                      
                      </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">


                        <embed src="{{$seeker->cv}}" class="img-fluid mt-3" width="120px" height="170px">

                        <!-- hidden old cv -->
                        <input type="hidden" name="oldcv" value="{{$seeker->cv}}">

                      </div>

                      <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">

                      <input type="file" name="newcv" class="form-control-file mt-3"></div>
                      
                    </div>
                  </div>

                  <hr>


                  <label class="mt-3">Do you want to Change Your Profile Photo? (Optional)</label>
                  <input type="file" name="newphoto">
                  <hr>


                  <div class="mt-3">
                    <input type="submit" value="Update" class="btn btn-outline-warning text-dark">
                  </div>

                  </div>
                </div>
              </li>
            </ul>
            </form>
          </div>
        </div>
      </div>
  </div>


@endsection