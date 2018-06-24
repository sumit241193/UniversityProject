<?php
include('header.php');
?>
<section class="page-section-ptb bg-overlay-white-70 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url('/university/assets/video/video.jpg');" data-jarallax-video="mp4:/university/assets/video/video.mp4,webm:/university/assets/video/video.webm,ogv:/university/assets/video/video.ogv">
  <div class="container">
     <div class="row">
       <div class="col-sm-5">
        <div class="login-box-02 white-overlay">
        <div class="pb-50 clearfix">
		<form action="UserCheck" method="POST">
           <h4 class="mb-30"> Login </h4>
         <div class="section-field mb-20">
		 
             <label class="mb-10" for="name">User name* </label>
               <input id="name" class="web form-control" type="text" placeholder="User name" name="username" required>
            </div>
            <div class="section-field mb-20">
             <label class="mb-10" for="Password">Password* </label>
               <input id="Password" class="Password form-control" type="password" placeholder="Password" name="pswd" required>
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
                <li><a class="fb" href="#"> Login with Facebook</a></li>
                
                <li><a class="pinterest" href="#">Login with google+</a></li>
            </ul>
          </div>
         </div>
        </div>
        <div class="col-sm-7 xs-mt-40">
          <h4>We will help you to achieve your goals and to grow your business.</h4>
          <p class="mb-30">You will begin to realise why this </p>
            <ul class="list-unstyled list list-mark">
              <li>Buy, sell, and interact with other members.</li>
              <li>Save your favorite searches and get notified.</li>
              <li>Watch the status of up to 200 items.</li>
              <li>View your Atropos information from any computer in the world.</li>
              <li>Connect with the Atropos community.</li>
            </ul>
          <p class="mt-20">Don't have an account yet? <a href="signup-13.html"> Click to register!</a></p>
          <div class="parallax bg-overlay-black-70 mt-30" style="background: url(/university/assets/images/login/01.jpg);">
            <div class="pos-r pl-30 pb-30 pt-30 pr-30">
              <h4 class="text-white">Contact Customer Support</h4>
              <p class="text-white">If you're looking for more help or have a question to ask, please contact us.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>

<?php
include('footer.php');


?>
