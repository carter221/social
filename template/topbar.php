<?php
  include_once ('functions/main.php');
  //include_once ('functions/connection_db.php');
?>
<header class="header_area" style="height:91px !important;" >
    <div class="main_menu" style="box-shadow: 0px 0px 0px 0px;">
      <nav class="navbar navbar-expand-lg navbar-light" style="height:70px !important;">
        <div class="container box_1620">
          <!--<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
             <!-- <li class="nav-item"onClick="active()" ><a class="nav-link" href="index.php">Home</a></li> -->
              <!--<li class="nav-item"><a class="nav-link" href="feature.php">Features</a></li> 
              <li class="nav-item"><a class="nav-link" href="service.php">Service</a>
              <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="membre.php">Single Blog</a>                 
                  <li class="nav-item"><a class="nav-link" href="blog-details.php">Blog Details</a>                 
                </ul> 
							</li>
            </ul>-->
            <?php
  
              if (islogged() == 1) {
                ?>
                
                   <!-- <div class="nav-right text-center text-lg-right " style="min-width: 200px;">
                      <a class="button button-outline button-small" href="logout.php">Déconnection</a>
                   </div>-->
                   
                        <div class="navbar-collapse collapse" >
                            <ul class="nav navbar-nav judi" >
                                <li><a href="index.php" style="color:white;">Social</a></li>
                                <li><a href="#" style="color:white;">My Activity</a></li>
                                <li ><span class="badge badge-important">2</span><a href="#" style="color:white;"><i class="fa fa-bell-o fa-lg" aria-hidden="true"></i></a></li>
                                <li><a href="#" style="color:white;"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                   <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown"><a href="#" class="" data-toggle="dropdown">
                                    <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                        <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" class="img-responsive img-circle" title="John Doe" alt="John Doe" width="30px" height="30px">
                                    </span>
                                    <span class="user-name" style="color:white;">
                                        John Doe
                                    </span>
                                    <b class="caret" ></b></a>
                                    <ul class="dropdown-menu" style="text-align:center; width:130px !important;">
                                        <li>
                                            <div class="navbar-content">
                                            <div class="row">
                                                        <div class="col-md-12" >
                                                            <a href="membre.php" class="btn btn-default btn-sm pull-right"><i class="fa fa-address-card-o" aria-hidden="true"></i> Amis</a>
                                                        </div>
                                                    </div>
                                            <div class="row">
                                                        <div class="col-md-12" >
                                                            <a href="#" class="btn btn-default btn-sm pull-right"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                        <div class="col-md-12" >
                                                            <a href="logout.php" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Deconnexion</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
           <?php
              }
              else
              {
              ?>
                  <div class="nav-right text-center text-lg-right " style="min-width: 200px;">
                    <a class="button button-outline button-small" href="register.php">S'inscrire</a>
                  </div>
                  <div class="nav-right text-center text-lg-right " style="min-width: 221px;">
                    <a class="button button-outline button-small" href="login.php">Se connecter</a>
                  </div>
            <?php
              }
              ?>

          </div> 
        </div>
      </nav>
    </div>
  </header>

  <script>
    $(document).ready(function active(){
      $(".nav-item").addClass("active");
    })
  
  </script>