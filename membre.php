<?php
  include_once ('template/topbar.php');  
  include_once ('functions/members_func.php');
  if (islogged() == 0) {
    header("Location:login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liste des membres du réseau</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  
  <!--================Header Menu Area =================-->


  <!--================ Banner SM Section start =================-->
  <section class="hero-banner hero-banner-sm text-center">
    <div class="container">
      <h1>Liste des membres du réseau</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">members</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================ Banner SM Section end =================-->



    <!--================Blog Area =================-->
    <section class="blog_area section-margin">
      <div class="container">
          <div class="row">
              <!--<div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-1.jpg" alt="">
                          <a href="#" class="blog_item_date">
                            <h3>15</h3>
                            <p>Jan</p>
                          </a>
                        </div>
                        
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                              <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                      </article>
                      
                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-2.jpg" alt="">
                          <a href="#" class="blog_item_date">
                            <h3>15</h3>
                            <p>Jan</p>
                          </a>
                        </div>
                        
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                              <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                      </article>

                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-3.jpg" alt="">
                          <a href="#" class="blog_item_date">
                            <h3>15</h3>
                            <p>Jan</p>
                          </a>
                        </div>
                        
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                              <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                      </article>

                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-4.jpg" alt="">
                          <a href="#" class="blog_item_date">
                            <h3>15</h3>
                            <p>Jan</p>
                          </a>
                        </div>
                        
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                              <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                      </article>

                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-5.jpg" alt="">
                          <a href="#" class="blog_item_date">
                            <h3>15</h3>
                            <p>Jan</p>
                          </a>
                        </div>
                        
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Google inks pact for new 35-storey office</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                              <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                      </article>
                      


                      <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">
                                          <span class="ti-arrow-left"></span>
                                      </span>
                                  </a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">1</a>
                              </li>
                              <li class="page-item active">
                                  <a href="#" class="page-link">2</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Next">
                                      <span aria-hidden="true">
                                          <span class="ti-arrow-right"></span>
                                      </span>
                                  </a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>-->
              <div class="col-lg-12">
                  <div class="blog_right_sidebar">
                    <!--  <aside class="single_sidebar_widget search_widget">
                          <form action="#">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                                <div class="input-group-append">
                                  <button class="btn" type="button"><i class="ti-search"></i></button>
                                </div>
                              </div>
                            </div>
                            <button class="button rounded-0 w-100" type="submit">Search</button>
                          </form>
                      </aside> -->

                      <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Membres</h4>
                        <ul class="list cat-list">
                        <?php
                            foreach(getmembers() as $member){

                             if ($member['email'] != $_SESSION['user']) {
                             
                          ?>
                                <li>
                                <a href="tchat.php?user=<?= $member['email'] ?>" class="d-flex">
                                    <p><?php echo $member['nom'].' '.$member['prenom']; ?></p>
                                </a>
                            </li>
                          <?php
                              
                            }

                            }
                          ?>
                            
                        </ul>
                      </aside>

                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title"> Recent Post</h3>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post1.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>From life was you fish...</h3>
                                  </a>
                                  <p>January 12, 2019</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post2.jpg" alt="post">                              
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>The Amazing Hubble</h3>
                                  </a>
                                  <p>02 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post3.jpg" alt="post">                              
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>Astronomy Or Astrology</h3>
                                  </a>
                                  <p>03 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post4.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>Asteroids telescope</h3>
                                  </a>
                                  <p>01 Hours ago</p>
                              </div>
                          </div>
                      </aside>
                     <!-- <aside class="single_sidebar_widget tag_cloud_widget">
                          <h4 class="widget_title">Tag Clouds</h4>
                          <ul class="list">
                              <li>
                                  <a href="#">project</a>
                              </li>
                              <li>
                                  <a href="#">love</a>
                              </li>
                              <li>
                                  <a href="#">technology</a>
                              </li>
                              <li>
                                  <a href="#">travel</a>
                              </li>
                              <li>
                                  <a href="#">restaurant</a>
                              </li>
                              <li>
                                  <a href="#">life style</a>
                              </li>
                              <li>
                                  <a href="#">design</a>
                              </li>
                              <li>
                                  <a href="#">illustration</a>
                              </li>
                          </ul>
                      </aside>


                      <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i1.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i4.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i6.png" alt="">
                                </a>
                            </li>
                        </ul>
                      </aside>


                      <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email" required>
                          </div>
                          <button class="button rounded-0 w-100" type="submit">Subscribe</button>
                        </form>
                      </aside>-->
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->




  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>About Us</h4>
          <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
          <a class="navbar-brand logo_h d-none d-xl-block" href="index.html"><img src="img/logo.png" alt=""></a>
				</div>
				<div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Contact Info</h4>
					<ul>
						<li>Address: Your address goes here, your demo address.</li>
						<li><a href="tel:+88044338899">Phone: +880 44338899</a></li>
						<li><a href="mailto:info@colorlib.com">Email: info@colorlib.com</a></li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Important Link</h4>
					<ul>
						<li><a href="#">WHMCS-bridge</a></li>
						<li><a href="#">Search Domain</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Shopping Cart</a></li>
						<li><a href="#">Our Shop</a></li>
					</ul>
				</div>
				<div class="offset-xl-1 col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Newsletter</h4>
          <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open</p>
          
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
            method="get">
              <div class="input-group">
                <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                <div class="input-group-append">
                  <button class="btn click-btn" type="submit">
                    <i class="ti-arrow-right"></i>
                  </button>
                </div>
              </div>
              <div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
            </form>
          </div>
          
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
					<a href="#"><i class="ti-facebook"></i></a>
					<a href="#"><i class="ti-twitter-alt"></i></a>
					<a href="#"><i class="ti-dribbble"></i></a>
					<a href="#"><i class="ti-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->




  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>   
</body>
</html>