
 <?php 



 require('header.php');


  ?>
 

<!--=================================
 login-->
 <style>
 
 </style>

<section class="page-section-ptb bg-overlay-white-20 parallax" data-jarallax='{"speed": 0.6}'  data-jarallax-video="mp4:/university/assets/video/video.mp4,webm:/university/assets/video/video.webm,ogv:/university/assets/video/video.ogv" style="background-image: url('/university/assets/video/video.jpg'); height:100%;">

  <div class="container">     
     <div class="row">
       <div class="col-md-6 col-lg-6 col-sm-6" style="margin-left:-50px;margin-top: -60px;" >
        <div class="tab  icon nav-center">
        <ul class="nav nav-tabs">
         <li class="active"><a href="#varification" data-toggle="tab"> <i class="fas fa-lock"></i>varification</a></li>
        </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="otp">
            <div class="login-box-02 white-bg">
      <form action="checkotp" method="post">
                <div class="pb-50 clearfix">
                   <h4 class="mb-30"> Enter One Time Password </h4>
                 <div class="section-field mb-20">
                     <label class="mb-10" for="name"><i class="fa fa-mail"></i> </label>
                       <input id="name" class="web form-control" type="text" placeholder="OTP" name="otp">
                    </div>
                          <button type="submit" class="button btn-block">
                            <span>verify</span>
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
            <div class="tab-pane fade" id="signup" style="height: 533px;">
            <div class="login-box-02 white-bg" style="padding:34px;">
              <div class="pb-50 ">
       
                </div>
                
               </div>
            </div> 
          </div> 
        </div>
        </div>
    <div class="col-md-6 col-lg-6 col-sm-6" >
     
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
          </section>

<!--=================================
 login-->
 <?php 



 require('footer.php');


  ?>

<script src='https://www.google.com/recaptcha/api.js'></script> 

</body>
</html>

