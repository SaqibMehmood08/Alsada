



  <?php 
   include"config.php";
   
  ?>
     

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Web_Post || Admin Coursea</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

 
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
<?php
include"inc/nav.php";  
?>
    <!--sidebar start-->
<?php
include"inc/side.php";  
?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-file-text-o"></i>Web Post</li>
            </ol>
          </div>
        </div>
                

<!-- Editer--> 
      <form method="post" action="insert.php" class="form-horizontal" enctype="multipart/form-data">

        <div class="row">

          <div class="col-lg-12">
          



            <section class="panel">
                  <header class="panel-heading">

                Add Post
              </header>
              <div class="panel-body">

                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="insert.php">
                    <div class="form-group ">
                                 
                      <label for="cname" class="control-label col-lg-2">Post Title <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="title" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2"> Category<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select name="category" class="form-control">
                          <option value="">Select category</option>
                       <?php  
                 $sql="SELECT * FROM data";
                          $query=mysqli_query($con,$sql);
                          while($cat=mysqli_fetch_assoc($query)){
                          ?>
                      <option value="<?php echo $cat['title']; ?> "> <?php echo $cat['title']; ?></option>
                            
                        <?php 
                        }
                 
                        ?>        
                        
                        </select>
                      </div>
                    </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2">Content</label>
                          <div class="col-sm-10">
                            <textarea class="form-control ckeditor" name="content" rows="6"></textarea>
                          </div>
                        </div>


                       <div class="form-group">
                       <label name="select_image" class="control-label col-sm-2">Select image 
                       
                        
                       </label>

                     
                     <div class="col-sm-10">

                   <input  type="file" name="file" class="form-control" value="">
                
                    
                          </div>
                     
                       
                     </div> 

                        <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                       <button class="btn btn-primary" type="submit" name="post" >Submit</button>
                        <button class="btn btn-default" type="reset" >Reset</button>

                      </div>
 

            </section>

   
          </div>
     
        </div> 

      </form> 


       
        <!-- page end-->
      </section>
    
    </section>

    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
       
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
<?php                      
                    if (isset($_POST['post'])) {
                      $title=$_POST['title'];
                      $category=$_POST['category'];
                      $content=$_POST['content'];
                  
          $sql="INSERT INTO data(title,category,content)VALUES('$title','$category','$content')";
        
        if (mysqli_query($con,$sql)) {
    
     $msg = "New category added Successfuly...!";
   }
   else
   {
    echo "<script> alert('Query error')  </script>";
   }
    }   
                      ?><?php  ?>