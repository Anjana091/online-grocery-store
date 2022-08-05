<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/user.png"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <?php
$admid=$_SESSION['fosaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$admid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
                        
                            <span class="text-muted text-xs block"><?php echo $name; ?> <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                          
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                                    </li>
                                    <li>
                    <a href="user-detail.php"><i class="fa fa-users"></i> <span class="nav-label">Reg Users</span> <span class="fa arrow"></span></a>
                                    </li>
                
              
               
              
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Product Category</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="add-foodcategory.php">Products Category</a></li>
                        <li><a href="manage-foodcategory.php">Manage Products Category</a></li>
                    
                       
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Products Menu</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="add-fooditem.php">Add Products</a></li>
                        <li><a href="manage-fooditems.php">Manage Products </a></li>
                    
                       
                    </ul>
                </li>  
                <li>
                    <a href="user-orders.php"><i class="fa fa-users"></i><span class="nav-label">User Orders</span> <span class="fa arrow"></span></a>
                                    </li>
                                    <li>
                    <a href="order-adress.php"><i class="fa fa-users"></i><span class="nav-label">Order Address</span> <span class="fa arrow"></span></a>
                                    </li>
                                   
               
            </ul>

        </div> 
    </nav>