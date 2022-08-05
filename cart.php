<?php
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');
if (strlen($_SESSION['fosuid']==0)) {
  header('location:logout.php');
  } else{ 
//placing order
// if(isset($_POST['placeorder'])){
//getting address
//$fnaobno=$_POST['flatbldgnumber'];
//$street=$_POST['streename'];
//$area=$_POST['area'];
//$lndmark=$_POST['landmark'];
//$city=$_POST['city'];
//$userid=$_SESSION['fosuid'];
//genrating order number
//$orderno= mt_rand(100000000, 999999999);
//$query="update tblorders set OrderNumber='$orderno',IsOrderPlaced='1' where UserId='$userid' and IsOrderPlaced is null;";
//$query="insert into tblorderaddresses(UserId,Ordernumber,Flatnobuldngno,StreetName,Area,Landmark,City) values('$userid','$orderno','$fnaobno','$street','$area','$lndmark','$city');";

//$result = mysqli_multi_query($con, $query);
//if ($result) {

//echo '<script>alert("Your order placed successfully. Order number is "+"'.$orderno.'")</script>';
//echo "<script>window.location.href='my-order.php'</script>";}}   

//Code deletion
if(isset($_GET['delid'])) {
$rid=$_GET['delid'];
$query=mysqli_query($con,"delete from tblorders where ID='$rid'");
echo '<script>alert("Order Cancelled!!")</script>';
echo "<script>window.location.href='cart.php'</script>";

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
    <title>cart</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
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
          <?php include_once('includes/header.php');?>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            
            <!-- end:Inner page hero -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li>My Orders</li>
                    </ul>
                </div>
            </div>
            <div class="container m-t-30">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="sidebar clearfix m-b-20">
                            <div class="main-block">
                               
                                <div class="clearfix"></div>
                            </div>
                            <!-- end:Sidebar nav -->
                            
                        </div>
                        <!-- end:Left Sidebar -->
                        
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                        <div class="menu-widget m-b-30">
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              ORDERS !! <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="collapse in" id="1">
                                <div class="food-item white">

<?php 
$userid= $_SESSION['fosuid'];
$query=mysqli_query($con,"select tblorders.ID as frid,tblfood.Image,tblfood.ItemName,tblfood.ItemDes,tblfood.ItemPrice,tblfood.ItemQty,tblorders.FoodId,tblorders.STATUS from tblorders join tblfood on tblfood.ID=tblorders.FoodId where tblorders.UserId='$userid' and tblorders.IsOrderPlaced is null");
$num=mysqli_num_rows($query);
if($num>0){
while ($row=mysqli_fetch_array($query)) {
 

?>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-8">
                                            <div class="rest-logo pull-left">
                                                <a class="restaurant-logo pull-left" href="#"><img src="admin/itemimages/<?php echo $row['Image']?>" width="100" height="80" alt="<?php echo $row['ItemName']?>"></a>
                                            </div>
                                            <!-- end:Logo -->
                                            <div class="rest-descr">
<h6><a href="food-detail.php?fid=<?php echo $_SESSION['fid']=$row['FoodId'];?>"><?php echo $row['ItemName']?> (<?php echo $row['ItemQty']?>) </a></h6>
                                                <p> <?php echo $row['ItemDes']?></p>
                                            </div>
                                            <div class="rest-descr">
<h6><?php echo $row['STATUS']?> </h6>
                                                <p> <?php echo $row['ItemDes']?></p>
                                            </div>
                                            <!-- end:Description -->
                                        </div>
                                        <!-- end:col -->
                                        <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">Rs. <?php echo $total=$row['ItemPrice']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="cart.php?delid=<?php echo $row['frid'];?>" onclick="return confirm('Do you really want to Cancel the Order?');";><i class="fa fa-trash" aria-hidden="true" title="Delete this food item"></i><a/></span>
                                        
                                   </div>
                                    </div>
                                    <!-- end:row -->

                                <?php 
$grandtotal+=$total;
                            } 

} else {

    echo "You cart is empty.";
}
                            ?>
                                </div>
                          
                            </div>
                            <!-- end:Collapse -->
                        </div>
                        <!-- end:Widget menu -->
                      
                        <!--/row -->
                    </div>
                    <!-- end:Bar -->
                                <hr />
                            
                          
                                <div class="widget-body">
                                    <div class="price-wrap text-xs-center">
                                        
                                        <p>TOTAL</p><h3 class="value"><strong><?php echo $grandtotal;?></strong></h3>
                                        <p>Free Shipping</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:Right Sidebar -->
                </div>
            </form>
            <?php } ?>
                <!-- end:row -->
            </div>
            <!-- end:Container -->
          
            <!-- start: FOOTER -->
       
            <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
    </div>
    <!--/end:Site wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>
