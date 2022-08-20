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

<!-- Top Jobs -->
<div class="container top_company">
	<div class="row">
		<div class="col-lg-9 col-md-9 mx-auto offset-12 mt-3">
			
				<fieldset class="scheduler-border">
				<legend class="scheduler-border"> Top Employers </legend>
				<div class="row">
					@foreach($companies as $row)
					<div class="col-lg-2 col-md-2">
						<img src="{{$row->logo}}" class="img-thumbnail hover-shadow">
					</div>
					@endforeach
					
				</div>
			</fieldset>
			
		</div>
	</div>
</div>


<!-- Content Page -->
<div class="container">
	<div class="row">
		<div class="ml-2">
			<h1 class="mt-4 primary position-relative"> 
				<i class="fas fa-star" style="color: #d8d823;font-size: 30px;"></i> Featured Jobs 
			</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
			
      <div class="col-lg-8 mx-auto">
          	
      	<hr style="background-color: #4e1515; height: 2px; max-width: 370px; margin: 0px;">

      	@foreach($job_feature as $job_row)
      	<!-- List group-->
          <ul class="list-group shadow mt-2">
              <!-- list group item-->
              <li class="list-group-item">
                  <!-- Custom content -->
                  <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                      <div class="media-body order-2 order-lg-1">
                          <h5 class="mt-0 font-weight-bold mb-2">{{$job_row->name}}</h5>
                          
                          <a href="{{route('companydetail',$job_row->company_id)}}">
                          <p class="font-italic font-weight-bold text-muted mb-0" style="">{{$job_row->company->name}}</p>
                          </a>
                          <div>
                              <p>{{$job_row->careerlevel}}</p>
                          </div>

                         <div class="d-flex align-items-center justify-content-between mt-1">
                              

                          <h4 class="d-flex small wordlimit text-justify" style="max-width:50em; word-wrap:break-word;">{{$job_row->company->what_do}}</h4>

                      
                          </div>                          

                         </div>
                      <img src="{{$job_row->company->logo}}" alt="Generic placeholder image" width="20%" height="auto" class="ml-lg-5 order-1 order-lg-2 hover-shadow">

                  </div> <!-- End -->
                  <hr style="margin: 0;">
                  <div class="mt-lg-1 mt-md-1 mt-sm-5">
                    <label>Posted On:</label>
                  <span>{{$job_row->created_at->diffForHumans()}}</span>
                  <a href="{{route('jobdetail',$job_row->id)}}" class="btn search float-right">Detail</a>
                  </div>
                  
              </li> <!-- End -->
              <!-- list group item--> 
             </ul> 
             <!-- List group-->
             @endforeach   
				  <div class="row">
      <div class="col-lg-2 col-md-2 mx-auto">
        {{ $job_feature->links() }}
      </div>
    </div>
      </div>

      <div class="col-md-4 col-lg-4">
      	<div class="row">
      		<div class="col-md-12 col-lg-12">
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner top_company">
		    <div class="carousel-item active">
		      <div class="row">
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/1.png')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/3.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/4.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="row">
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/1.png')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/3.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/4.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="row">
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/1.png')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/3.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/4.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/6.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      	<div class="col-md-4">
		      		<img src="{{asset('frontend/images/2.jpg')}}" class="img-thumbnail mt-2">
		      	</div>
		      </div>
		    </div> 
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		</div>
		</div>

		<div class="row">
			<div class="col-md-12 col-lg-12">
			@foreach($job as $row)
			<ul class="list-group list-group-flush">
			  <li class="list-group-item">
			  	<a href="">
			  	<h5 class="mt-0 font-weight-bold mb-2 link_color"><a href="{{ route('jobdetail',$row->id )}}">{{$row->name}}</a></h5>
			  	</a>
			  	<a href="{{route('companydetail',$row->company_id)}}">
                  	<p class="font-italic font-weight-bold text-muted mb-0">{{$row->company->name}}</p>
                </a>
			  </li> 
			</ul>
			@endforeach
			</div>
		</div>

      </div><!-- -- -->

  </div>
</div>


@endsection