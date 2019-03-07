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
        body{background: #fae3fb; font-family: sans-serif;}
        
        .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
        
        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 12px; color: #fff;}
        
        input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #red;}
        input[type="button"]:hover{ background: #a4b15c; transition: .6s;}
        
        ::placeholder{color: #fff;}
    
    </style>

    <body>
    
        <div class="form-wrap">
        
        	 <form method="POST" action="{!!url('/tms/demoBooking')!!}">
@csrf
<li class="nav-item">
                <a class="link display-5" style="color: #d2cf09"> 
User:{{ Auth::user()->name}}
          </a>

 <input type="submit" name="packagename" value="Bhaktapur package" class="btn btn-danger"> 
<input type="submit" name="stay" value="Sunshine Hotel" class="btn btn-danger">
<input type="submit" name="cost" value="5000/week/person" class="btn btn-danger">


<div class="bnr-right">
                <label class="inputLabel">From</label>
                <input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="bookdate" required="">
            </div>
<!-- <input type="text" name="bookdate" placeholder="Enter your bookdate">  -->
<div class="bnr-right">
                <label class="inputLabel">To</label>
                <input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="duration" required="">
            </div>
<!-- <input type="text" name="duration" placeholder="No of week">  -->
<input type="text" name="nop" placeholder="Enter no of people">
            
                <input type="submit" name="Register" value="Book" class="btn btn-danger">

			

				<a href="{!! url('tms/index1') !!}"><button type="submit" class="btn btn-danger"> {{ __('Cancel') }}</a>
            
            </form>
        
        </div>
    
    
    
    </body>



</html>

    

    
    
   





