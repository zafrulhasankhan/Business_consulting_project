<?php

namespace App\Http\Controllers;

use App\Models\profileComplete;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileCompleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
        //
        //dd($request->file);
        //dd($request->user()->profileComplete());
        if($request->hasfile('file')){
            $file = $request->file('file');
            $filesize = $request->file('file')->getSize();
            dd($request->file('file')->getSize());
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('presentation-contents/',$filename);
            $request->file = $filename;
            $request->extension = $extension;
            
            //dd($request->extension);
             //$this->save();
        }
        //dd($request->file());
        $request->user()->profileComplete()->create(
            [
               
                'idea' => $request->idea,
                'qualification' => $request->qualification,
                'experience' => $request->experience,
                'ambition' => $request->ambition,
                'creativity' => $request->creativity,
                'capacity_finance' => $request->capacity_finance,
                'invest_money' => $request->invest_money,
                'smallBusiness_plan' => $request->smallBusiness_plan,
                'file'=> $request->file,
                'extension' => $request->extension,
                'filesize' => $filesize,
                'aboutme' => $request->aboutme,
                'potential_revenue'=> $request->potential_revenue,
                'current_finance' => $request->current_finance,
                'needed_finance' => $request->needed_finance,
                'drive_you' => $request->drive_you,
                'staff' => $request->staff,
                'intro_owner' => $request->intro_owner,
                'require_revenue' => $request->require_revenue
            ]
        );
        return back()->with('success','Successfully Profile 100% Complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profileComplete  $profileComplete
     * @return \Illuminate\Http\Response
     */
    public function download($file)
    {
     $path = public_path('presentation-contents/').$file;
     return response()->download($path);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profileComplete  $profileComplete
     * @return \Illuminate\Http\Response
     */
    public function edit(profileComplete $profileComplete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profileComplete  $profileComplete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profileComplete $profileComplete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profileComplete  $profileComplete
     * @return \Illuminate\Http\Response
     */
    public function destroy(profileComplete $profileComplete)
    {
        //
    }
}
