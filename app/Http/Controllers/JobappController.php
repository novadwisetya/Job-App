<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Applicant;
use Session;
use Redirect;
use Sentinel;

class JobappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() 
    {
        $this->middleware('sentinel');
    }

    public function profile()
    {
        $test = Sentinel::getUser();        
        $userId = $test->id;
        if( Applicant::where('user_id','=', $userId)->get()->first() != null){
        $applicants = Applicant::where('user_id','=', $userId)->get()->first();
        return view('client.profile')->with('applicants', $applicants);
        }else
        {
        return view('client.join');
        }
    }

    public function index()
    {
        if(Sentinel::getUser()->inRole('admin')){
            $applicants = Applicant::all();   
            return view('shared.content')->with('applicants', $applicants);
        }
        return view('access.forbidden');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $applicant = Applicant::find($id);
        $status = $applicant->status;
        if($status == "unread"){
        $applicant->status = "Read";
        $applicant->save();
        }
        return view('administrator.open')->with('applicant', $applicant);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $applicant = Applicant::find($id);
        $status = $applicant->status;
        if($status == "unread" | $status == "Read"){
        $applicant->status = $request->status;
        $applicant->save();
        }
        return Redirect::to('/admin'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Applicant::destroy($id);
        return Redirect::to('/admin'); 
    }

}
