<?php
include("header.php");
?>

<!--=================================
 header -->


<!--=================================
page-title-->


  

<!--=================================
page-title -->


<!--=================================
 map-->

<section class="white-bg contact-3 o-hidden clearfix">
   <!-- =============================== -->
   <div class="container-fluid">
     <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 contact-add gray-bg"> 
             <div class="text-center">
               <i class="ti-map-alt"></i>
               <h4 class="mt-15">Address</h4>
               <p> Hazeera, Old Gwalior, Gwalior</p>
              </div>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-4 contact-add theme-bg" style="height: 284px;">
              <div class="text-center">
               <i class="ti-mobile text-white"></i>
               <h4 class="text-white mt-15">Call Us</h4>
               <p class="text-white">+(91)70000-25358</p>
				<p class="text-white">+(91)82697-40250</p>
               
              </div>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-4 contact-add  black-bg">
             <div class="text-center">
               <i class="ti-email text-white"></i>
               <h4 class="text-white mt-15">Email Us</h4>
               <p class="text-white">info@examjugaad.com</p>
             </div>
           </div>
          </div>
    </div>
	<br>
   <div class="container-fluid pos-r">
    <div class="row row-eq-height full-height">
    <div class="col-lg-6 col-md-6 map-side g-map" style="height=100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.830706101584!2d78.1769223146126!3d26.234689795264607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c6bfc64c7673%3A0x758c35438b32c3ef!2sAbhinav+Info+Soft+OPC+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1529830165569" width="600" height="750" frameborder="0" style="border:0" allowfullscreen></iframe>
           
   
    </script>  
    </div>
   </div>
  </div>
  <div class="container">
  <div class="row">
      <div class="col-lg-5 col-md-5 col-md-offset-7 col-sm-12"> 
      <div class="contact-3-info page-section-ptb">
       <div class="clearfix">
          <div class="section-title mb-0"> 
           <h6>let's work together</h6>
           <h2 class="title-effect">Contact Us</h2>
           </div>
           <p class="mb-50">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <span class="tooltip-content" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours!</span></p>
            <div id="formmessage">Success/Error Message Goes Here</div>
             <form class="form-horizontal" id="contactform" role="form" method="post" action="php/contact-form.php">
               <div class="contact-form clearfix">
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
          					<div class="g-recaptcha section-field clearfix" data-sitekey="6LdhZmAUAAAAAKcCpLcimU80gUbnvck3MQVzqyYV"></div>
          					<div class="section-field submit-button">
                    <input type="hidden" name="action" value="sendEmail"/>
                     <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
					          </div>
                    </div> 
                  </form>
                 <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/pre-loader/loader-02.svg" alt=""></div>
              </div>          
         </div>
    </div>
    </div>
    </div>
</section>


<!--=================================
map -->


<!--=================================
action box- -->


 
<!--=================================
action box- -->
 
 
<?php 



 include('footer.php');


  ?>

<!--=================================
 footer -->

 
 

<!-- custom -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNIc4LSZ1WrUf5CUpIbWt9znd0J1IFSFE&callback=myMap"></script>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>
<script type="text/javascript" src="/university/assets/js/custom.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script> 



</body>
</html>

