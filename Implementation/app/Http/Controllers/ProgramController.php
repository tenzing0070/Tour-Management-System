<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //fetch data from program table
      $programs = DB::table('programs')->get()->toArray();
      return view('tms.packageData', compact('programs')); 
    }
   
      public function program()
    {
        return view('tms.program');
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // will load create.balde.php view file
                return view('tms/program');

        
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
           'program_name' => 'required',
           'detail'       =>  'required',
           'image'        =>  'required', 
        ]);
        $program = new Program();

           $program->program_name=$request->program_name;
           $program->detail=$request->detail;
           $program->image=$request->image;
            // 'package_name' => $request->get('package_name'),
            // 'detail' => $request->get('detail')
            // 'image' => $request->get('image')

        
        $program->save();
        return redirect()->to('tms/packageData')->with('success','Data Added');
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
          $program= Program::find($id);
        return view('tms.packageEdit', compact('program','id'));

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
        $this->validate($request,[
             'program_name' => 'required',
           'detail'       =>  'required',
           'image'        =>  'required', 

        ]);

        $program= Program::find($id);
        $program->program_name=$request->get('program_name');
        $program->detail=$request->get('detail');
        $program->image=$request->get('image');
        $program->save();
        return redirect()->to('tms/packageData')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //     $program = Program::find($id);
    //     $program->delete();
    //     return redirect()->to('tms/packageData')->with('success','Data Delete');
    }
}
