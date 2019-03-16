<!DOCTYPE html>

<html lang="">
<head>
<title>Book Package</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>



    

    
    <style>
    
        *{margin: 0; padding: 0;}
        body{background: none; font-family: sans-serif;}
        
        .form-wrap{ width: 500px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
        
        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 10px; box-sizing: border-box; margin-bottom: 20px; font-size: 12px; color: #fff;}
        
        input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #red;}
        input[type="button"]:hover{ background: #a4b15c; transition: .6s;}
        
        ::placeholder{color: #fff;}
    
    </style>

    <body>
    
        <div class="form-wrap">
        

<li class="nav-item">
                <a class="link display-5" style="color: #d2cf09"> 
User:{{ Auth::user()->name}} <br><br>
          </a>
@foreach($programs as $program)

<form method="POST" action="{!!url('/tms/demoBooking',$program->id)!!}">
             
@csrf
    <label class="inputLabel">Package Name</label>
    <input type="text" name="PackageName" value="{{$program->program_name}}" class="btn btn-danger"> 
    <label class="inputLabel">Details</label>
    <input type="text" name="detail" value="{{$program->detail}}" class="btn btn-danger">
    <label class="inputLabel">Cost</label>
    <input type="text" name="cost" value="{{$program->price}}" class="btn btn-danger">
    <label class="inputLabel">Hotel</label>
    <input type="text" name="hotel" value="{{$program->hotel}}" class="btn btn-danger">




<div class="bnr-right">
                <label class="inputLabel">From</label>
                <input class="date" id="datepicker" type="date" placeholder="dd-mm-yyyy"  name="from_date" required="">
            </div>

<div class="bnr-right">
                <label class="inputLabel">To</label>
                <input class="date" id="datepicker1" type="date" placeholder="dd-mm-yyyy" name="to_date" required="">
            </div>
  <label class="inputLabel">Number of People</label>
<input type="text" name="nop" placeholder="Enter no of people">


                  <input type="hidden" name="userid" value="{{Auth::user()->id}}" class="btn btn-danger">
 
                <input type="submit" name="book" value="Book" class="btn btn-danger">

                 <a href="{!! url('tms/package') !!}" > <input type="submit" name="book" value="Cancel" class="btn btn-danger"> {{ __('Cancel') }}</a>

                 


            </form>

               
        @endforeach
        
        </div>
    
    
    
    </body>



</html>

    

    
    
   





