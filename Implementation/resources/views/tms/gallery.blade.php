<!DOCTYPE html>

<html lang="">
<head>
<title>Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="{{ url('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">

<style>
* {
  box-sizing: border-box;
}


  }
  .zoom {
  padding: 50px;
  transition: transform .5s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>

</head>
<body id="top">

<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');"> 

  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
   
      <div id="logo" class="fl_left">
        <h1><a href="{!! url('tms/index1') !!}">Tour Management System</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="{!! url('tms/index1') !!}">Home</a></li>
         
              <li class="active"><a href="{!! url('tms/gallery') !!}">Gallery</a></li>
              <li><a href="{!! url('tms/package') !!}">Packages</a></li>
              <li><a href="{!! url('tms/contact') !!}">Contact</a></li>
              
            </ul>
          </li>
          
        </ul>
      </nav>
      
    </header>
  </div>
  
  <section id="breadcrumb" class="hoc clear"> 
    
    <h6 class="heading">Gallery</h6>
   
  </section>

</div>

<div class="wrapper row3 col-md-12">
  <main class="hoc container clear col-md-12"> 

    <div class="content col-md-12"> 
      
      <div id="gallery"class="col-md-12">
        <figure>
          <header class="heading">Travellers moments</header>
        

              @foreach($picture as $row)

            <div class="">
                <div style="float: left; width: 30% ;">

                 <img class="img-fluid img-thumbnail zoom" style="width:80%; height: 150px;" src="/{{$row->picture}}" alt="">
                  <div style="float: left; width: 80%; ">
                    <center>
              <b>{{$row->pname}}</b>
            </center>
            </div>
                 <br><br>
<br>              </div>
</div>
            

           @endforeach
          
        </figure>
      </div>
      
    </div>
   
   
    <div class="clear"></div>
  </main>
</div>


  <footer id="footer" class="hoc clear"> 
   
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
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>