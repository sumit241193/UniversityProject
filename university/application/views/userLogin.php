
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
         <li class="active"><a href="#login" data-toggle="tab"> <i class="fas fa-lock"></i>login</a></li>
         <li><a href="#signup" data-toggle="tab"> <i class="fas fa-user-plus"></i>Signup</a></li>
        </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="login">
            <div class="login-box-02 white-bg">
			<form action="checkuserpwd" method="post">
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
            <div class="tab-pane fade" id="signup" style="height: 533px;">
            <div class="login-box-02 white-bg" style="padding:34px;">
              <div class="pb-50 ">
			  <form class="form-inline" action="register" method="post">
               <div class="row ">
                  <h4 class="mb-30" style="margin-left:50px;">Signup</h4>
                   <div class="col-md-6 form-check">
                     
                       <input id="name" class="form-control" type="text" placeholder="&#xf007; First Name*" name="fname" style="font-family:'Poppins', sans-serif,FontAwesome; width:100%">
                    </div>
                     <div class="col-md-6 form-check">
                     
                       <input id="name" class="web form-control" type="text" placeholder="&#xf007; Last Name*" name="lname" style="font-family:'Poppins', sans-serif,FontAwesome; width:100%">
                    </div>
                  </div>
                 
                  
				 <div class="row mb-20">
				 
                  <div class="col-md-6 form-check ">
				  <div  style="margin-left:165px;">
       <i class="fas fa-male "></i> <input  name="gender" type="radio">
        <label class="form-check-label " for="radio121">Male</label>
    </div>
    </div>

   <div class="col-md-6 form-check ">
				  <div  style="margin-left:-20px;">
       <i class="fas fa-female "></i> <input  name="gender" type="radio" >
        <label class="form-check-label " for="radio121">Female</label>
    </div>
    </div>
	</div>
					<div class="row mb-20">
                    <div class="col-md-6 form-check ">
                       
                        <input type="text" placeholder="&#xf007; User Name*" class="form-control" style="font-family:'Poppins', sans-serif, fontawesome; width:100%" name="username" >
                   </div>
                   <div class="col-md-6 form-check ">
                       
                        <input  data-provide="datepicker" class="form-control" placeholder="Date Of Birth" name="dob" style="line-height:1 !important; width:100%">
                   </div>
				   </div>
                  <div class="row mb-20">
                      <div class="col-md-12">
                        <input type="email" placeholder="&#xf1fa; Email*" class="form-control" style="font-family:'Poppins', sans-serif, fontawesome; width:100%;" name="email">
                   </div>
                   </div>
				   <div class="row mb-20">
                  <div class="col-md-6 form-check">
                   
                     <input id="Password" class="Password form-control" type="password" placeholder="&#xf084; Password*" style="font-family:'Poppins', sans-serif, fontawesome; width:100%" name="password">
                  </div>
							 
				  
                  <div class="col-md-6 form-check">
                   
					<input id="Password" class="Password form-control" type="password" placeholder="&#xf084; Confirm Password*" style="font-family:'Poppins', sans-serif, fontawesome; width:100%" name="confirmpassword">
						  
                  </div>
                  </div>
				  
				  
                  <div class="form-check mb-10">
                  
                     <input id="text" class="Password form-control" type="password" placeholder="&#xf10b; Mobile Number*" style="font-family:'Poppins', sans-serif, fontawesome; width:100%" name="mob">
                  </div>
                  <!-- Google reCaptch-->
                    <div class="g-recaptcha section-field clearfix" data-sitekey="6LdhZmAUAAAAAKcCpLcimU80gUbnvck3MQVzqyYV"  align="center"></div>
				  
                    <a href="#" class="button btn-block">
                      <span>Signup</span>
                      <i class="fa fa-check"></i>
                   </a>
				   </form>
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

