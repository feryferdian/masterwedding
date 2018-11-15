<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login - Master Wedding</title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Balloons Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates,
         Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"/>
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="<?= BASE_ASSETS ?>/application/views/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
   </head>
   <body>
      <h1 class="header-w3ls">
          <?= isset($message) ? $message : "" ?>

          Master Wedding Login
      </h1>
      <div class="mid-cls">
         <div class="swm-right-w3ls">
            <h2> </h2>
            <form action="<?= base_url("welcome/login") ?>" method="post" name="formlogin" id="formlogin">
               <div class="main">
                  <div class="form-left-w3l">
                     <input type="email" name="username" placeholder="Email" required="">
                     <div class="clear"></div>
                  </div>
                  <div class="form-right-w3ls">
                     <input type="password" name="password" placeholder="Password" required="">
                     <div class="clear"></div>
                  </div>
                  <div class="left-side">
                     <input type="checkbox" class="checked">
                     <span class="span">Remember me </span>
                     <a href="#" class="for" >Forgot password...?</a>

                  </div>
                  <div class="btnn">
                     <button type="submit">Login</button>
                  </div><br>
                   <div class="left-side">
                       <a href="<?= base_url("register") ?>" class="for" >Sign Up</a>
                   </div>



               </div>
            </form>
         </div>
      </div>
      <div class="copy">
         <p>&copy;2018 Master Wedding. All Rights Reserved | Design by
            <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
         </p>
      </div>
   </body>
</html>