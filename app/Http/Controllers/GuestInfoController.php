<?php

namespace App\Http\Controllers;

use App\Models\guest_info;
use App\Models\job;
use Validator;
use Illuminate\Http\Request;

class GuestInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // To deplay the list of job to geust
        $jobs = job::OrderBy('id','DESC')->paginate(5);
        return response()->json($jobs,200);
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
        // To store the guest application
        $rules  = [
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'location'=>'required',
            'phone'=>'required',
            'cv'=>'required',
        ];

        $validator =validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

       $filename = 'user_images.png';
       $path = $request->file('cv')->storeAs('public/galleries',$filename);
       $photoUrl = url('/'.$filename);
       
        $guest= new guest_info();
        // job_id will be gotting from my show under JobController
        // $guest->job_id =$request->job_id;
        $guest->firstname = $request->firstname;
        $guest->lastname = $request->lastname;
        $guest->email = $request->email;
        $guest->location = $request->location;
        $guest->phone = $request->phone;
        $guest->cv =  $photoUrl ;
        $guest->save();
        return response()->json($guest, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guest_info  $guest_info
     * @return \Illuminate\Http\Response
     */
    public function show(guest_info $guest_info)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guest_info  $guest_info
     * @return \Illuminate\Http\Response
     */
    public function edit(guest_info $guest_info)
    {
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guest_info  $guest_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guest_info $guest_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guest_info  $guest_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(guest_info $guest_info)
    {
        //
    }
}
