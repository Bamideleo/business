<?php

namespace App\Http\Controllers;

use App\Models\job;
use Validator;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Business to see job list
        
      $jobs = job::OrderBy('id','DESC')->get();
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
        // To create the job list

        $rules  = [
            'title'=>'required',
            'company'=>'required',
            'company_logo'=>'required',
            'location'=>'required',
            'salary'=>'required',
            'category'=>'required',
            'description'=>'required',
            'benefit'=>'required',
            'job_type'=>'required',
            'conditions'=>'required',
        ];

        $validator =validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $filename = 'user_images.png';
        $path = $request->file('company_logo')->storeAs('public/galleries',$filename);
        $photoUrl = url('/'.$filename);

        $job = new job;
        $job->title = $request->title;
        $job->company = $request->company;
        $job->company_logo= $photoUrl;
        $job->location = $request->location;
        $job->salary = $request->salary;
        $job->category = $request->category;
        $job->description = $request->description;
        $job->benefit = $request->benefit;
        $job->job_type = $request->job_type;
        $job->conditions = $request->conditions;
       
        $job->save();
        return response()->json($job, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        // to display the job view by the guest

        $joblist = job::findOrFail($job->id);
        return response()->json($joblist,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job $job)
    {
        // To update the job list

        $joblist = job::findOrFail($job->id);
        $joblist->update($request->all());
        return response()->json($joblist,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(job $job)
    {
        // To delete the job list
         
        $joblist = job::findOrFail($job->id);
        $joblist->delete();
        if($joblist){
            return response()->json(['message'=>'Delete Successfully'],204);
        }
    }
}
