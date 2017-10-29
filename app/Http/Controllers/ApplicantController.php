<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Applicant;
use Session;
use Redirect;
use Sentinel;

class ApplicantController extends Controller
{
    public function __construct() 
    {
        $this->middleware('sentinel');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $test = Sentinel::getUser();
        $userId = $test->id;
        if(Applicant::where('user_id','=', $userId)->get()->first() != null){
            $applicants = Applicant::where('user_id','=', $userId)->get()->first();
            return view('client.profile')->with('applicants', $applicants);
        }
        return view('client.join');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'cv'=>'max:10000|mimes:pdf'
         ]);
           
        $new_applicant = new Applicant;
        $new_applicant-> user_id = $request->id;
        $new_applicant-> name = $request->name;
        $new_applicant-> email = $request->email;
        $new_applicant-> contact = $request->contact;
        $new_applicant-> address = $request->address;


        $destinationPath = 'uploads';
        $generateName = md5(uniqid(mt_rand(), true).microtime(true));
        
        $file = $request->file('cv'); 
        $fileName = $destinationPath . '_' .  $generateName . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath,$fileName); 
        $new_applicant-> file = $fileName;
            $new_applicant-> status = "unread";
            $new_applicant->save();
        
                
        Session::flash("notice", "Success, Thanks you ");
        return Redirect::to('/profile'); 
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
        //
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
        //
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
}
