@extends('frontendtemplate')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 pb-5" id="banner">
			<div class="mx-auto input-group">
        <div class="col-lg-2">
          
        </div>
        <div class="col-lg-5 col-md-5">
        <form action="/search" method="POST" role="search">
          {{ csrf_field() }}

				
          <input type="text" class="text_box mt-5 form-control" name="search" placeholder="Enter Job title">
				</div>
			
				
				<div class="col-lg-2 col-md-2 input-group mb-3 mt-5">
          <button type="submit" class="btn btn-default search">
                Search</span>
            </button>
				</div>

        <div class="col-lg-3">
          
        </div>
        </form>	
			</div>
		</div>
	</div>
</div>

	<div class="container">
		<div class="row mt-2">
			<div class="col-md-8 col-lg-8 mx-auto">
				<h4 class="text-danger">Total {{$count}} Jobs!!</h4>
			</div>
		</div>
	</div>

	

	<!-- main content -->
	<div class="container my-2">
		<div class="row">
			
      		<div class="col-lg-8 mx-auto">
          	
		      	@foreach($job as $job_row)
		      	<!-- List group-->
		          <ul class="list-group shadow mt-2">
		              <!-- list group item-->
		              <li class="list-group-item">
		                  <!-- Custom content -->
		                  <div class="media align-items-lg-center flex-column flex-lg-row p-3">
		                      <div class="media-body order-2 order-lg-1">
		                          <h5 class="mt-0 font-weight-bold mb-2">{{$job_row->name}}</h5>
		                          
		                          <a href="{{route('companydetail',$job_row->company_id)}}">
		                          <p class="font-italic font-weight-bold text-muted mb-0">{{$job_row->company->name}}</p>
		                          </a>
		                          <div>
		                              <p>{{$job_row->careerlevel}}</p>
		                          </div>

		                         <div class="d-flex align-items-center justify-content-between mt-1">
		                              

		                          <h4 class="d-flex small wordlimit" style="max-width:50em; word-wrap:break-word;">{{$job_row->company->what_do}}</h4>

		                      
		                          </div>
		                          

		                         </div>
		                      <img src="{{$job_row->company->logo}}" alt="Generic placeholder image" width="20%" height="auto" class="ml-lg-5 order-1 order-lg-2 hover-shadow">

		                  </div> <!-- End -->
		                  <hr style="margin: 0;">
		                  <div class="mt-lg-1 mt-md-1">
		                    <label>Posted On:</label>
		                  	<span>{{$job_row->created_at->diffForHumans()}}</span>
		                  	<a href="{{route('jobdetail',$job_row->id)}}" class="btn search float-right">Detail</a>
		                  </div>
		              </li> <!-- End -->
		              <!-- list group item--> 
		             </ul> 
		             <!-- List group-->
		             @endforeach
         		</div>
     		</div>
 		</div>

 		<div class="row">
 			<div class="col-lg-2 col-md-2 mx-auto">
 				{{ $job->links() }}
 			</div>
 		</div>
 		
 		

@endsection