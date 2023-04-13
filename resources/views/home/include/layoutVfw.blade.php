@php 
$current = url()->current();
$val =  explode('_',$current);
$val1 = $val[1]??"";


@endphp 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<meta name="keywords" content="HTML5 Template" />-->
<!--<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />-->
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Triple Crown Bingo|VFW 290</title>

<!-- Favicon -->
<link rel="shortcut icon" href="home/revolution/assets/slider-01/url_icon.png" />

<!-- font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="home/css/plugins-css.css" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="home/revolution/css/settings.css" media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="home/css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="home/css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="home/css/style.css" />

<!-- juice -->
<link rel="stylesheet" type="text/css" href="home/demo-one-page/juice/css/juice.css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="home/css/responsive.css" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="home/css/skins/skin-malachite.css" data-style="styles"/>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6426932931ebfa0fe7f5b06f/1gsratmlr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<style>
    .testimonial-info {
  height: 190px; /* set the height of the div to make it scrollable */
  /*overflow: auto;  */
  
}
.dPBwJJ {
    background-color:#fff !important;
}
.gGgqlY {
    background-color: #fff !important;
    /*border-radius: 8px;*/
}
.iFEZzR {
    display: none !important;
}
.timeP{
    color:#51e887;
}
.eapps-instagram-feed-title-container{
    display:none !important;
}
.logoall{
    width:150px;
    height:100px;
}
.linksall{
    color:red;
    font-size:20px;
}
.termshead{
    font-weight: bolder;
     font-size:12px;
         padding-top: 10px;
}
.terms{
   
     font-size: 10px !important;
}
</style>
<style>

/*mobile menu*/

    /* Style the header */
    .headerMenuMobile{
        padding:10px;
        background: 
    /* top, transparent red */ 
    linear-gradient(
      rgba(0, 0, 0, 0.7), 
      rgba(0, 0, 0, 0.7)
    ),
    /* bottom, image */
    url(home/demo-categories/barber/images/newbanner.jpg);
        margin-top: -50px;
        margin-bottom: 20px;
    height: 200px;
    }
    .headerMobile {
      background-color: #f1f1f1;
      padding: 20px;
      /*text-align: right;*/
      position: relative;
      z-index: 1;
    }
    /* Style the menu button */
    .menu-button {
        margin-top:5px;
        text-align:right;
      /*position: absolute;*/
      top: 15px;
      left: 15px;
      font-size: 40px;
      cursor: pointer;
    }
    /* Style the mobile menu */
    .mobile-menu {
  height: 100%;
  width: 80%;
  position: fixed;
  z-index: 2;
  top: 0;
  right: -250px;
  background-image:url('home/revolution/assets/slider-01/militaryup.PNG');
  background-repeat:no-repeat;
  background-size:cover;
  overflow-x: hidden;
  padding-top: 60px;
  transition: 0.5s;
  border-radius:50px 10px 10px 50px;
}
    /* Style the mobile menu links */
    .mobile-menu a {
      padding: 10px;
     
      color: #f1f1f1;
      display: block;
      transition: 0.3s;
      font-family: outfit,Sans-serif;
    font-size: 16px;
    font-weight: 400;
    text-transform: uppercase;
    }
    /* Add a hover effect to the mobile menu links */
    .mobileactive{
        background-color: #d1bc58;
    border-radius: 0px 50px 50px 0px;
    width: 90%;
    color: black;
    }
/*    .mobile-menu a:hover {*/
/*    background-color: #d1bc58;*/
/*    border-radius: 0px 50px 50px 0px;*/
/*    width: 90%;*/
/*    color: black;*/
/*}*/
    /* Style the close button */
    .close-button {
      position: absolute;
      top: 20px;
      right: 15px;
      font-size: 50px;
      cursor: pointer;
      color: #f1f1f1;
    }
    /* Hide the mobile menu by default */
    .mobile-menu-hidden {
      right: -5000px;
    }
    .mobiledes{
        padding:50px 20px 0px 20px;
        color : #fff;
    }
    .interior-action-box .action-box {
     position: relative; 
    margin-top: -40px;
     z-index: 0; 
}
.split-section {
   
    z-index: 0;
}
 
  @media (max-width: 1000px) {
  
  .header {
    display: none;
  }
  .headerMobile {
    display: block;
  }
  .mobile-menu{
      display: block;
  }
  }
  
  @media (min-width: 1000px) {
  .headerMobile {
    display: none;
  }
  .mobile-menu{
      display: none;
  }
  
}
/*mobile menu*/

/*map*/
.team.team-overlay .team-description {
         z-index: 0;
}
p.top {
    background: #d1bc58;
    padding: 25px;
    color: #fff;
    /*line-height:1.5rem;*/
    font-size:15px;
    margin-bottom:0px;
}
p.bottom-pop {
    color: #000;
    padding: 10px;
}
.gm-style-iw.gm-style-iw-c{
    padding: 0;
}
.gm-ui-hover-effect>span {
    background-color: #fff;
}
.gm-style-iw-d {
    overflow: hidden !important;
}
.map-pop > span{
    background-color: #fff;
    text-align: center;
    margin-top: -21px;
    width: 40px;
    height: 40px;
    margin-left: auto;
    margin-right: 10px;
    padding: 10px;
    display: block;
    border-radius: 50%;
  box-shadow: 0 0 20px #d1bc58;
}

/*map*/
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm0OuF5IThTJ10y7BKENC0RImDc00pgwE"></script>
    <script>
      function initMap() {
          
        var location = {lat: 31.70200885593267, lng: -96.26733751239651};
       
        var map = new google.maps.Map(document.getElementById('map'), {
          center: location,
          zoom: 8
        });
        var infowindow = new google.maps.InfoWindow({
          content: '<div class="map-pop"><p class="top">Triple Crown Bingo<br> (VFW 290)</p><span  onclick="calcRoute()"><i class="fas fa-directions" style="font-size: large;cursor: pointer; color:#d1bc58;"></i></span><p class="bottom-pop"><i class="fa-sharp fa-solid fa-location-dot" style="color: #d1bc58;"></i> 21902 Northwest Freeway, Cypress, TX 77429</p></div>'
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
        infowindow.open(map, marker);
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);

      }
       function calcRoute() {
  var start = "Current Location"; // Set the starting location to the user's current location or leave it blank to start from the center of the map
  var end = "Triple Crown Bingo @ VFW 290, Northwest Freeway, Cypress, TX, USA"; // Set the destination to the location of the marker
  var request = {
    origin: start,
    destination: end,
    travelMode: google.maps.DirectionsTravelMode.DRIVING
  };
  window.open("https://www.google.com/maps/dir/?api=1&" + jQuery.param(request)); // Open a new window with the Google Maps URL containing the directions
}
    </script>


</head>

<body  onload="initMap()">

<div class="wrapper">

<!--=================================
 mobile header -->
<div class="headerMobileSection">
 <div class="headerMobile">
     <div class="row">
         <div class="col-10">
             <a href="/VFW"><img  style="width:200px;" src="home/revolution/assets/slider-01/TCB VFW LOGO gold.png" alt=""> </a>
         </div>
         <div class="col-2">
             <span class="menu-button" onclick="openMobileMenu()">&#9776;</span>
         </div>
     </div>
      
    
    
  </div>
  
  <!-- Mobile menu -->
  <div class="mobile-menu mobile-menu-hidden">
      <div class="headerMenuMobile">
    <span class="close-button" onclick="closeMobileMenu()">&times;</span>
    <a href="/VFW" style="text-align:left;padding-top:60px;"><img class="img-fluid" src="home/revolution/assets/slider-01/TCB VFW LOGO gold.png" style="height:70px;" alt=""> </a>
    </div>
   <a href="/VFW#play" @if($val1 == "") class="mobileactive" @endif><img  style="width:40px;" src="home/revolution/assets/slider-01/url_icon.png" alt="">  PRICING & PLAY TIMES </a> 
            <a href="/VFW_MIDNIGHT" @if($val1 == "MIDNIGHT") class="mobileactive" @endif><img  style="width:40px;" src="home/revolution/assets/slider-01/url_icon.png" alt="">    MIDNIGHT BINGO</a>
            
           <a href="/VFW_FOOD" @if($val1 == "FOOD") class="mobileactive" @endif><img  style="width:40px;" src="home/revolution/assets/slider-01/url_icon.png" alt="">    FOOD</a> 
           
           <a href="/VFW_EVENTS" @if($val1 == "EVENTS") class="mobileactive" @endif><img  style="width:40px;" src="home/revolution/assets/slider-01/url_icon.png" alt="">    EVENTS</a> 
           
            <a href="/VFW_INDOOR" @if($val1 == "INDOOR") class="mobileactive" @endif><img  style="width:40px;" src="home/revolution/assets/slider-01/url_icon.png" alt="">    IN THE NEWS</a> 
            
           <a href="/VFW#contact_us"><img  style="width:40px;" src="home/revolution/assets/slider-01/url_icon.png" alt="">    CONTACT US</a> 
            
      
    <p class="mobiledes"><strong>Triple Crown Bingo</strong> is Houston’s Ultimate Bingo Experience! Three convenient locations, paying out over $5,000 CASH daily.</p>
     <div class="social-icons color-hover float-center" style="padding:0px 10px">
         <ul>
          <li class="social-facebook text-white"><a href="https://www.facebook.com/TripleCrownBingoVFW290/"><i class="fa fa-facebook text-white"></i></a></li>
          <li class="social-instagram text-white"><a href="https://www.instagram.com/triplecrownbingovfw290/"><i class="fa fa-instagram text-white"></i></a></li>
          <li class="social-tiktok text-white"><a href="https://www.tiktok.com/@triple_crown_bingo"><i class="fab fa-tiktok text-white"></i> </a></li>
          <li class="social-yelp text-white"><a href="https://www.yelp.com/biz/triple-crown-bingo-houston"><i class="fa fa-yelp text-white social"></i> </a></li>
         </ul>
       </div>
  </div>
</div>

<!--=================================
 mobile header -->

 <section id="homesection"></section>




<!--=================================
 header -->

<header id="header" class="header default fullWidth" style="background-image:url('home/revolution/assets/slider-01/military2.jpg')">
  <div class="menu" id="onepagenav">
   <!--menu start -->
   <nav id="menu" class="mega-menu">
     <!--menu list items container -->
    <section class="menu-list-items">
     <div class="container-fluid">
      <div class="row">
       <div class="col-lg-12 col-md-12 position-relative">
         <!--menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="/VFW"><img class="img-fluid" src="home/revolution/assets/slider-01/TCB VFW LOGO gold.png" alt=""> </a>
            </li>
        </ul>
         <!--menu links -->
        <div class="menu-bar">
         <ul class="menu-links">
            <li @if($val1 == "") class="active" @endif><a href="/VFW#play">PRICING & PLAY TIMES</a></li>
            
            <li @if($val1 == "MIDNIGHT") class="active" @endif><a href="/VFW_MIDNIGHT">MIDNIGHT BINGO</a></li>
            <li @if($val1 == "FOOD") class="active" @endif><a href="/VFW_FOOD">FOOD</a></li>
            <li @if($val1 == "EVENTS") class="active" @endif><a href="/VFW_EVENTS">EVENTS</a></li>
            <!--<li><a href="/VFW_INDOOR">IN THE NEWS</a></li>-->
             
             <li class="hoverTrigger"><a href="#contact_us">CONTACT US <i class="fa fa-angle-down fa-indicator"></i><div class="mobileTriggerButton"></div></a>
            <!-- drop down multilevel  -->
              <div class="drop-down grid-col-2 menu-offset-1.5 effect-expand-top" style="transition: all 400ms ease 0s;">
              <!--grid row-->
               <div class="grid-row">
                 <!--grid column 3-->
                  <div class="grid-col-12">
                   <ul>
                     <li @if($val1 == "INDOOR") class="active" @endif><a href="/VFW_INDOOR">IN THE NEWS </a></li>
                     <!--<li><a href="/JONES_CORPORATE_EVENTS">CORPORATE EVENTS</a></li>-->
                   
                   </ul>
                  </div>
                 
                 </div>
                </div>
             </li>
            <li><button class="btn btn-primary" onclick="window.location.href='tel:(346) 291-1561'">CLICK TO CALL : (346) 291-1561 </button></li>
          </ul>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
   <!--menu end -->
 </div>
</header>

<!--=================================
 header -->


@yield('vfwContent')


<!--=================================
 footer -->

<footer class="footer footer-one-page juice-footer page-section-pt parallax" style="background-image:url('home/revolution/assets/slider-01/military3.jpg')" id="contact_us">
 <div class="container">
   <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="section-title text-center">
            <h2 class="text-white"> Triple Crown Bingo is Houston’s Ultimate Bingo Experience! Three convenient locations, paying out over $5,000 CASH daily. </h2>
          </div>
        </div>
     </div>
  <div class="row text-center">
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30">
       <div class="text-center">
           <i class="ti-map-alt text-white"></i>
           <h5 class="mt-15 text-white">Address</h5>
           <p class="text-white">21902 Northwest Freeway, Cypress, TX 77429 </p>
          </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30">
       <div class="text-center">
         <i class="ti-mobile text-white"></i>
         <h5 class="mt-15 text-white">Call Us</h5>
         <p class="text-white">(346) 291-1561</p>
        </div>
      </div>
   </div>
   <div class="col-lg-4 col-md-4">
      <div class="contact-add mb-30">
        <div class="text-center">
         <i class="ti-email text-white"></i>
         <h5 class="mt-15 text-white">Email Us</h5>
         <p class="text-white">
info@triplecrownbingo.com</p>
       </div>
      </div>
   </div>
   </div>
   <div class="row justify-content-center">
   
    <div class="col-lg-4 col-sm-6">
      <div class="footer-useful-link footer-hedding text-center">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
        <ul>
         <li class="active"><a href="#play">PRICING & PLAY TIMES</a></li>
            <li><a href="/VFW_MIDNIGHT">MIDNIGHT BINGO</a></li>
            <li><a href="/VFW_FOOD">FOOD</a></li>
            <li><a href="/VFW_EVENTS">EVENTS</a></li>
            <li><a href="/VFW_INDOOR">IN THE NEWS</a></li>
            <!--<li><a href="#contact_us"> Contact us </a> </li>-->
        </ul>
      </div>
    </div>
      <div class="col-md-4">
       <div class="footer-Newsletter text-center mt-30 mb-40">
        <div id="mc_embed_signup_scroll">
          <form id="contactform" role="form" method="post" action="php/contact-form.php">
          <div class="contact-form transparent-form clearfix">
            <div class="section-field">
              <input id="name" type="text" placeholder="Name*" class="form-control"  name="name">
            </div>
            <div class="section-field">
              <input type="email" placeholder="Email*" class="form-control" name="email">
            </div>
            <div class="section-field">
              <input type="text" placeholder="Phone*" class="form-control" name="phone">
            </div>
            <div class="section-field textarea">
              <textarea class="input-message form-control" placeholder="Comment*"  rows="7" name="message"></textarea>
            </div>
            <!-- Google reCaptch-->
            <!--<div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div>-->
            <input type="hidden" name="action" value="sendEmail"/>
            <button id="submit" name="submit" type="submit" value="Send" class="button button-border white"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
          </div>
        </form>
          </div>
        </div>
     </div>
    <div class="col-lg-4 col-sm-6 ">
      <!--<div class="footer-useful-link footer-hedding text-center">-->
      <!--  <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>-->
      <!--  <ul>-->
      <!--   <li class="active"><a href="#play">PRICING & PLAY TIMES</a></li>-->
      <!--      <li><a href="/VFW_MIDNIGHT">MIDNIGHT BINGO</a></li>-->
      <!--      <li><a href="/VFW_FOOD">FOOD</a></li>-->
      <!--      <li><a href="/VFW_EVENTS">EVENTS</a></li>-->
      <!--      <li><a href="/VFW_INDOOR">INDOOR NEWS</a></li>-->
            <!--<li><a href="#contact_us"> Contact us </a> </li>-->
            
      <!--  </ul>-->
      <!--</div>-->
    </div>
    </div>
     <div class="row justify-content-center pt-20">
   
    <div class="col-lg-12 col-sm-12">
      <div class="footer-useful-link footer-hedding text-center">
        <a href="/VFW_CONDITIONS" class="p-20">Terms & Conditions</a> &nbsp &nbsp
            <a href="/VFW_POLICY" class="p-20">Privacy Policy</a>
        </ul>
      </div>
    </div>
    
   
    </div>
   <div class="footer-widget mt-20">
    <div class="row">
      <div class="col-lg-6 col-md-6">
      <p class="mt-15 text-white">&copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>  All Rights Reserved</p>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="footer-widget-social text-center text-md-end">
        <ul>
          <li class="social-facebook "><a href="https://www.facebook.com/TripleCrownBingoVFW290/"><i class="fa fa-facebook text-white"></i></a></li>
          <li class="social-instagram"><a href="https://www.instagram.com/triplecrownbingovfw290/"><i class="fa fa-instagram text-white"></i></a></li>
          <li class="social-tiktok"><a href="https://www.tiktok.com/@triple_crown_bingo"><i class="fab fa-tiktok text-white"></i> </a></li>
          <li class="social-yelp"><a href="https://www.yelp.com/biz/triple-crown-bingo-houston"><i class="fa fa-yelp text-white"></i> </a></li>
         </ul>
       </div>
      </div>
    </div>
  </div>
  </div>
</footer>

<!--=================================
 footer -->

</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
<script src="home/js/jquery-3.6.0.min.js"></script>

<!-- plugins-jquery -->
<script src="home/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'home/js/';</script>

<!-- Google recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- REVOLUTION JS FILES -->
<script src="home/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="home/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="home/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="home/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="home/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="home/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="home/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="home/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="home/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="home/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="home/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- revolution custom -->
<script src="home/revolution/js/revolution-custom.js"></script>

<!-- custom -->
<script src="home/js/custom.js"></script>
<script>
    // Open the mobile menu
function openMobileMenu() {
  document.querySelector('.mobile-menu').style.right = '0';
}
// Close the mobile menu
function closeMobileMenu() {
  document.querySelector('.mobile-menu').style.right = '-5000px';
}
  </script>


</body>
</html>
