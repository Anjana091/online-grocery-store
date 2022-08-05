<nav class="navbar navbar-expand-lg bg-light">
               <div class="container-fluid">
                 
                   <b ><a href="index.php" class="navbar-brand" style="color: #4B6F44 ;"> <i class="fas fa-shopping-basket"></i> FRESHNESS </a></b>
            
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button></div>
      <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                     
             


  <?php if (strlen($_SESSION['fosuid']==0)) {?>                      
<li class="nav-item"> <a class="nav-link" href="registration.php">Sign up</a> </li>
<li class="nav-item"> <a class="nav-link" href="login.php">Sign in</a>
<?php } ?>

 <?php if (strlen($_SESSION['fosuid']>0)) {?>
              
                        <li class="nav-item"><a class="nav-link" href="cart.php" style="color: green"><strong>My Orders</strong> </a> </li>
                        <?php } ?>



                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
                           <div class="dropdown-menu">
                 
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="logout.php">Logout</a>
                           </div>
                                                
                        </li>

                       
                     </ul>
                  </div>
               </div>
            </nav>