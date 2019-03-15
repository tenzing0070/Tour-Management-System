<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pic; 
use DB;
class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //admin pic add
    public function index()
    {
        $picture = DB::table('picture')->get()->toArray();
      return view('tms.pictureAdmin', compact('picture')); 
    }
     public function picture()
    {
        return view('tms.pictureAdmin');
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tms/pictureAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       

        $pictureAdmin = new Pic();

        $pictureInfo = $request->file('image');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "picture/image/";

        $pictureInfo->move($folder,$picName);

        $picUrl = $folder.$picName;

            //already exist validation

            if(Pic::where('picture', '=', $picUrl)->exists()) 
        {
            return redirect('/tms/pictureAdmin')->with('itemNameExists','Same image file name found. Please enter again ');

        }
            else
            {
                //
            $pictureAdmin->pname=$request->pname;
           
           $pictureAdmin->picture=$picUrl;
        
        
        $pictureAdmin->save();
        return redirect()->to('tms/pictureAdmin')->with('success','Data Added');
            }

         
    }

    /**
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $picture = DB::table('picture')->get()->toArray();
      return view('tms.gallery', compact('picture')); 
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
         $picture = Pic::find($id);
         $picture->delete();
         return redirect()->to('tms/pictureAdmin')->with('success','Data Delete');
    }
}
