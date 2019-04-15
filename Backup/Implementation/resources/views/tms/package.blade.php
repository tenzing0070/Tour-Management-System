


<!DOCTYPE html>

<html lang="">
<head>

  <style>
 

  div.a {
  white-space: nowrap; 
  width: 200px; 
  overflow: hidden;
  text-overflow: ellipsis; 
  border: 1px solid #000000;
}
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
  cursor: pointer;
}


.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

</style>
<title>Packages</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" style="background-color: white;">

<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');"> 
 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
     
      <div id="logo" class="fl_left">
        <h1><a href="{!! url('tms/index1') !!}">Tour Management System</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="{!! url('tms/index1') !!}">Home</a></li>
         
            
              <li><a href="{!! url('tms/gallery') !!}">Gallery</a></li>
              <li class="active"><a href="{!! url('tms/package') !!}">Packages</a></li>
              <li><a href="{!! url('tms/contact') !!}">Contact</a></li>
              
           
          </li>
          
        </ul>
      </nav>
   
    </header>
  </div>

  <section id="breadcrumb" class="hoc clear"> 

    <h6 class="heading">Packages</h6>
    
  </section>

</div>

<div class="wrapper row3 col-md-12 ">


<form action="/tms/package" method="POST" role="search">
     {{ csrf_field() }}
       <div class="input-group">

         <input type="text" class="form-control" name="search"
          placeholder="Search by Name" style="width:20%; height:40px;"> 
          <input type="submit" name="submit" value="Search" class="btn btn-danger" style="color:black; width:20%;">
          
        </div>
      </form>

</div>
<div class="wrapper row3 col-md-12">
  <main class="hoc container clear"> 
   
    <div class="content col-md-12"> 
     <div id="gallery" class="col-md-12>
        <figure>
         

     <div class="container">
      @if(isset($details))
        @foreach($details as $user)
         <form action="{!! url('tms/demoBooking',$user->id) !!}" >
                <div style="float: left; width: 30%;">  
              <div>
                 <img style="width:90%; height: 170px;" src="/{{$user->image}}" alt="">
                <label class="inputLabel">Package Name</label>
              <b class="align-center">{{$user->program_name}}</b> <br><br>
              <label class="inputLabel">About the destination</label>
              <div class="a">{{$user->detail}}</div> <br>
              <label class="inputLabel">Price/Person (Rs)</label>
              <b class="align-center">{{$user->price}}</b><br><br>
              <label class="inputLabel">Place of Stay</label>
              <b class="align-center">{{$user->hotel}}</b><br>
    
            </div>
                <input type="submit" name="submit" value="Book Now" class="button button3" style="color:black; width:60%;">

                <br><br><br><br>
              </div>
            </form>

          
          @endforeach
     

@elseif(isset($message))
<p>{{$message}}</p>
@endif
</div>


      
    </div>
  
  
    <div class="clear"></div>

  </main>
 

     

	 

  <footer id="footer" class="hoc clear" style="padding: 45px;background-color: lightblue; max-width: 100%;margin: 0px; font-color:white;"> 

    <div class="one_third first">
      <h6 class="heading">TMS</h6>

       <p>About tour managemet system</p>
        <br>
      <h6 class="heading">MAP</h6>
      <section class="map1 cid-rmVwU5SlDf" id="map1-k"  >

     

    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7064.146916369478!2d85.30789372205474!3d27.71501812911808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcb77fd4bd%3A0x58099b1deffed8d4!2sThamel%2C+Kathmandu+44600!5e0!3m2!1sen!2snp!4v1554611512488!5m2!1sen!2snp" allowfullscreen=""></iframe></div>
</section>
     
      
    </div>
   <div class="one_third">
      <h6 class="heading">Address</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Thamel &amp; 121212112, Amrit Margh, 0072
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +023 4343 23232 23</li>
        <li><i class="fa fa-fax"></i> +03232 232323 2323232</li>
        <li><i class="fa fa-envelope-o"></i> tmsnepal@gmail.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        

      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">News</h6>
      <article><a href="#"><img class="btmspace-15" src="../images/demo/320x140.png" alt=""></a>
        <h6 class="nospace font-x1"><a href="#">Headline</a></h6>
        <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
        <p class="nospace">Todays headline</p>
      </article>
    </div>
    
  </footer>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>

