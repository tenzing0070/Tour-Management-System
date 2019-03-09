<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;



class TmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tms.index');
    }
     public function index1()
    {
        return view('tms.index1');
    }
    public function login()
    {
        return view('tms.login');
    }
    //  public function registration()
    // {
    //     return view('tms.registration');
    // }
     public function gallery()
    {
        return view('tms.gallery');
    }
    public function contact()
    {
        return view('tms.contact');
    }
    public function package()
    {
        return view('tms.package');
    }
    public function bookpackage()
    {
        return view('tms.bookpackage');
    }
    public function register()
    {
        return view('tms.register');
    }

    public function logen()
    {
        return view('tms.logen');
    }

     public function editProfile()
    {
        return view('tms.editProfile');
    }

       public function booking()
    {
        return view('tms.demoBooking');
    }

     
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
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
        return view('/tms/editProfile');
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
      
        $usr=User::find($id);
        $usr->name=$request->name;
        $usr->address=$request->address;
        $usr->phone=$request->phone;
        $usr->nationality=$request->nationality;
        $usr->email=$request->email;
        // $usr->username=$request->username;
        // $usr->password=$request->password;

        $usr->save();
        return redirect()->to('/tms/editProfile');
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
