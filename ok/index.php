         
<?php  
      include"config.php";
    
              $postquery = "SELECT * FROM data  ";
            
            $run = mysqli_query($con,$postquery);
            while ($A = mysqli_fetch_assoc($run)) {
               
              ?>
<?php } ?>

<?php 

$msg="";
$output="";
if(isset($_POST['submit']))
{
$searchq=$_POST['searchWord'];
$searchq= preg_replace("#[^0-9a-z]#i","", $searchq);
$q=("SELECT * FROM data WHERE title LIKE '%$searchq%' ") or die ("could not found search ");
$run=mysqli_query($con,$q);
 $count= mysqli_num_rows($run);
 if($count==0){
$output="There is nothing to show you";
}
else{
$msg="Recod found";
	
while($row =mysqli_fetch_assoc($run)){
  $Mediname =$row['title'];
  $price=$row['content'];
 

  $output .= '<div>'.$Mediname.''.$price.'</div>';
}
 }
}
?>




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
	<meta name="description" content="Al-Sada"and Exam Center  />
	<!-- OG -->
	<meta property="og:title" content="Al-Sada"and Exam Center  />
	<meta property="og:description" content="Saqib"and Exam Center  />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="img/al-sada.jpeg" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="img/al-sada.jpeg" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Al-Sada </title>
	
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
     
	<center><h2 href="blog-details.php?id=<?php echo $A['id'];?>"><?php  print($msg);?></h2> </center>
	

	<center><h5 href="blog-details.php?id=<?php echo $A['id'];?>"><?php print("$output");?></h5></center>
<br>
<br>
<div class="page-wraper">
<div id="loading-icon-bx"></div>

	<!-- Header Top ==== -->
    <header class="header rs-nav">
	
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo" >
						<a href="index.php"><img src="img/al-sada.jpeg" alt="pic"></a>
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
                 <form  action=" index.php" method="post">
                            <input name="search" value="search" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown" >
						<div class="menu-logo">
							<a href="index.php"><img src="assets/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<li class="active" ><a href="index.php" >Home </a>
								
							</li>
							<li><a href="javascript:;" onfocus="About()"> About</a>
								
							</li>
								<li><a href="javascript:;  " onfocus="contact()">Contact us </a>
							</li>					
						</ul>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>

    <!-- header END ==== -->
    <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px 0px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px 5px;
  cursor: pointer;
}

.button2 {background-color: orange;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} 
.button6 {background-color: royalblue;} /* Black */
</style>
</head>
	<!-- Content -->
   <div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="blog-post blog-md clearfix"></div>
        <!-- inner page banner -->

		
<center>
	<h2 id="about" style="background-color: orange; color: white;"></h2>
	<h2 id="contact" style="background-color: orange; color: white;"></h2>
	<h4>Go to Billing</h4>
	
<a href="ind.php" title="">
	<button class="button">Start Selling</button>

	

</a>
<br><br>
<h4> Print Recipt</h4>
<a href="Customer.php" title="">
	
	<button class="button button2">Print recipt</button>
</a>

<h4>See ALL sales</h4>

<a href="All_Data.php" title="">
	
	<button class="button button4">Sales</button>
</a>
<h4> Cloth Designs</h4>

<a href="post.php" title="">
	
	<button class="button button6">Designs</button>
</a>
<h4>Recieved Amounts</h4>

<a href="money.php" title="">
	
	<button class="button button3">Amounts</button>
</a>
<h4> Login Admin</h4>
<a href="admin/login.php" title="">
	<button class="button">Admin</button>

</a>
</center>


<style>
   
button{
width:80px;
color:white;
border-radius:10px;
color:white;																
backface-visibility:hidden;


}



  </style>   		
  <script>
  		function About()
  		{
  				document.getElementById("about").innerHTML="Saqib Mehmood";


  		}
  		function contact()
  		{
  	document.getElementById("contact").innerHTML="https://github.com/DeveloperSaqi";


  		}
  	function calc()
  	{
    var n1=parseFloat( document.getElementById("n1").value);
    var n2=parseFloat(document.getElementById("n2").value);
     var oper=document.getElementById("operator").value;
  	if (oper==='+') 
  	{
  		var n2=document.getElementById("result").value=n1+n2;

  	}

  	}
 function sum(){
 	var num1=parseFloat( document.getElementById("num1").value);
    var num2=parseFloat(document.getElementById("num2").value);
    
    if (num1 !=='') 
    {

    var num2=document.getElementById('sumed').value=num1+num2;	
    }
     

}


  </script>
  <br><br><br><br>
<center>
	<h3>Calculator</h3>
<input type="text"  placeholder="Enter a number" name="text" id="num1" value=""><br><br>
	<input type="text" onmouseleave ="sum()" placeholder="Enter a number" name="text" id="num2" value=""><br><br>
	
Sum=<input type="text" placeholder="Sum is:" id="sumed"><br>

<br><br> <br>
</center>
						<!-- Left part start -->
	
		</style>
								
		<div class="ttr-post-info">
			<div class="form-group">
  
   </div>
   <br />
   <div id="result"></div>  
 
				<div class="post-extra">								
									</div>
								</div>				
							
						
							
	
        <!-- contact area -->
        	
						<!-- Left part start -->
			
											
						

							<!-- Pagination start -->

<?php   
if (isset($_GET['search'])) 
{
$word = $_GET['search'];
$q= "SELECT * FROM data ORDER BY ID DESC WHERE title LIKE '%$word%' LIMIT $result, $post_per_page  ";
}
else
{
  $q= "SELECT * FROM data" ;
  $r = mysqli_query($con,$q);
$total_post= mysqli_num_rows($r);
$total_pages= ceil($total_post/$post_per_page);
}
 ?>

</div>

<?php  ?>
		
							<!-- Pagination END -->
						
						<!-- Left part END -->
			
						<!-- Side bar start -->
	
    <div class="col-lg-4 sticky-top">
     <aside class="side-bar sticky-top">  
        <div class="widget">  
          <!--Right Side Bar-->
        <div class="card mb-3">

         <nav class="navbar navbar-light bg-light">


         <form class="form-inline" role="search"  action="index.php" method="Post" >


       
   
 	
         
            </form>
           </nav>
           
        </div>

   

		<div class="widget recent-posts-entry">
		<h6 class="widget-title"></h6>

			<div class="widget-post-bx">
		<div class="widget-post clearfix">
		<div class="ttr-post-media"><img src=""> </div>						<div class="ttr-post-info">
			<div class="ttr-post-header">

	<h6 class="post-title">
	<a href="blog-details.php"></a></h6>
						<ul class="media-post">
						<li><a href="#"><i class=""></i></a></li>
					<li><a href="#"><i class=""></i></a></li>

												</ul>
											</div>
										</div>

									
								<div class="widget widget_gallery gallery-grid-4">
									<h6 class="widget-title"></h6>
									<ul>
			<li><div><a href="#"><img src="" alt=""></a></div></li>
			<li><div><a href="#"><img src="" alt=""></a></div></li>
			<li><div><a href="#"><img src="" alt=""></a></div></li>
			<li><div><a href="#"><img src=""alt=""></a></div></li>
			<li><div><a href="#"><img src="" alt=""></a></div></li>
									<li><div><a href="#"><img src="" alt=""></a></div></li>
										<li><div><a href="#"><img src="" alt=""></a></div></li>
										<li><div><a href="#"><img src="" alt=""></a></div></li>
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
        
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title"></h5>
							<p class="text-capitalize m-b20"></p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="" >
									<div class="ajax-message"></div>
									<div class="input-group">
									
										<span class="input-group-btn">
											
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
									<h5 class="footer-title"></h5>
									<ul>
										<li><a href="index.php"></a></li>
										<li><a href="about-1.php"></a></li>
										<li><a href="contact-1.php"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title"></h5>
									<ul>
										<li><a href=""></a></li>
										<li><a href="blog-classic-grid.php"></a></li>
										<li><a href="portfolio.php"></a></li>
										<li><a href="event.php"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title"></h5>
									<ul>
										<li><a href="courses.php"></a></li>
										<li><a href="courses-details.php"></a></li>
										<li><a href="membership.php"></a></li>
										<li><a href="profile.php"></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title"></h5>
                            <ul class="magnific-image">
								<li><a href="" class="magnific-anchor"><img src="" alt=""></a></li>
								<li><a href="" class="magnific-anchor"><img src="a" alt=""></a></li>
								<li><a href="" class="magnific-anchor"><img src="" alt=""></a></li>
								<li><a href="" class="magnific-anchor"><img src="" alt=""></a></li>
								<li><a href="" class="magnific-anchor"><img src="" alt=""></a></li>
								<li><a href="" class="magnific-anchor"><img src="" alt=""></a></li>
								<li><a href="" class="magnific-anchor"><img src="" alt=""></a></li>
								<li><a href="" class="magnific-anchor"><img src="" alt=""></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Saqib Mehmood</a></div>
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







      



      