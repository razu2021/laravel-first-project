<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ulcbd.org</title>
    <!-- ==========css link start here ===== -->
    <!-- ==========css link start here ===== -->
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/mdb.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/hc-offcanvas-nav.carbon.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/hc-offcanvas-nav.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/all.min.css">
    <!-- MDB icon -->
    <!-- link end -->
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/owl.theme.default.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/aos.css">
<!-- end animation css  -->
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/self.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/responsive.css">
    <!-- ==========css link end  here ===== -->
</head>
<body>
<!-- =========header area start ================ -->
<!-- HEADER TOP BAR AREA START HERE  -->
<nav class="navbar navbar-expand-lg  header-bg border border-bottom-1">
  <div class="container top-menu">
   <div class="welcome">
    <a class="navbar-brand " style="margin-left:0px; font-size:16px; color: #fff;" href="#"> Wellcome to ULC </a>
   </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbar" aria-controls="topbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="text-white mb-4">Get in tuch </span>
    </button>
    <div class="collapse navbar-collapse" id="topbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active navbar-brand" aria-current="page" href="#"></a>
        </li>
     
      </ul>
      <span class="navbar-text ">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
          <li class="nav-item border border-1 ">
            <a class= " nav-link text-white " href="contact.html"><span class="p-2"><i class="fa-solid fa-location-dot"></i></span> Office Address Bangladesh </a>
          </li>
          <li class="nav-item border border-1 ">
            <a class= " nav-link text-white"  href="#"><span class="p-2"><i class="fa-solid fa-location-dot"></i></span> Office Address UK </a>
          </li>
          <li class="nav-item border border-1 ">
            <a class= " nav-link  text-white "  href="contact.html"><span class="p-2"><i class="fa-solid fa-clock"></i></span>Our Office Time : Saturday-Thursday 09:00am - 6:00 pm    </a>
          </li>
        </ul>
      </span>
    </div>
  </div>
</nav>
<!--  HEADER TOP BAR  AREA END HERE ====  -->
<!-- HEADER SEARCH BAR AREA START HERE ====  -->
<nav class="navbar navbar-expand-lg bg-light top-bar">
    <div class="container ">
      <a href="index.html" class="navbar-brand navbar-expand-lg bg-light"><img src="{{asset('contents/website')}}/assets/image/logo.png" alt="logo" ></a>
      <div class="collapse navbar-collapse" id="topbar">
        <a class="navbar-brand me-auto " href="#"></a>
        <span class="navbar-text">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link bg-success" data-bs-toggle="modal" data-bs-target="#search" href="#"><span class="m-2"><i class="fa-solid fa-magnifying-glass"></i></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-success"  data-bs-toggle="offcanvas" data-bs-target="#contac-details" aria-controls="offcanvasRight"  aria-current="page" href="#"> <span class="m-2"><i class="fa-solid fa-headphones"></i></span>Contact Detels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-success" href="application.html"><span class="m-2"><i class="fa-solid fa-user"></i></span> Get 
                appointment</a>
            </li>
          </ul>
        </span>
      </div>
    </div>
  </nav>
<!-- MODEL search HERE ===-->
<div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-xl">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- model  search end here  -->
<!-- HEADER SEARCH BAR END HERE================= -->
<!-- OFF CANVAS AREA START HERE =============  -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="contac-details" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel"><img src="{{asset('contents/website')}}/assets/image/logo.png" alt="logo"></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body " id="ofcanvas">
      <table class="table  coll">
        <thead>
          <tr>
            <th class="text-white">Phone Number :</th>
          </tr>
          <tr>
            <td><a class="nav-link " href="tel:02-44612350"><span class="m-3"><i class="fa-solid fa-phone"></i></span>02-44612350</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="tel:+8801787204898"><span class="m-3"><i class="fa-solid fa-phone"></i></span>01918-148000</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="tel:+8801787204898"><span class="m-3"><i class="fa-solid fa-phone"></i></span>01811-477064</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="tel:+8801787204898"><span class="m-3"><i class="fa-solid fa-phone"></i></span>01320-720740</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="tel:+8801787204898"><span class="m-3"><i class="fa-brands fa-square-whatsapp"></i></span>01791-991455</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="tel:+8801787204898"><span class="m-3"><i class="fa-brands fa-square-whatsapp"></i></span>01608-422702</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="tel:+8801787204898"><span class="m-3"><i class="fa-brands fa-square-whatsapp"></i></span>01966-251389</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="tel:+8801787204898"><span class="m-3"><i class="fa-brands fa-square-whatsapp"></i></span>01320-744220</a></td>
          </tr>
          <tr>
            <th class="text-white">Contact Email :</th>
          </tr>
          <tr>
            <td><a class="nav-link" href="mailto:info@ulcbd.org"><span class="m-3"><i class="fa-solid fa-envelope"></i></span>info@ulcbd.org</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="mailto:ulcbd786@gmail.com"><span class="m-3"><i class="fa-solid fa-envelope"></i></span>ulcbd@gmail.com</a></td>
          </tr>
          <tr>
            <td><a class="nav-link" href="mailto:info@ulcbd.org"><span class="m-3"><i class="fa-solid fa-envelope"></i></span>ulcbd786@yahoo.com</a></td>
          </tr>
          <tr>
            <th class="text-white">Our Head Office  : </th>
          </tr>
          <tr>
            <td><a class="nav-link " href="contact.html"><span><i class="fa-solid fa-location-dot"></i></span> Room No. 1104 (10th Floor),Sahera Tropical Center : 218 Elephent Road (Bata Signal),Dhaka-1205 </a></td>
          </tr>
          <tr>
            <th class="text-white">Our Other's website : </th>
          </tr>
          <tr>
            <th><a class="nav-link " href="#"><span><i class="fa-solid fa-globe"></i></span> https//:www.example.com</a></th>
          </tr>

        </thead>
      </table>
    </div>
  </div>
 <!--  OFF CANVAS contact details END HERE ======= -->
 <!--====================== MAIN MENU START HRE ===================================================== -->
 <section class="main-menu-bg">
  <div class="container main-menu-2 ">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9 ">
        <div class="main-menu2">
          <ul>
            <li><a href="index.html">home</a></li>
          
            <li><a href="about.html">about  </a> </li>
            <li><a href="#">service <span class=" margin-right: 1rem  " style="margin-left: 10px ;"><i class="fa-solid fa-angle-down"></i></span> </a>
              <div class="sub-menu">
                <ul>
                  <li><a href="legal.html">Legal Service</a></li>
                  <li><a href="immigration.html">immigration</a></li>
                  <li><a href="abroad.html">study abroad</a></li>
                  <li><a href="free.html">free consultation</a></li>
                </ul>
              </div>
            </li>
            <li><a href="team.html">our team</a></li>
            <li><a href="abroad.html">study Abroad <span class=" margin-right: 1rem  " style="margin-left: 10px ;"><i class="fa-solid fa-angle-down"></i></span> </a>
              <div class="sub-menu">
                <ul>
                  <li><a href="uk.html">study in UK </a></li>
                  <li><a href="us.html">study in united-state </a></li>
                  <li><a href="australia.html">study in united-state </a></li>
                  <li><a href="canada.html">study in united-state </a></li>
                  <li><a href="japan.html">study in united-state </a></li>
                </ul>
              </div>
            </li>
            <li><a href="immigration.html">Immigration</a></li>
            <li><a href="gallery.html">Gellary</a></li>
            <li><a href="blog.html">blog <span class=" margin-right: 1rem  " style="margin-left: 10px ;"><i class="fa-solid fa-angle-down"></i></span></a>
              <div class="sub-menu">
                <ul>
                  <li><a href="privecy.html">Our privecy</a></li>
                  <li><a href="condition.html">Terms of use</a></li>
                  <li><a href="faq.html">faq</a></li>
                </ul>
              </div>
            </li>
            <li><a href="contact.html">contact <span class=" margin-right: 1rem  " style="margin-left: 10px ;"><i class="fa-solid fa-angle-down"></i></span> </a>
              <div class="sub-menu">
                <ul>
                  <li><a href="agent.html">Become an Agent</a></li>
                  <li><a href="career.html">career</a></li>
                  <li><a href="internship.html">internship</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3 ">
        <div class="main-menu2-right ">
          <ul>
            <li>
              <a  href="#"> <span class="#" style="color: #4267B2;;"><i class="fa-brands fa-facebook"></i></span></a>
            </li>
            <li>
              <a  href="#"><span class="#" style="color: #00acee;"><i class="fa-brands fa-square-twitter"></i></span></a>
            </li>
            <li>
              <a  href="#"> <span class="#" style="color: #0072b1;"><i class="fa-brands fa-linkedin"></i></span></a>
            </li>
            <li>
              <a  href="#"> <span class="#" style="color:rgb( 88, 81,216 );"><i class="fa-brands fa-instagram"></i></span></a>
            </li>
            <li>
              <a  href="#"><span class="#" style="color: #ec120b;"> <i class="fa-brands fa-youtube"></i></span></a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ==================== MAIN MENU END  HERE ==================== -->
<!-- MOBILE MENU START HERE THIS IS JEQUERY PLUGIN  -->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="mobile-menu">
        <nav id="main-nav">
          <ul class="first-nav">
            <li class="credits"><a href="index.html">Home</a></li>
            <li class="cryptocurrency">
              <a href="about.html">About</a> 
            </li>
            <li class="cryptocurrency">
              <a href="#">Services</a>
              <ul>
                <li><a href="legal.html">legal service </a></li>
                <li><a href="immigration.html">immigration  </a></li>
                <li><a href="abroad.html">study abroad  </a></li>
                <li><a href="free.html">free consultation</a></li>
              </ul>
            </li>
            <li class="credits"><a href="team.html">Our Team</a></li>
            <li class="cryptocurrency">
              <a href="#">Study Abroad</a>
              <ul>
                <li><a href="about.html">study abroad </a></li>
                <li><a href="uk.html">study in uk </a></li>
                <li><a href="australia.html">study in australia</a></li>
                <li><a href="canada.html">study in canada</a></li>
                <li><a href="japan.html">study in japan</a></li>
              </ul>
            </li>
            <li class="cryptocurrency">
              <a href="immigration.html">Immigration</a>
            </li>
            <li class="cryptocurrency">
              <a href="#">Gellary</a>
              <ul>
                <li><a href="video-gellary.html">Gellary</a></li>
                <li><a href="video-gellary.html">video</a></li>
              </ul>
            </li>
            <li class="cryptocurrency">
              <a href="#">Blog</a>
              <ul class="text-capitalize">
                <li><a href="blog.html">Blog  </a></li>
                <li><a href="privecy.html">Our privecy </a></li>
                <li><a href="condition.html">Terms of use   </a></li>
                <li><a href="faq.html">faq  </a></li>
              </ul>
            </li>
            <li class="cryptocurrency">
              <a href="#">Contact us</a>
              <ul class="text-capitalize">
                <li><a href="contact.html">Contact with Us  </a></li>
                <li><a href="agent.html">become an agent </a></li>
                <li><a href="career.html">career  </a></li>
              </ul>
            </li>
            <li class="cryptocurrency">
              <a href="#">Social Media </a>
              <ul>
                <li><a href="#"><span class="#" style="color: #4267B2;; margin-right: 10px;"><i class="fa-brands fa-facebook"></i></span> Facebook</a></li>
                <li><a  href="#"><span class="#" style="color: #00acee; margin-right: 10px;"><i class="fa-brands fa-square-twitter"></i></span> Twetter</a></li>
                <li><a  href="#"> <span class="#" style="color: #0072b1; margin-right: 10px;"><i class="fa-brands fa-linkedin"></i></span> linkedin</a></li>
                <li> <a  href="#"> <span class="#" style="color:rgb( 88, 81,216 ); margin-right: 10px;"><i class="fa-brands fa-instagram"></i></span> Instagram</a></li>
                <li> <a  href="#"><span class="#" style="color: #ec120b; margin-right: 10px;"> <i class="fa-brands fa-youtube"></i></span> Youtube</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

@yield('content')






<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="f-content">
          <h4 class="p-2 mt-2 mb-2 text-white">About  Universitas law chambers </h4>
          <p class="text-white  text-jutify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate saepe aut tempore
            ea dicta asperiores consequatur, tenetur laboriosam iusto provident at exercitationem officiis quasi assumenda.
             Maxime, dicta impedit modi, atque sint provident adipisci sunt quidem, minus numquam asperiores quis eaque alias. 
             Enim commodi minus neque nemo cum amet delectus excepturi sapiente dolorum praesentium soluta consequuntur sunt molestias quis,
              molestiae perspiciatis laboriosam repellendus officia explicabo cumque. Tempore corporis dolores modi at?</span></p>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- contant  -->
<footer class="f-bg">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3  col-xxl-3">
        <div class="footer-content">
          <h4 class="p-2 mt-2 mb-2 text-center">about us </h4>
          <img src="{{asset('contents/website')}}/assets/image/logo.png" alt="Company Logo">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nam culpa alias
             perspiciatis cumque laboriosam similique odio magnam repudiandae illo dignissimos optio quasi, 
             ab repellendus, dolorem autem vitae ipsa </p>
        </div>
        <!--  col end  -->
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-2  col-xxl-2">
        <div class="footer-content">
          <h4 class="p-2 mt-2 mb-2 text-center">services</h4>
          <nav class="navbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="legal.html">legal services</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="immigration.html">immigration service </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="abroad.html">study abroad </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">free  consultation </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">other service </a>
              </li>
            </ul>
          </nav>
        </div>
        <!--  col end  -->
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-2  col-xxl-2">
        <div class="footer-content">
          <h4 class="p-2 mt-2 mb-2 text-center">support </h4>
          <nav class="navbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="privecy.html">Privacy Policy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="privecy.html">Terms of Use</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="privecy.html">Faq </a>
              </li>
            </ul>
          </nav>
        </div>
        <!--  col end  -->
      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-2  col-xxl-2">
        <div class="footer-content">
        <h4 class="p-2 mt-2 mb-2 text-center">Quick links </h4>
        <nav class="navbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">about </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">service </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="team.html"> our team </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="immigration.html">immigration </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Gellary </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abroad.html">study abroad </a>
            </li>
            </li>

          </ul>
        </nav>
        </div>
        <!--  col end  -->

      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3  col-xxl-3">
        <div class="footer-content">
          <h4 class="p-2 mt-2 mb-2 text-center">Let's Get in tuch</h4>
          <nav class="navbar ">
           <ul class="navbar-nav  d-flex">
             <li class="nav-item">
               <a class="nav-link"  href="#">Phone :  <span class="" style="color: #4267B2;;"><i class="fa-solid fa-phone"></i></span>  01918-148000</a>
             </li>
             <li class="nav-item">
               <a class="nav-link"  href="mailto:ulcbd786@gmail.com"> Email : <span style="color: #00acee;"><i class="fa-solid fa-envelope"></i></span> ulcbd786@gmail.com</a>
             </li>
             <li class="nav-item">
               <a class="nav-link"  href="contact.html"> Location :  <span class="" style="color: #0072b1;"><i class="fa-solid fa-location-dot"></i></span> 218 Elephant Road (Bata Signal), Dhaka-1205</a>
             </li>
             <li class="nav-item">
               <a class="nav-link"  href="#">social media </a>
           </ul>
         </nav>
 
         </div>
         <div class="social-icon-footer">
           <ul>
             <li>
               <a  href=""> <span class="" style="color: #4267B2;;"><i class="fa-brands fa-facebook"></i></span></a>
             </li>
             <li>
               <a  href=""><span class="" style="color: #00acee;"><i class="fa-brands fa-square-twitter"></i></span></a>
             </li>
             <li>
               <a  href=""> <span class="" style="color: #0072b1;"><i class="fa-brands fa-linkedin"></i></span></a>
             </li>
             <li>
               <a  href=""> <span class="" style="color:rgb( 88, 81,216 );"><i class="fa-brands fa-instagram"></i></span></a>
             </li>
             <li>
               <a  href=""><span class="" style="color: #ec120b;"> <i class="fa-brands fa-youtube"></i></span></a>
             </li>
           </ul>
         </div>
         <!-- social media icon  end here  -->
        <!--  col end  -->
      </div>
      <!-- row end -->
    </div>
    <!-- container end  -->
  </div>
 
</footer>
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="copyright  ">
          <p class="text-center text-white">Copyright © 2022 ulc. All rights reserved<span>..</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER AREA END HERE ======== -->

    <!-- script area start here ===== -->
    <script src="{{asset('contents/website')}}/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/mdb.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/hc-offcanvas-nav.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/all.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/typed.min.js"></script>
    <!-- animation js  -->
    <script src="{{asset('contents/website')}}/assets/js/aos.js"></script>
    <script>AOS.init();</script>
    <!-- animation js end  -->
    <script src="{{asset('contents/website')}}/assets/js/countMe.min.js"></script>
    <script src="{{asset('contents/website')}}/assets/js/self.js"></script>
<script>
  window.onload = ()=>{
      // $(selector).countMe(delay,speed)
      $("#num1").countMe(30,50);
      $("#num2").countMe(40, 120);
      $("#num3").countMe(35, 80);
      $("#num4").countMe(10,5);
   }
  </script>
  <script type="text/javascript">
  
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  
  (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  </script>
    <script src="{{asset('contents/website')}}/assets/js/custom.js"></script>


    <!-- script area end  here ===== -->
</body>
</html>