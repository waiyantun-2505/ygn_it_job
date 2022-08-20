<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Job;
use App\Company;
use Auth;
use App\Seeker;
use App\User;

class FrontendController extends Controller
{   

    

    public function applyJob($id)
    {   
        if (Auth::check()) {
            $id=Auth::user()->id;
            $seeker = Seeker::where('user_id',$id)->first();
            // $seeker_id=array();
            // dd($seeker);
            $job_id=array();
            $seeker_id = array();
            $data;
            if($seeker->jobs)
            {
                foreach ($seeker->jobs as $value) {
                    $seeker_id[]= $value->pivot->seeker_id;
                    $job_id[]= $value->pivot->job_id;
                }

                for ($i=0; $i < count($job_id); $i++) { 
                    $data = $job_id[$i]==request('job_id');
                }
            }

            

            
            if(count($job_id)>0){

                    
                        if( $data && $seeker_id[0] == $seeker->id){
                            
                            return redirect()->back()->with('message','This Job is Already Applied!!');
                         
                        }

                        else{
                             $id=Auth::user()->id;
                            $seeker = Seeker::where('user_id',$id)->first();
                            // dd(request('job_id'));
                            $seeker->jobs()->attach(request('job_id'));
                            return redirect()->back()->with('message','This job is applied');
                           
                        }
                

                }
            else{
                    $id=Auth::user()->id;
                    $seeker = Seeker::where('user_id',$id)->first();
                    // dd(request('job_id'));
                    $seeker->jobs()->attach(request('job_id'));
                    return redirect()->back()->with('message','This job is applied');
                }
           

            


        }else
        {
            return redirect()->route('login');
        }
    }


    public function index($value='')
    {	
        // $user = User::find(1)->first();
        // $decrypted = Crypt::decrypt($user->password);

        // dd($pw);
        $today = today();
        // dd($today);

        $companies = Company::limit('6')->get();
        // $companies = Job::all();
        // dd($companies);
        // foreach ($companies as $key => $value) {
            
        //     $jobs = Company::where('id','=',$value->company_id)->get();
        //     echo $jobs."</br>"; 
        // }

        



        $job_feature = Job::where('start_date','<=',$today)->where('end_date','>=',$today)->where('is_feature','1')->paginate(7);


        $job = Job::where('start_date','<=',$today)->where('end_date','>=',$today)->orderby('created_at','desc')->limit(11)->get();


        // dd($job_feature);
    	// $job_feature = Job::all()->where('is_feature','1')
    	// 					->where('is_active','1');
    	$categories = Category::all();
        $seeker = Seeker::find(Auth::check());
    	return view('frontend.index',compact('categories','job_feature','seeker','job','companies'));
    }

    public function Search($value='')
    {    
        $today = today();
        $search = request('search');
        $job = Job::where('start_date','<=',$today)->where('end_date','>=',$today)->where('name','LIKE','%'.$search.'%')->paginate(10);
        $categories = Category::all();
        $count = count($job);
        $seeker = Seeker::find(Auth::check());
   

    return view('frontend.alljobs',compact('job','categories','count','seeker'));
    }

    public function jobDetail($id)
    {
        // dd($id);
    	$job = Job::find($id);
        $seeker = Seeker::find(Auth::check());
    	return view('frontend.jobdetail',compact('job','seeker'));
    }

    public function companyDetail($id)
    {   
        $company = Company::find($id);

        $jobs = Job::where('company_id',$id)->orderby('created_at','desc')->get();
        // dd($job);
        // $seeker = Seeker::find(Auth::check());
        return view('frontend.companydetail',compact('company','jobs'));
    }

    public function allJobs($value='')
    {   
        $today = today();
        $job = Job::where('start_date','<=',$today)->where('end_date','>=',$today)->orderby('created_at','desc')->paginate(10);
        $categories = Category::all();
        $count = count($job);
        $seeker = Seeker::find(Auth::check());
        return view('frontend.alljobs',compact('categories','job','count','seeker'));
    }

    public function contactus($value=''){
        
    }

    
}
