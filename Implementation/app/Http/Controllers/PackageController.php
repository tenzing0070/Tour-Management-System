<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use App\Demo;
use DB;
use Carbon;


class PackageController extends Controller
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
    public function create(Request $request, $id)
    {
         $demo=new Demo();
    // $demo->name=$request->name;
    // $demo->education=$request->education;
    // $demo->age=$request->age;

    $demo->PackId=$id;
     $demo->userId=$request->userid;
     $demo->bookdate=(Carbon\Carbon::now('Asia/Kathmandu')->toDateTimeString('Y-m-d H:i'));
    $demo->from_date=$request->from_date;
    $demo->to_date=$request->to_date;
    $demo->nop=$request->nop;
    $demo->save();
    return redirect()->to('tms/package')->with('Success, Data Added');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
         $programs = DB::table('programs')->get()->toArray();
        return view('tms.package', compact('programs'));

    }

public function show2($id)
    {
        
         $programs = DB::table('programs')->where('id',$id)->get()->toArray();
        return view('tms.demoBooking', compact('programs'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
