<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Seeker;
use App\Company;
use App\User;

use DB;

class BackendController extends Controller
{
    public function dashboard()
    {
    	return view('backend.dashboard');
    }

    public function mails($value='')
    {
        $email = $request->email;

        $detail_list = [
            'title' => 'Mail Form FoodSent',
            'body' => 'Your job post seekers are here',
        ];

        Mail::to($email)->send(new App\Mail\Mail($detail_list));

        return redirect()->route('seeker_job');
    }

    public function search_company(Request $request)
    {
        $id = request('id');
        $jobs = Job::where('company_id',$id)->get();
        return $jobs;
    }

    public function search_seekers($id)
    {   
        $users = DB::table('users')
                    ->join('seekers', 'seekers.user_id', '=', 'users.id')
                    ->join('job_seeker', 'job_seeker.seeker_id', '=', 'seekers.id')
                    ->select('users.*', 'seekers.phone as phone', 'seekers.address as address')
                    ->where('job_seeker.job_id', '=', $id)
                    ->get();

        

        // dd($id);
        // $job = Job::with('seekers')->where('id',$id)->get();
        // foreach ($job as $value) {
        //     $data = $value->seekers;
        //     foreach ($data as $key ) {
        //        $seekers=$key;
        //        echo $key->user->name;
        //        // dd($seekers);
        //     }
        // }
        // dd('h');
        return view('backend.jobs.search_seekers',compact('users'));
    }

}
