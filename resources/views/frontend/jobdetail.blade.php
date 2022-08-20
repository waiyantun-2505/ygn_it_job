@extends('frontendtemplate')

@section('content')
	 
    
		<div class="container my-2">			
			<div class="row">
        <div class="col-md-9 col-lg-9 mx-auto">
          <!-- List group-->
              <ul class="list-group shadow mt-2">
              <!-- list group item-->
                  <li class="list-group-item">
                  
                    <div class="row">
                    <div class="col-lg-4 col-md-4 my-auto">
                      <img src="{{$job->company->logo}}" alt="Generic placeholder image" width="50%" height="auto" class="ml-lg-5 order-1 order-lg-2 hover-shadow">
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="row">
                        <div class="col-lg-8 col-md-8">
                        <h3>{{$job->name}}</h3>
                        <a href="{{route('companydetail',$job->company_id)}}">
                          <p class="font-italic font-weight-bold text-muted mb-0">{{$job->company->name}}</p>
                          </a>
                        <div class="row" style="font-size: 0.8em;">
                        <div class="ml-0 col-md-4 col-lg-4 mt-2">
                          <span class="text-capitalize text-muted">Open To <i class="fas fa-angle-right mr-2" style="color: #4e1515;"></i>{{$job->gender}}</span>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                          <span class="text-capitalize text-muted"><i class="fas fa-location-arrow mr-2" style="color: #4e1515;"></i>{{$job->township}}</span>
                        </div>
                        <div class="col-lg-4 col-md-4 mt-2">
                          <span class="text-muted">{{$job->careerlevel}}</span>
                        </div>
                      </div>
                      </div>
                      <div class="col-lg-4 col-md-4 my-auto">
                        <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-1">
                          <i class="fas fa-dollar-sign pr-3" style="color: green;"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-11 mr-0 p-0">
                          @guest
                              <a class="text-decoration-none" href="{{ route('login') }}"><span class="small">Please Login First</span></a>
                              @else
                            {{$job->salary}}
                            @endguest
                        </div>
                        </div>
                        
                      </div>
                      </div>
                    </div>

               </div>

               <hr>
                
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h4 style="color: #ffc107;letter-spacing: 4px;">Job Description</h4>

                    <p class="ml-lg-5 ml-md-5">{!!$job->description!!}</p>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h4 style="color: #ffc107;letter-spacing: 4px;">Job Requirement</h4>

                    <p class="ml-lg-5 ml-md-5">{!!$job->requirement!!}</p>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h4 style="color: #ffc107;">About Our Company</h4>

                    <p class="ml-lg-5 ml-md-5">{{$job->company->what_do}}</p>
                  </div>
                </div>

                
                @php
                  $today = today();
                  $condition = DB::table('jobs')->where('start_date','<=',$today)->where('end_date','>=',$today)->where('id',$job->id)->first();
                @endphp
                @if($condition)

                  <hr>
                  
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    
                      <form method="post" action="{{route('applyjob',$job->id)}}">
                      @csrf
                      <input type="hidden" name="job_id" value="{{$job->id}}">
                    <input type="submit" style="text-decoration: none; padding-right: 10px; padding-right:25px ;background-color: #ffc107;" class="btn search" value="Apply Job">
                    @if(session('message'))
                      <p class="text-danger">{{session('message')}}</p>
                    @endif
                    
                    </form>
                    
                    
                  </div>
                </div>
                
                @endif
                      
                  </li> <!-- End -->
              <!-- list group item--> 
              </ul> 
             <!-- List group--> 
         
        </div>
      </div>
		</div>
	
@endsection

@section('script')
  <script type="text/javascript">
    var msg = '{{Session::get('message')}}';
    var exist = '{{Session::has('message')}}';
    if(exist){
      alert(message);
    }
    </script>
@endsection