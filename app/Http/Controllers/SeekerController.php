<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Seeker;
use App\Job;
use Hash;
use Auth;


class SeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // login user id
        $id = Auth::user()->id; 
        // seeker data of login user id
        $seeker = Seeker::where('user_id',$id)->first();

        $jobs= $seeker->jobs;
        // dd($test);
        

        
        

        return view('frontend.seekerindex',compact('seeker','jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.register');
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
            "name" => 'required | min:5 | max:191',
            "email" => 'required',
            "phone" => 'required | min:5',
            "address" => 'required | min:5',
            "gender" => 'required',
            "photo" => 'required | mimes:jpeg,jpg,png',
            "cv" => 'required | mimes:pdf'
                
        ]);
        // dd($request);

        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();



        $user->assignRole('seeker');

        // Upload if exist // No 3 (if file include)
        if ($request->hasfile('photo')) {
            $photo = $request->file('photo');
            $source_dir = public_path().'/storage/seeker/photo';
            $name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move($source_dir,$name);
            $path_photo = '/storage/seeker/photo/'.$name;
        }

        if ($request->hasfile('cv')) {
            $cv = $request->file('cv');
            $source_dir = public_path().'/storage/seeker/cv';
            $name = time().'.'.$cv->getClientOriginalExtension();
            $cv->move($source_dir,$name);
            $path_cv = '/storage/seeker/cv/'.$name;
        }


        
        // store  data // No 4
        $seeker = new Seeker;
        $seeker->user_id = $user->id;
        $seeker->address = request('address');
        $seeker->phone = request('phone');
        $seeker->gender = request('gender');
        $seeker->photo = $path_photo;
        $seeker->cv = $path_cv;




        $seeker->save();

        // dd($seeker);
        // Return redirect // No 5

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $seeker = Seeker::where('user_id',Auth::user()->id)->first();

        return view('frontend.seekeredit',compact('seeker'));
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

        $user = Auth::user();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();
        


        $user->assignRole('seeker');

        // Upload if exist // No 3 (if file include)
        if ($request->hasfile('newphoto')) {
            $photo = $request->file('newphoto');
            $source_dir = public_path().'/storage/seeker/photo';
            $name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move($source_dir,$name);
            $path_photo = '/storage/seeker/photo/'.$name;
            $path_old = request('oldphoto');
            unlink(public_path().$path_old);
        }else{

            $path_photo = request('oldphoto');
        }

        if ($request->hasfile('newcv')) {
            $cv = $request->file('newcv');
            $source_dir = public_path().'/storage/seeker/cv';
            $name = time().'.'.$cv->getClientOriginalExtension();
            $cv->move($source_dir,$name);
            $path_cv = '/storage/seeker/cv/'.$name;
            $path_old = request('oldcv');
            unlink(public_path().$path_old);
        }else{
            $path_cv = request('oldcv');
        }

        
        // store  data // No 4
        $seeker = Seeker::find($id);
        $seeker->user_id = $user->id;
        $seeker->address = request('address');
        $seeker->phone = request('phone');
        $seeker->gender = request('gender');
        $seeker->photo = $path_photo;
        $seeker->cv = $path_cv;




        $seeker->save();


        // Return redirect // No 5

        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function password_edit($value='')
    {      
        $id = Auth::user()->id;
        // dd($id);
        $user = User::where('id',$id)->first();
        // dd($user);
        return view('frontend.changepassword',compact('user'));
    }

    public function password_update($id)
    {
        $request_oldpassword = request('oldpassword');
        $oldpassword = Auth::user()->password;
        // dd($oldpassword);

        if (Hash::check($request_oldpassword, $oldpassword)) 
        {
            // var_dump('password Matched');

            $new_password = request('password');
            $confirm_password = request('password_confirmation');

            if ($new_password == $confirm_password) 
            {
                $user = Auth::user();
                
                $user->password = Hash::make(request('password'));
                $user->save();
                return redirect()->route('index');
            }
            else
            {
                return redirect()->back()->with('comfirm_message','Password do not match.');
            }

            
        }
        else
        {
            return redirect()->back()->with('message','Your password is incorrect.');
        }


    }
}
