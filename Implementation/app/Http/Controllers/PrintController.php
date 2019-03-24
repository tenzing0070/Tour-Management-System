<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class PrintController extends Controller
{
      public function index()
      {
            $users = User::all();
            return view('tms/print/printUser')->with('users', $users);;
      }
      public function prnpriview()
      {
            $users = User::all();
            return view('tms/print/users')->with('users', $users);;
      }
}
