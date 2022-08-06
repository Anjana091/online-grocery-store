<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $fnaobno=$_POST['flatnumber'];
    $street=$_POST['streetn'];
   $area=$_POST['arean'];
   $lndmark=$_POST['landmarkn'];
   $city=$_POST['cityn'];

    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This email or Contact Number already associated with another account";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FirstName, LastName, MobileNumber, Email, Password, flatbldgnumber, streename, area ,landmark, city) value('$fname', '$lname','$contno', '$email', '$password','$fnaobno', '$street', '$area', '$lndmark','$city ')");
    if ($query) {
    $msg="You have successfully registered";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Registration</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
     <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <?php include('includes/header.php');?>
            <!-- /.navbar -->
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 

</script>

         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">Home</a></li>
                     <li><a href="#">Signup Page</a></li>
                     <li>Signup</li>
                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                              <p style="font-size:16px; color:red" align ="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                              <form action="" name="signup" method="post" onsubmit="return checkpass();">
                              <h2>Register User</h2>
                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input class="form-control" type="text" value="" placeholder="First Name" id="firstname" name="firstname" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input class="form-control" type="text" value="" id="lastname" placeholder="Last Name"  name="lastname" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input type="email" class="form-control" id="email"  placeholder="Email address" aria-describedby="emailHelp" name="email" required="true">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input class="form-control" type="text" value="" id="mobilenumber" placeholder="Mobile Number"  name="mobilenumber" required="true" maxlength="10" pattern="[0-9]{10}"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1"></label>
                                       <input type="password" class="form-control" id="password" value=""  placeholder="Password" name="password" required="true" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1"></label>
                                       <input type="password" class="form-control" id="repeatpassword"  placeholder="Repeat password" value="" name="repeatpassword" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input class="form-control" type="text" value="" placeholder="Flat/Building No" id="flatnumber" name="flatnumber" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input class="form-control" type="text" value="" placeholder="streetname" id="streetn" name="streetn" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input class="form-control" type="text" value="" placeholder="area" id="arean" name="arean" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input class="form-control" type="text" value="" placeholder="landmark" id="landmarkn" name="landmarkn" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"></label>
                                       <input class="form-control" type="text" value="" placeholder="city" id="cityn" name="cityn" required="true"> 
                                    </div>
                                                                     </div>
                                 <br>
                                 <div class="row">
                                    <div class="col-sm-4">
                                      <button type="submit" name="submit" class="btn theme-btn"><i class="ft-user"></i> Register</button>
                                    </div>
                                    <div class="col-sm-4">
                          <a href="login.php" class="btn theme-btn"><i class="ft-user"></i> Login</a>

                        </div>
                                 </div>
                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
           
            <!-- start: FOOTER -->
           
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>