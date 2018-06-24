
 <?php 

 include('header.php');

  ?>
 

<!--=================================
 login-->

<section class="page-section-ptb bg-overlay-white-70 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url('/university/assets/video/video.jpg');" data-jarallax-video="mp4:/university/assets/video/video.mp4,webm:/university/assets/video/video.webm,ogv:/university/assets/video/video.ogv">

  <div class="container">
     <form action="checkuserpwd" method="post">
     <div class="row">
       <div class="col-md-6" style="margin-left:-50px; margin-top:-60px;">
        <div class="tab tab-border icon nav-center">
        <ul class="nav nav-tabs">
         <li class="active"><a href="#login" data-toggle="tab"> <i class="fas fa-lock"></i>login</a></li>
         <li><a href="#signup" data-toggle="tab"> <i class="fas fa-user-plus"></i>Signup</a></li>
        </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="login">
            <div class="login-box-02 white-bg">
                <div class="pb-50 clearfix">
                   <h4 class="mb-30"> Login </h4>
                 <div class="section-field mb-20">
                     <label class="mb-10" for="name"><i class="fa fa-user"></i> User name </label>
                       <input id="name" class="web form-control" type="text" placeholder="User name" name="username">
                    </div>
                    <div class="section-field mb-20">
                     <label class="mb-10" for="Password"><i class="fas fa-key"></i> Password </label>
                       <input id="Password" class="Password form-control" type="password" placeholder= "******" name="userpwd">
                    </div>
                    <div class="section-field">
                      <div class="remember-checkbox mb-30">
                         <input type="checkbox" class="form-control" name="two" id="two" />
                         <label for="two"> Remember me</label>
                         <a href="password-recovery.html" class="pull-right">Forgot Password?</a>
                        </div>
                      </div>
                          <button type="submit" class="button btn-block">
                            <span>Log in</span>
                            <i class="fa fa-check"></i>
                         </button>
                     </form>
                  </div>
                  <div class="login-social text-center clearfix">
                    <ul>
                        <li><a class="fb" href="#"> Facebook</a></li>
                        <li><a class="twitter" href="#"> Twitter</a></li>
                        <li><a class="pinterest" href="#"> google+</a></li>
                    </ul>
                  </div>
                 </div>
            </div>
            <div class="tab-pane fade" id="signup">
            <div class="login-box-02 white-bg">
              <div class="pb-50 clearfix">
                <form action="createuser" method="post">
               <div class="row">
                  <h4 class="mb-30">Signup</h4>
                   <div class="section-field mb-20 col-sm-6">
                     <label class="mb-10" for="name"></label>
                       <input id="name" class="web form-control" type="text" placeholder="&#xf007; First Name*" style="font-family:'Poppins', sans-serif, fontawesome;" name="web">
                    </div>
                     <div class="section-field mb-20 col-sm-6">
                     <label class="mb-10" for="name"></label>
                       <input id="name" class="web form-control" type="text" placeholder="Last Name*" name="web" >
                    </div>
                  </div>
                  <div class="section-field mb-20 col-sm-6">
                        MALE<input type="radio" class="form-control" name="radio" value="male">
                   </div>
                   <div class="section-field mb-20 col-sm-6">
                        FEMALE<input type="radio" class="form-control" name="radio" value="female">
                   </div>
                    <div class="section-field mb-20">
                       <label class="mb-10" for="name"></label>
                        <input type="text" placeholder="&#xf007; User Name*" class="form-control" style="font-family:'Poppins', sans-serif, fontawesome;" name="username">
                   </div>
                   <div class="section-field mb-20">
                       <label class="mb-10" for="name">Birth Date</label>
                        <input type="date" class="form-control" placeholder="Date Of Birth" name="dob">
                   </div>
                  <div class="section-field mb-20">
                       <label class="mb-10" for="name"></label>
                        <input type="email" placeholder="&#xf1fa; Email*" class="form-control" style="font-family:'Poppins', sans-serif, fontawesome;" name="email">
                   </div>
                  <div class="section-field mb-20">
                   <label class="mb-10" for="Password"></label>
                     <input id="Password" class="Password form-control" type="password" placeholder="&#xf084; Password*" style="font-family:'Poppins', sans-serif, fontawesome;" name="password">
                  </div>
                  <div class="section-field mb-20">
                   <label class="mb-10" for="Password"> </label>
                     <input id="Password" class="Password form-control" type="password" placeholder="&#xf084; Confirm Password*" style="font-family:'Poppins', sans-serif, fontawesome;" name="confirmpassword">
                  </div>
                  <div class="section-field mb-20">
                   <label class="mb-10" for="Password"></label>
                     <input id="text" class="Password form-control" type="password" placeholder="&#xf10b; Mobile Number*" style="font-family:'Poppins', sans-serif, fontawesome;" name="mob">
                  </div>
                  <!-- Google reCaptch-->
                    <div class="g-recaptcha section-field clearfix" data-sitekey="6LdhZmAUAAAAAKcCpLcimU80gUbnvck3MQVzqyYV"  align="center"></div>

                    <button type="submit" class="button btn-block">
                            <span>Signup</span>
                            <i class="fa fa-check"></i>
                         </button>
                </div>
              </form>
                <div class="login-social text-center clearfix">
                  <ul>
                      <li><a class="fb" href="#"> Facebook</a></li>
                      <li><a class="twitter" href="#"> Twitter</a></li>
                      <li><a class="pinterest" href="#"> google+</a></li>
                  </ul>
                </div>
               </div>
            </div> 
          </div> 
        </div>
        </div>
		<div class="col-md-6" style="margin-top:100px;">
     
          <h4>We will help you to achieve your goals and to grow your business.</h4>
          <p class="mb-30">You will begin to realise why this </p>
            <ul class="list-unstyled list list-mark">
              <li>Buy, sell, and interact with other members.</li>
              <li>Save your favorite searches and get notified.</li>
              <li>Watch the status of up to 200 items.</li>
              <li>View your Atropos information from any computer in the world.</li>
              <li>Connect with the Atropos community.</li>
            </ul>
			 </div>
			 </div>
  </div>
          <!--<p class="mt-20">Don't have an account yet? <a href="signup-13.html"> Click to register!</a></p>
          <div class="parallax bg-overlay-black-70 mt-30" style="background: url(/university/assets/images/login/01.jpg);">
            <div class="pos-r pl-30 pb-30 pt-30 pr-30">
              <h4 class="text-white">Contact Customer Support</h4>
              <p class="text-white">If you're looking for more help or have a question to ask, please contact us.</p>
            </div>
          </div>-->
        </div>
      </div>
  </div>
</section>

<!--=================================
 login-->
 <?php 



 include('footer.php');


  ?>
 

</div>

  

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div> 
 
<!--=================================
 jquery -->

<!-- jquery -->
<script type="text/javascript" src="/university/assets/js/jquery-1.12.4.min.js"></script>

<!-- plugins-jquery -->
<script type="text/javascript" src="/university/assets/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script type="text/javascript">var plugin_path = '/university/assets/js/';</script>
 

<!-- custom -->
<script type="text/javascript" src="/university/assets/js/custom.js"></script>
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

