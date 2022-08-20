<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\Company;
use App\Seeker;
use App\User;
use DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct($value='')
    {
        $this->middleware('role:admin');
    }

    public function seeker_job($value='')
    {   
        // $id = User::where('id');
        // // dd($id);
        // $seekers= Seeker::get();
        // $jobseekers = DB::table('jobs')->join('job_seeker','job_seeker.job_id','=','jobs.id')->join('seekers','seekers.id','=','job_seeker.seeker_id')->join('users','users.id','=','seekers.user_id')->select('jobs.name as jname','users.*')->get();
       // dd($jobseekers);
        // foreach ($jobseekers as $seeker) {
        //     echo $seeker->name;
        //     echo $seeker->jname;
        // }
        return view('backend.jobs.seeker_job');
    }

    public function extendJobs($value='')
    {   
        $jobs = Job::all();
        return view('backend.jobs.extend_jobs',compact('jobs'));
    }

    public function extendJob($id)
    {   
        $job = Job::find($id);
        return view('backend.jobs.extend_job',compact('job'));
    }


    public function index()
    {   
        $jobs = Job::all();
        return view('backend.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $companies = Company::all();
        $categories = Category::all();
        return view('backend.jobs.create',compact('companies','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required | min:3 | max:191',
            "description" => 'required | min:10',
            "requirement" => 'required | min:10',
            "company_id" => 'required',
            "start_date" => 'required|date|date_format:Y-m-d|before:end_date',
            "end_date" => 'required|date|date_format:Y-m-d|after:start_date',
            "township" => 'required',
            "category_id" => 'required',
            "exp_yrs" => 'required',
            "salary" => 'required',
            "gender" => 'required',
            "careerlevel" => 'required',
            "is_feature" => 'required'    
        ]);

        // Upload if exist // No 3 (if file include)
        
        // store  data // No 4
        $job = new Job;
        $job->name = request('name');
        $job->description = request('description');
        $job->requirement = request('requirement');
        $job->township = request('township');
        $job->start_date = request('start_date');
        $job->end_date = request('end_date');
        $job->gender = request('gender');
        $job->careerlevel = request('careerlevel');
        $job->salary = request('salary');
        $job->exp_yrs = request('exp_yrs');
        $job->category_id = request('category_id');
        $job->company_id = request('company_id');
        $job->is_feature = request('is_feature');


        

        $job->save();


        // Return redirect // No 5

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $job = Job::find($id);
        $companies =Company::all();
        $categories = Category::all();
        return view('backend.jobs.edit',compact('job','companies','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => 'required | min:3 | max:191',
            "description" => 'required | min:10',
            "company_id" => 'required',
            "township" => 'required',
            "start_date" => 'required|date|date_format:Y-m-d|before:end_date',
            "end_date" => 'required|date|date_format:Y-m-d|after:start_date',
            "requirement" => 'required',
            "category_id" => 'required',
            "exp_yrs" => 'required',
            "salary" => 'required',
            "gender" => 'required',
            "careerlevel" => 'required',
            "is_feature" => 'required'    
        ]);

        // Upload if exist // No 3 (if file include)
        
        // store  data // No 4
        $job = Job::find($id);
        $job->name = request('name');
        $job->description = request('description');
        $job->township = request('township');
        $job->start_date = request('start_date');
        $job->end_date = request('end_date');
        $job->requirement = request('requirement');
        $job->gender = request('gender');
        $job->careerlevel = request('careerlevel');
        $job->salary = request('salary');
        $job->exp_yrs = request('exp_yrs');
        $job->category_id = request('category_id');
        $job->company_id = request('company_id');
        $job->is_feature = request('is_feature');


        

        $job->save();


        // Return redirect // No 5

        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);

        $job->delete();
        return redirect()->route('jobs.index');
    }


    
}
