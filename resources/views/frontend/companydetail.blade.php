@extends('frontendtemplate')

@section('content')
	
		<div class="container-fluid">
      <div class="row">
        
            <img src="{{$company->banner}}" height="auto" width="100%" class="" style="
              object-position: 0 0 ; object-fit: cover; max-height: 250px; " >
                
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 mx-auto headline">
          <ul class="list-group shadow mt-2">
              <!-- list group item-->
              <li class="list-group-item">
                  <!-- Custom content -->
                  
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3" >
                          <img src="{{$company->logo}}" alt="Generic placeholder image" class="img-fluid" width="100%" height="auto">
                      </div>
                      <div class="col-md-9 col-lg-9 col-sm-9">
                        <h3>{{$company->name}}</h3>
                        <hr style="border:1px solid grey; margin: 0;">
                        <div class="row mt-lg-2">
                        <div class="col-md-9 col-lg-9">
                          <label class="d-block" style="font-size:14px; font-weight: bold;">Address</label>
                          <span style="font-size: 13px; line-height: 1px;" class=" text-justify">{{$company->address}}</span>
                        </div>

                        <div class="col-md-3 col-lg-3">
                          <label class="d-block" style="font-size:14px; font-weight: bold;">Contact Us</label>
                          <a href="{{$company->facebook}}"><i class="fab fa-facebook fa-2x"></i></a>

                          <a href="{{$company->instagram}}"><i class="fab fa-instagram fa-2x"></i></a>
                        </div>
                      </div>
                        
                      </div>

                      
                  </div> <!-- End -->
                  
              </li> <!-- End -->
              <!-- list group item--> 
          </ul> 
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-lg-8 mx-auto">
          <h2 style="color:#4e1515;">Vision And Mission</h2>
          <p class="text-justify">{{$company->visi_misi}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-lg-10 mx-auto">
    <hr>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-lg-8 mx-auto">
          <h2 style="color:#4e1515;">What We Do</h2>
          <p class="text-justify">{{$company->what_do}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-lg-10 mx-auto">
    <hr>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-lg-8 mx-auto">
          <h2 style="color:#4e1515;">Our workplace and culture</h2>
          <p class="text-justify">{{$company->culture}}</p>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-lg-10 mx-auto">
    <hr>
    </div>

    <div class="col-md-10 col-lg-10 mx-auto">
    <h1>All {{$company->name}} Jobs</h1>
    </div>

    <div class="container-fluid">
      <div class="row">
          <div class="col-md-10 col-lg-10 mx-auto table-responsive-sm">
            <table class="table">
              <thead>
                <tr class="text-center">
                  <th scope="col">No</th>
                  <th scope="col">Position Name</th>
                  <th scope="col">Max Salary</th>
                  <th scope="col">Job Location</th>
                  <th scope="col">Posted On:</th>
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
                    <td scope="col">{{$row->created_at->diffForHumans()}}</td>
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



    
	
@endsection