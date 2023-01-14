<?php 
include"config.php";

     ?>  
<?php 
 if (isset($_GET['page'])) {
   $page = $_GET['page'];
 }
 else
 {
  $page=1;
}


$post_per_page = 6;
$result=($page-1)*$post_per_page;
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <!-- META ============================================= -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  
  <!-- DESCRIPTION -->
  <meta name="description" content="EduChamp : Education HTML Template" />
  
  <!-- OG -->
  <meta property="og:title" content="EduChamp : Education HTML Template" />
  <meta property="og:description" content="EduChamp : Education HTML Template" />
  <meta property="og:image" content="" />
  <meta name="format-detection" content="telephone=no">
  
  <!-- FAVICONS ICON ============================================= -->
  <link rel="icon" href="img/al-sada.jpeg" type="image/x-icon" />
  <link rel="shortcut icon" type="image/x-icon" href="img/al-sada.jpeg" />
  
  <!-- PAGE TITLE HERE ============================================= -->
  <title>Al-Sada</title>
  
  <!-- MOBILE SPECIFIC ============================================= -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
  
  <!-- All PLUGINS CSS ============================================= -->
  <link rel="stylesheet" type="text/css" href="assets/css/assets.css">
  
  <!-- TYPOGRAPHY ============================================= -->
  <link rel="stylesheet" type="text/css" href="assets/css/typography.css">
  
  <!-- SHORTCODES ============================================= -->
  <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
  
  <!-- STYLESHEETS ============================================= -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
  
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>

  <!-- Header Top ==== -->
    <header class="header rs-nav">
  
    <div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
          <!-- Header Logo ==== -->
          <div class="menu-logo" >
            <a href="index.php"><img src="img/al-sada.jpeg" alt=""></a>
          </div>
          <!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <!-- Author Nav ==== -->
                    <div class="secondary-menu" >
                        <div class="secondary-inner">
                            <ul>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                <!-- Search Button ==== -->
                <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
              </ul>
            </div>
                    </div>

          <!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form  action="post.php">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
            <span id="search-remove"><i class="ti-close"></i></span>
                    </div>
          <!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown" >
            <div class="menu-logo">
              <a href="index.php"><img src="img/al-sada.jpeg" alt=""></a>
            </div>
                        <ul class="nav navbar-nav"> 
              <li class="active"><a href="javascript:;">Home </a>
                
              </li>
              <li><a href="javascript:;">About </a>
                
              </li>
                <li><a href="javascript:;">Contact us </a>
                
              </li>
            
            </ul>
          
                    </div>
          <!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- header END ==== -->
    <!-- Content -->
   
        <!-- inner page banner -->
     
    
  
        <!-- contact area -->
         <div class="content-block">
  
        <div class="container">
           <div class="row">
            <!-- Left part start -->
            <div class="col-lg-8">  

            <?php  

            if (isset($_GET['search'])) {
              $word = $_GET['search'];
              $postquery = "SELECT * FROM data WHERE title LIKE '%$word%' ORDER BY ID DESC LIMIT $result, $post_per_page";
            }
            else
            {
                $postquery = "SELECT * FROM data ORDER BY ID DESC LIMIT $result, $post_per_page";
            }

          
            $run = mysqli_query($con, $postquery);
            while($post = mysqli_fetch_assoc($run)) {
               $imageURL = 'uploads/'.$post["image"];
              ?>


          <a href="blog-details.php?id=<?php echo $post['id'];?>" style="text-decoration: none; color:black">
   
              <div class="blog-post blog-md clearfix">
                <div class="ttr-post-media"> 
     <a href="blog-details.php?id=<?php echo $post['id'];?>">
      <img src="<?php echo $imageURL;?>"alt="">Click</a> 
                </div>
                <div class="ttr-post-info">
                  <ul class="media-post">

                   
                   
      <h5 class="post-title"><a href="blog-details.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a> </h5>
                   <!-- write here in para to show -->
                  <p></p>
                  <div class="post-extra">
                    <a href="blog-details.php?id=<?php echo $post['id'];?>" class="btn-link">READ MORE</a>
                   
                  </div>
                </div>
              </div>          
          

 <?php 
            }

            ?>
        


              <!-- Pagination start -->

<?php   
if (isset($_GET['search'])) 
{
$word = $_GET['search'];
$q= "SELECT * FROM data WHERE title LIKE '%$word%'ORDER BY ID DESC LIMIT $result, $post_per_page  ";

}
else
{
  $q= "SELECT * FROM data" ;
  $r = mysqli_query($con,$q);
$total_post= mysqli_num_rows($r);
$total_pages= ceil($total_post/$post_per_page);
}
 ?>
   <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center ">

      <?php  
                if ($page>1) {
                  $switch="";
                }
                else
                {
                  $switch="disabled";
                }
              ?>
               <!--Next Button condition-->
              <?php  
                if ($page<$total_pages) {
                  $nswitch="";
                }
                else
                {
                  $nswitch="disabled";
                }
              ?>
              <li class="page-item <?php echo $switch  ?>">
                  <a class="page-link" 
                  href="?<?php if (isset($_GET['search'])) {echo "search=$word&";}?>page=<?php echo $page-1; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                 </li>
                 <?php  
                 for ($opage=1; $opage<=$total_pages; $opage++) {
                    ?>
                   <li class="page-item"><a class="page-link" href="?<?php if (isset($_GET['search'])) {echo "search=$word&";}?>page=<?php echo $opage  ?>"><?php echo $opage  ?></a></li>
                   <?php
                   }

                 ?>
                    
                    <li class="page-item <?php echo $nswitch  ?>">
                 <a class="page-link" href="?<?php if (isset($_GET['search'])) {echo "search=$word&";}?>page=<?php echo $page+1; ?>">Next</a>
             </li>
</ul>
</div>

              
              <!-- Pagination END -->
            
            <!-- Left part END -->
            <!-- Side bar start -->
    <?php  
            if (isset($_GET['search'])) {
              $word = $_GET['words'];
              $postquery = "SELECT * FROM data WHERE title LIKE '%$word%' ORDER BY ID DESC LIMIT $result, $post_per_page";
            }
            else
            {
                $postquery = "SELECT * FROM data ORDER BY ID DESC LIMIT $result, $post_per_page";
            }
            $run = mysqli_query($con, $postquery);
         while ($post = mysqli_fetch_assoc($run)) {
               
              ?>
 
      <div class="col-lg-4 sticky-top">
     <aside class="side-bar sticky-top">  
          <div class="widget">  
          <!--Right Side Bar-->
          <div class="card mb-3">
             <nav class="navbar navbar-light bg-light">
             <form class="form-inline">
             <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </nav>
            </div></div>


<?php  ?>
 <?php  
            if (isset($_GET['search'])) {
              $word = $_GET['search'];
              $postquery = "SELECT * FROM data WHERE title LIKE '%$word%' ORDER BY ID DESC LIMIT 0,1";
            }
            else
            {
           $postquery = "SELECT * FROM data ORDER BY ID DESC LIMIT 0,1";
            }
 
            $run = mysqli_query($con, $postquery);
            while ($A = mysqli_fetch_assoc($run)) {
          
              ?>
    
  
         

    <div class="widget recent-posts-entry">
    <h6 class="widget-title">Recent Posts</h6>

      <div class="widget-post-bx">              <div class="widget-post clearfix">
    <div class="ttr-post-media"> <a href="blog-details.php?id=<?php echo $A['id'];?>"> <img src="<?php echo $imageURL; ?>" width="70%" height="10%" alt=""> </div>               <div class="ttr-post-info">
      <div class="ttr-post-header">

        <h6 class="post-title"><a href="blog-details.php?id=<?php echo $A['id'];?>"><?php echo $A['title'] ?></a></h6>
                  <ul class="media-post">
            <li><a href="blog-details.php?id=<?php echo $A['id'];?>"><i class="fa fa-calendar"></i>Oct 23 2019</a></li>
          <li><a href="blog-details.php?id=<?php echo $A['id'];?>"><i class="fa fa-comments-o"></i>15 Comment</a></li>
                        </ul>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
                
                    <?php 
}                ?>
                <div class="widget widget_gallery gallery-grid-4">
                  <h6 class="widget-title">Our Gallery</h6>
                  <ul>
      <li><div><a href="#"><img src="assets/images/gallery/pic2.jpg" alt=""></a></div></li>
      <li><div><a href="#"><img src="assets/images/gallery/pic1.jpg" alt=""></a></div></li>
      <li><div><a href="#"><img src="assets/images/gallery/pic5.jpg" alt=""></a></div></li>
      <li><div><a href="#"><img src="assets/images/gallery/pic7.jpg"alt=""></a></div></li>
      <li><div><a href="#"><img src="assets/images/gallery/pic8.jpg" alt=""></a></div></li>
                  <li><div><a href="#"><img src="assets/images/gallery/pic9.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic3.jpg" alt=""></a></div></li>
                    <li><div><a href="#"><img src="assets/images/gallery/pic4.jpg" alt=""></a></div></li>
                  </ul>
                </div>
                
              </aside>
            </div>
            <!-- Side bar END -->
          </div>
        </div>
      </div>
        </div>
    </div>
    <!-- Content END-->
<!-- Footer ==== -->
    <footer>
        <div class="footer-top">
          <div class="container">
          <div class="pt-logo mr-auto">
              
            <a href="index.php"><img src="img/al-sada.jpeg"style="width: 150px; " alt="post-image"></a>
            </div>
            
            </div>
            
          </div>
        </div>
      </div>
            <div class="container">
                <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sign Up For A Newsletter</h5>
              <p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                            <div class="subscribe-form m-b20">
                <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                  <div class="ajax-message"></div>
                  <div class="input-group">
                    <input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
                    <span class="input-group-btn">
                      <button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
                    </span> 
                  </div>
                </form>
              </div>
                        </div>
                    </div>
          <div class="col-12 col-lg-5 col-md-7 col-sm-12">
            <div class="row">
              <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                <div class="widget footer_widget">
                  <h5 class="footer-title">Company</h5>
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-1.php">About</a></li>
                    <li><a href="contact-1.php">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                <div class="widget footer_widget">
                  <h5 class="footer-title">Get In Touch</h5>
                  <ul>
                    <li><a href="http://educhamp.themetrades.com/admin/index.php">Dashboard</a></li>
                    <li><a href="blog-classic-grid.php">Blog</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="event.php">Event</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                <div class="widget footer_widget">
                  <h5 class="footer-title">Courses</h5>
                  <ul>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="courses-details.php">Details</a></li>
                    <li><a href="membership.php">Membership</a></li>
                    <li><a href="profile.php">Profile</a></li>
                  </ul>
                </div>
              </div>
            </div>
                    </div>
          <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
                <li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
                <li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
                <li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
                <li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
                <li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
                <li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
                <li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
                <li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <!-- scroll top button -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>

<?php } ?>