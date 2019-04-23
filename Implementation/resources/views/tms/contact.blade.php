<!DOCTYPE html>
<html lang="">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="{{ url('css/app.css') }}" type="text/css">
</head>
<body id="top">
  <div class="modal fade col-md-12" id="modalHelp">
  <div class="modal-dialog modal-dialog-center modal-lg col-md-10">
    <div class="modal-content">
      <div class="modal-header">
         &nbsp &nbsp
        <h2 class="text-center" id="">TMS</h2>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="height: 700px;">
        <embed src="{{ url('userManual.pdf') }}" type="application/pdf" width="100%" height="100%" />     
    </div>
    </div>
  </div>
</div>
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
              <li><a href="{!! url('tms/package') !!}">Packages</a></li>
              <li class="active"><a href="{!! url('tms/contact') !!}">Contact</a></li>
               &nbsp &nbsp &nbsp &nbsp  
              <li class="">
       <a title="Help" class="fa fa-info-circle" href="" data-target="#modalHelp" data-toggle="modal"> HELP
       <span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span> </a>
            </li>                                
        </ul>
      </nav>     
    </header>
  </div>  
  <section id="breadcrumb" class="hoc clear"> 
    <h6 class="heading">Help to grow us more</h6>  
  </section>
</div>
<div class="wrapper row3">
  <main class="hoc container clear">    
    <div class="content three_quarter">     
      <h1>Write A Comment</h1>
        <form method="post" action=" {{url('tms/contacts')}}">
        @csrf
        {{method_field('put')}}
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" class="form-control" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Email <span>*</span></label>
            <input type="email" name="email" class="form-control"  size="22" required>
          </div>
          <div class="one_third">
            <label for="address">Address</label>
            <input type="address" name="address" class="form-control" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" class="form-control" cols="25" rows="10"></textarea>
          </div>          
            <input type="submit" name="submit" value="Submit Form" class="btn btn-danger" style="color:black;">
            &nbsp;         
        </form>
      </div>
    <div class="clear"></div>
  </main>
</div>
  <footer id="footer" class="hoc clear bg-dark col-md-12 text-light" style="height: 80%;"> 
 <div style="color: white;" class="col-md-12" >
    <div class="one_third first" style="float: left;">
      <h6 class="heading">TMS</h6>
      <p>About tour managemet system</p>
      <br>
      <h6 class="heading">MAP</h6>
      <section class="map1 cid-rmVwU5SlDf" id="map1-k"  >
    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7064.146916369478!2d85.30789372205474!3d27.71501812911808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcb77fd4bd%3A0x58099b1deffed8d4!2sThamel%2C+Kathmandu+44600!5e0!3m2!1sen!2snp!4v1554611512488!5m2!1sen!2snp" allowfullscreen=""></iframe></div>
</section>   
    </div>
    <div class="one_third" style="float: left;">
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
 <div class="one_third" style="float: left;">
  <h6 class="heading">News</h6>
 <article><a href="#"><img class="btmspace-15" src="../images/demo/320x140.png" alt=""></a>
    <h6 class="nospace font-x1"><a href="#">Headline</a></h6>
    <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
   <p class="nospace">Todays headline</p>
    </article></div>
</div>
</footer>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src=" {{ url('assets/web/assets/jquery/jquery.min.js') }}"></script>
 <script src=" {{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>