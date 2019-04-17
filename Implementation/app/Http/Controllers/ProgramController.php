<?php

namespace App\Http\Controllers;
use App\Program;
use Illuminate\Http\Request;

use DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//admin add package
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
     **/
    public function store(Request $request)
    {
       

        $program = new Program();

        $pictureInfo = $request->file('image');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "uploads/gallery/";

        $pictureInfo->move($folder,$picName);

        $picUrl = $folder.$picName;

            //already exist validation

            if(Program::where('image', '=', $picUrl)->exists()) 
        {
            return redirect('/tms/program')->with('itemNameExists','Same image file name found. Please enter again ');

        }
            else
            {
            $program->program_name=$request->program_name;
           $program->detail=$request->detail;
           $program->image=$picUrl;
           $program->price=$request->price;
           $program->hotel=$request->hotel;
        
        $program->save();
        return redirect()->to('tms/packageData')->with('success','Data Added');
            }

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view ('tms/packageEdit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
         $program = DB::table('programs')->where('id',$id)->get()->toArray();
        return view('tms.packageEdit',compact('program'));

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
        

        $program = new Program();

        $pictureInfo = $request->file('image');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "uploads/gallery/";
        $picUrl = $folder.$picName;

        if ($picUrl->exists())
        {
            $pic=$picName;
        }

        else
        {
            $pictureInfo->move($folder,$picName);
            $pic=$picName;
        }

        $program= Program::find($id);
        $program->program_name=$request->program_name;
        $program->detail=$request->detail;
        $program->image=$pic;
        $program->price=$request->price;
        $program->hotel=$request->hotel;
        $program->save();
        return redirect()->to('/tms/packageData')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $program = Program::find($id);
         $program->delete();
         return redirect()->to('tms/packageData')->with('success','Data Delete');
    }

   
}
