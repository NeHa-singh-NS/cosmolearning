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
    
    <link rel="stylesheet" href="assets/CSS/signup.css">

   

    <title></title>

    



    
  </head>
  <body>
<div class ="container center-all">
  
  
    
    <div class ="col-md-5 col-sm-12">
       <div class ="heading">
       <a class="img text-center" href="index.php">
            <img src="assets/logo/cosmolearning/1.png" class="justify-content-center" width="auto" height="50" alt="">
          </a>
          <h2>Signup</h2>
        </div>
     <form  action="" method="POST">
       <div class ="form-group">
      <input class ="form-control" type ="text" name="first_name" placeholder="First Name" >
    </div>
       <div class ="form-group">
      <input class ="form-control" type ="text"  name="last_name" placeholder="Last Name" >
    </div>
    <div class ="form-group">
      <input class ="form-control" type ="text" name="email" placeholder="email">
    </div>
    <div class ="form-group">
      <input class ="form-control" type ="password" name="password" placeholder="Password">
    </div>
    <div class ="form-group">
      <input class ="form-control btn btn-outline-primary text-white" name="signup" placeholder="Submit">
    </div>
  </form>
    </div>
  </div>
</div>
<?php include "config/dbcon.php";?>  
            <?php 
                if(isset($_POST['signup'])){
                $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
                $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $pass = password_hash($password,PASSWORD_BCRYPT);

                $emailquery = " SELECT * FROM tbl_user WHERE email = '$email' ";
                $query = mysqli_query($con, $emailquery);

                $emailcount = mysqli_num_rows($query);
                if($emailcount > 0){

                    echo "email already exist";

                }else{

                    //inset query
                    $sql = "INSERT INTO `tbl_user`(`id`, `first_name`, `last_name`, `email`, `password`) VALUES ('','$first_name','$last_name','$email','$pass')" ;

                $res = mysqli_query($con,$sql);

                if($res){
                    header("location:login.php");
                }

                }

 
                


               
               
                }
                  
                  ?>




 <!-- Footer End-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
                