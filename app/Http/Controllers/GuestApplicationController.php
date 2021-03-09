<?php

namespace App\Http\Controllers;

use App\Models\guest_info;
use App\Models\job;
use Validator;
use Illuminate\Http\Request;

class GuestApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TO deplay all guest info
        $jobs = guest_info::OrderBy('id','DESC')->paginate(5);
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
        // To search the list of job
        $rules  = [
            'search'=>'required'
        ];

        $validator =validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $search = $request->input('search');
        $jobs = job::where('title','like',"%$search%")->paginate(5);
        return response()->json($jobs,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guest_application  $guest_application
     * @return \Illuminate\Http\Response
     */
    public function show(guest_application $guest_application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guest_application  $guest_application
     * @return \Illuminate\Http\Response
     */
    public function edit(guest_application $guest_application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guest_application  $guest_application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guest_application $guest_application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guest_application  $guest_application
     * @return \Illuminate\Http\Response
     */
    public function destroy(guest_application $guest_application)
    {
        //
    }
}
