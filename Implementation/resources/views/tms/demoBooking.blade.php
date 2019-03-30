<!DOCTYPE html>

<html lang="">
<head>
<title>Book Package</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>



    

    
    <style>
    div.relative {
  position: relative;
  left: 850px;
  top:-550px;
  border: auto solid black;
}
 div.relative1 {
  position: relative;
   left: 550px;
  top:-500px;

}
  .col-75 {
  float: left;
  width: 500px;
  margin-top: 6px;
}
input[type1=text], select, textarea {
  width: 100%;
  padding: 12px;
  box-sizing: 40px;
  border: 1px solid #ccc;
  border-radius: 9px;
  resize: vertical;
  font-size: 16px;
}
        *{margin: 0; padding: 0;}
        body{background: #693805; font-family: sans-serif;}
        
        .form-wrap{ background: #693805; padding: 40px 20px; box-sizing: border-box; width: 300px;
         height: 100px;
         padding: 30px;  
         border: 10px;}
        h1{text-align: left; color: #fff; font-weight: normal; margin-bottom: 20px;}
        
        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 10px; box-sizing: border-box; margin-bottom: 20px; font-size: 18px; color: #fff;}
        
        input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #red;}
        input[type="button"]:hover{ background: #e81414; transition: .6s;}
        
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

    <label class="inputLabel"><b>Package Name</b></label><br><br>
    <input type="text" name="PackageName" value="{{$program->program_name}}" class="btn btn-danger" disabled> 


     <div class="col-75">
    <label class="inputLabel"><b>Details</b></label><br><br>
    <input type1="text" name="detail" value="{{$program->detail}}" class="btn btn-danger" style="height:200px" disabled>
</div>

    <label class="inputLabel"><b>Cost (Rs)</b></label><br><br>
    <input type="text" name="cost" value="{{$program->price}}" class="btn btn-danger" disabled>
    <label class="inputLabel"><b>Hotel</b></label><br><br>
    <input type="text" name="hotel" value="{{$program->hotel}}" class="btn btn-danger"  disabled>
    <div class="relative">
    <img style="width:200%; height: 300px;" src="/{{$program->image}}" alt="">
</div>
<div class="relative1">
<div class="bnr-right">
                <label class="inputLabel"><b>From</b></label><br><br>
                <input class="date" id="datepicker" type="date" placeholder="dd-mm-yyyy"  name="from_date" required="">
            </div>

<div class="bnr-right">
                <label class="inputLabel"><b>To</b></label><br><br>
                <input class="date" id="datepicker1" type="date" placeholder="dd-mm-yyyy" name="to_date" required="">
            </div>
  <label class="inputLabel"><b>Number of People</b></label><br><br>
<input type="number" id="myNumber" name="nop" placeholder="Enter no of people">



                  <input type="hidden" name="userid" value="{{Auth::user()->id}}" class="btn btn-danger">
 
              <a href="{!! url('tms/receipt') !!}" >  <input type="submit" name="book" value="Book" class="btn btn-danger"></a>

                 <a href="{!! url('tms/package') !!}" > <input type="submit" name="book" value="Cancel" class="btn btn-danger"> 
                                         {{ __('Cancel') }}</a>

           
          </div>

               
            </form>
            
                 


               
        @endforeach
        
        </div>
    
    
    
    </body>



</html>

    

    
    
   





