<?php include "config/dbcon.php";?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
 
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/JS/main.js"></script>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/login.css">

    
   

    <title></title>

    



    
  </head>
  <body>
    <!-- Navigation Start  -->

    <nav class="navbar navbar-expand-lg sticky-top navbar-lights" style="background-color:#2C3A47" >
        <a class="navbar-brand" href="index.php">
            <img src="assets/logo/cosmolearning/1.png" class="justify-content-between" width="auto" height="50" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto justify-content-center ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="career.php">Career</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
           
           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><a class="nav-link" href="login.php">Login/Register</button></a>
          </form>
        </div>
        
      </nav>
<!-- Navigation End  -->



<section class="ftco-section ftco-no-pb ftco-no-pt">

    <div id="body">
		<div class="container">
            <div class="row">
               <h1>Get Your Dream Job Here</h1>
            </div>
            <div class="row">
                <h4 style="text-align:center">Please send us your updated resume...</h4>
            </div>
            <form method="post" style="padding:10%;">
            <div class="row input-container">
                <div class="col-12 form-group">
                    <div class="styled-input wide">
                        <label>Name</label>
                        <input type="text" required  class='form-control'/>
                        
                    </div>
                </div>
                <div class="col-md-6 col-12 form-group">
                    <div class="styled-input">
                        <label>Email</label>
                        <input type="text" required  class='form-control'/>
                        
                    </div>
                </div>
                <div class="col-md-6 col-12 form-group">
                    <div class="styled-input">
                         <label>Phone Number</label>
                        <input type="text" required  class='form-control'/>
                       
                    </div>
                </div>
                <div class="col-md-12 col-12 form-group">
                    <div class="styled-input">
                         <label>Resume</label>
                        <input type="file" required  class='form-control'/>
                       
                    </div>
                </div>
                <div class="col-md-12 col-12 form-group">
                    <div class="styled-input">
                        <label>Message</label>
                        <textarea required class='form-control'></textarea>
                        
                    </div>
                </div>
                <div class="col-12 form-group">
                    <button class="btn btn-primary">Send Message</button>
                </div>
            </div>
            </form>
        </div>
		<!-- / container -->
	</div>

</section>













   <!--? Footer Start-->
     
   <footer class="mt-5">
        <div class="container">
          <div class="col-left">
              <img src="assets/logo/cosmolearning/1.png" width="auto" height="50"  alt="">
              
              <p>Cosmolearning is a website created for the studens.who want jobs/ internships and career related information. It comes with a great variety of resoures.</p>
              <ul class="social-media-list">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fas fa-basketball-ball"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
          </div>
          <div class="col-right">
              <ul class="links-container">
                  <h4>Solution</h4>
                  <li><a href="#">Control</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Performance</a></li>
                  <li><a href="#">Scalibility</a></li>
              </ul>
              <ul class="links-container">
                  <h4>Resources</h4>
                  <li><a href="#">Case Studies</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">I’m a Client</a></li>
              </ul>
              <ul class="links-container">
                  <h4>company</h4>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Newsroom</a></li>
                  <li><a href="#">Contact Us</a></li>
              </ul>
          </div>
        </div>
     </footer>

    <!-- Footer End-->




    <!-- Optional JavaScript; choose one of the two! -->

   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  
    -->
  </body>
</html>