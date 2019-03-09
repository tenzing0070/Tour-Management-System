<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;

class DemoController extends Controller
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
        return view('tms/demoBooking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
                // 'name'=>'required',
                // 'education'=>'required',
                // 'age'=>'required',

                // 'packagename'=>'required',
                // 'stay'=>'required',
                // 'cost'=>'required',
            
                'bookdate'=>'required',
                'duration'=>'required',
                'nop'=>'required',
                
                ]);

    $demo=new Demo();
    // $demo->name=$request->name;
    // $demo->education=$request->education;
    // $demo->age=$request->age;

    // $demo->packagename=$request->packagename;
    // $demo->stay=$request->stay;
    // $demo->cost=$request->cost;

    $demo->bookdate=$request->bookdate;
    $demo->duration=$request->duration;
    $demo->nop=$request->nop;
    $demo->save();
    return redirect()->to('tms/demoBooking')->with('Success, Data Added');
                                
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
