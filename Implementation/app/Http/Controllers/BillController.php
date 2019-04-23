<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=DB::table('demos')->get()->last()->id;
         $demos = DB::table('demos')
          ->join('programs','programs.id','=','demos.PackId')
          ->select('demos.*','programs.program_name','programs.price','programs.hotel','programs.detail')
         ->where('demos.id','=',$id)
         ->get()->toArray();
      return view('tms.receipt', compact('demos')); 
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
         $demo=new Demo();
    
    $demo->PackId=$id;
     $demo->userId=$request->userid;
     $demo->bookdate=(Carbon\Carbon::now('Asia/Kathmandu')->toDateTimeString('Y-m-d H:i'));
    $demo->from_date=$request->from_date;
    $demo->to_date=$request->to_date;
    $demo->nop=$request->nop;
    $demo->program_name=$request->program_name;
    $demo->price=$request->price;
    $demo->hotel=$request->hotel;
    
    $demo->save();
    return redirect()->to('tms/receipt')->with('Success, Data Added');
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
