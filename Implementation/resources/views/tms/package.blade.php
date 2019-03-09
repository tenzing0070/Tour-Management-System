<!DOCTYPE html>

<html lang="">
<head>
<title>Packages</title>
<style>
.bhaktapur{
  height: "300";
  width:"300";
  color:"Black";
}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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

<div class="wrapper row3">
  <main class="hoc container clear"> 
   
    <div class="content"> 
     
      <div id="gallery">
        <figure>
          <header class="heading">Select Package</header>
          <ul class="nospace clear">
            <li class="one_quarter first"><a href="{!! url('tms/demoBooking') !!}"><img src="../images/demo/gallery/06.jpg" alt=""></a></li>
              <div class='bhaktapur' >
              </div>
            <li class="one_quarter"><a href="{!! url('tms/bookpackage') !!}"><img src="../images/demo/gallery/03.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="{!! url('tms/bookpackage') !!}"><img src="../images/demo/gallery/06.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="{!! url('tms/bookpackage') !!}"><img src="../images/demo/gallery/01.png" alt=""></a></li>
            <li class="one_quarter first"><a href="{!! url('tms/bookpackage') !!}"><img src="../images/demo/gallery/01.png" alt=""></a></li>
            <li class="one_quarter"><a href="{!! url('tms/bookpackage') !!}"><img src="../images/demo/gallery/06.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="{!! url('tms/bookpackage') !!}"><img src="../images/demo/gallery/05.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="{!! url('tms/bookpackage') !!}"><img src="../images/demo/gallery/04.jpg" alt=""></a></li>
          
          </ul>
          
        </figure>
      </div>
      
    </div>
  
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row3">
    
     

	 <h1>Package Details</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Package</th>
              <th>Cost</th>
              <th>Duratioin</th>
              <th>Stay</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>PIkey Hills</td>
              <td>3000/person</td>
              <td>4 days</td>
              <td>Hotel</td>
            </tr>
            <tr>
              <td>Dudhkunda</td>
              <td>50000/person</td>
              <td>7 days</td>
              <td>Camping</td>
            </tr>
            <tr>
              <td>Namche Bazar</td>
              <td>40000/person</td>
              <td>5 days</td>
              <td>Hotel, Home stay, Camping</td>
            </tr>
            <tr>
              <td>Junbesi</td>
              <td>35000/person</td>
              <td>4 days</td>
              <td>Hotel, Home stay, Camping</td>
            </tr>
          </tbody>
        </table>
      </div>
      

  <footer id="footer" class="hoc clear"> 

    <div class="one_third first">
      <h6 class="heading">TMS</h6>
      <p>About tms</p>
     
      
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