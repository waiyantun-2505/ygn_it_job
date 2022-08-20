<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
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
    
    public function index()
    {   
        $companies = Company::all();
        return view('backend.companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.companies.create');
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
            "address" => 'required | min:10',

            "num_employee" => 'required',
            "visi_misi" => 'required',
            "what_do" => 'required',
            "culture" => 'required',
            "logo" => 'required | mimes:jpeg,jpg,png',
            "banner" => 'required | mimes:jpeg,jpg,png'
        ]);


        // Upload if exist // No 3 (if file include)
        if ($request->hasfile('logo')) {
            $logo = $request->file('logo');
            $source_dir = public_path().'/storage/company/logo/';
            $name = time().'.'.$logo->getClientOriginalExtension();
            $logo->move($source_dir,$name);
            $path_one = '/storage/company/logo/'.$name;
        }

        if ($request->hasfile('banner')) {
            $banner = $request->file('banner');
            $source_dir = public_path().'/storage/company/banner/';
            $name = time().'.'.$banner->getClientOriginalExtension();
            $banner->move($source_dir,$name);
            $path_two = '/storage/company/banner/'.$name;
        }


        // store  data // No 4
        $company = new Company;
        $company->name = request('name');
        $company->address = request('address');
        $company->facebook = request('facebook');
        $company->instagram = request('instagram');
        $company->no_of_employee = request('num_employee');
        $company->visi_misi = request('visi_misi');
        $company->what_do = request('what_do');
        $company->culture = request('culture');
        $company->logo = $path_one;
        $company->banner = $path_two;

        

        $company->save();


        // Return redirect // No 5

        return redirect()->route('companies.index');
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
        $company = Company::find($id);
        return view('backend.companies.edit',compact('company'));
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
            "name" => 'required | min:5 | max:191',
            "address" => 'required | min:10',
            "num_employee" => 'required',
            "visi_misi" => 'required',
            "what_do" => 'required',
            "culture" => 'required',
            
        ]);


        // Upload if exist // No 3 (if file include)
        if ($request->hasfile('logo')) {
            $logo = $request->file('logo');
            $source_dir = public_path().'/storage/company/logo/';
            $name = time().'.'.$logo->getClientOriginalExtension();
            $logo->move($source_dir,$name);
            $path_one = '/storage/company/logo/'.$name;
            $old_logo = request('oldlogo');
            unlink(public_path().$old_logo);
            

        }else{
            $path_one = request('oldlogo');
        }



        if ($request->hasfile('banner')) {
            $banner = $request->file('banner');
            $source_dir = public_path().'/storage/company/banner/';
            $name = time().'.'.$banner->getClientOriginalExtension();
            $banner->move($source_dir,$name);
            $path_two = '/storage/company/banner/'.$name;
            $old_banner = request('oldbanner');
            unlink(public_path().$old_banner);
            
        }else{
            $path_two = request('oldbanner');
        }


        // store  data // No 4
        $company = Company::find($id);
        $company->name = request('name');
        $company->address = request('address');
        $company->no_of_employee = request('num_employee');
        $company->facebook = request('facebook');
        $company->instagram = request('instagram');
        $company->visi_misi = request('visi_misi');
        $company->what_do = request('what_do');
        $company->culture = request('culture');
        $company->logo = $path_one;
        $company->banner = $path_two;

        

        $company->save();


        // Return redirect // No 5

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $company = Company::find($id);
        $logo = $company->logo;
        $banner = $company->banner;
        unlink(public_path().$logo);
        unlink(public_path().$banner);

        $company->delete();

        return redirect()->route('companies.index');
    }
}
