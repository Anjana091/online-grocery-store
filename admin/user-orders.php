<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['fosaid']==0)) {
  header('location:logout.php');
  } 
     ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FRESHNESS STORE</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
<?php include_once('includes/leftbar.php');?>

   <div id="page-wrapper" class="gray-bg">     
       <?php include_once('includes/header.php');?>
            <div class="wrapper wrapper-content">

            <table class="table" style="margin-top: 6rem;">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Order ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Product ID</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody >
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="bgs" ;

          $connection= new mysqli($servername,$username,$password,$database); //connecting database and php


        if($connection->connect_error){
    die("connection failed:".$connection->connect_error);
        } 
        $sql="select tblorders.ID as frid,tblfood.Image,tblfood.ItemName,tblfood.ItemDes,tblfood.ItemPrice,tblfood.ItemQty,tblorders.FoodId,tblorders.STATUS,tblorders.ID,tblorders.UserId from tblorders join tblfood on tblfood.ID=tblorders.FoodId";
               $result=$connection->query($sql);

        if(!$result){
            die("invalid query:".$connection->error);
         }

     while($row=$result->fetch_assoc()){
      ?>
     <tr> 
      <th> <?php echo $row['ItemName'] ?></th>
      <th> <?php echo $row['ID'] ?></th>
      <td><?php  echo $row["UserId"] ?></td>
      <td> <?php  echo $row["FoodId"] ?></td>
      <td> <?php echo $row["STATUS"] ?></td>
      <td><a href="status-edit.php?edit=<?php echo $row['ID'];?>">Edit Status</a>
    </tr>
    <?php }
    
    ?>
  </tbody>
</table></div>
       
                    
            

                
      <?php include_once('includes/footer.php');?>
        </div>
            </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

</body>
</html>