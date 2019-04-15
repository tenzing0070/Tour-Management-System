<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Barryvdh\DomPDF\Facade as PDF;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $demos = DB::table('demos')->get()->toArray();
      return view('tms.dataDisplay', compact('demos')); 
    }

    function get_booked_data()
    {
        $demos= DB::table('demos')
                        ->limit(10)
                        ->get();
        return $demos;
    }

    function pdf()
    {
        $pdf = \App::make('dpmpdf.wrapper');
        $pdf->loadHTML($this->convert_demos_to_html());
        $pdf->stream();
    }

    function convert_demos_to_html()
    {
        $demos=$this->get_booked_data();
        $output = '
        <h3 align="center">Package Booked Customer Information</h3>
        <table width="100%" style="border-collapse:collapse; border: 0px;">
        <tr>
            <th style="border:1px solid;
            padding:12px;" width="20%">userId</th>
            <th style="border:1px solid;
            padding:12px;" 
            width="20%">PackId</th>
            <th style="border:1px solid;
            padding:12px;" width="20%">bookdate</th>
            <th style="border:1px solid;
            padding:12px;" width="20%">from_date</th>
            <th style="border:1px solid;
            padding:12px;" width="20%">to_date</th>
            <th style="border:1px solid;
            padding:12px;" width="20%">nop</th>
        </tr>

        ';

        foreach($demos as $row)
        {
            $output .='
        <tr>
            <td style="border:1px solid;
            padding:12px; ">' .$row->userId.'</td>
            <td style="border:1px solid;
            padding:12px; ">' .$row->PackId.'</td>
            <td style="border:1px solid;
            padding:12px; ">' .$row->bookdate.'</td>
            <td style="border:1px solid;
            padding:12px; ">' .$row->from_date.'</td>
            <td style="border:1px solid;
            padding:12px; ">' .$row->to_date.'</td>
            <td style="border:1px solid;
                padding:12px; ">' .$row->nop.'</td>
        </tr>

            ';
            
        }
        
        
        $output .= '</table>';
        return $output; 
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
