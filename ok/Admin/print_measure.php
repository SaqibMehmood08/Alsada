<?php 
          include"config.php";
      
      $id=$_GET['id'];
              $sql = "SELECT * FROM measure where id={$id}  ";
        
            $run = mysqli_query($con,$sql)or die("Not Found");
            if (mysqli_num_rows($run)>0){
             while($row=mysqli_fetch_assoc($run)){
                 
             
               
    ?>





        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
   </style>
<!-- php padignation start -->






  <!--php padignatin ends -->
    <title>AL-Sada</title>
  </head>
  <body>
<form action="" method="post">
  












    <div class="container" >
  <div class="row" id="row1">
    <!--  -->
    <div class="col-sm-4">
      <!--line-1  -->
      <!-- treeq dairi  -->
       <strong style="text-align:left; float: left;color: royalblue; ">
        طريق الدائري. بالمقابل سوق الخضار
       </strong>
<!-- al , madina al , manwara
 -->
       <strong style="text-align:left; float: left; color: royalblue;"> المدينة المنورة</strong>
<br>
<br>
<!-- mobile: 059091082 -->
<strong style="text-align:left; float: left;color: royalblue;">جوال : ۰۵۹۰۹۱۰۸۷۲</strong>
   



  </div>
    <div class="col-sm-5">
      <center>
<img src="img/al-sada.jpeg" width="90%" height="140px">        
      </center>


    </div>
    <div class="col-sm-3">
      <!-- gentlemen's dress -->
      <strong style="text-align:right; float: right;color: royalblue;font-size: xx-large;">ثوب السادة </strong>
      <br>
      <!-- men's sewing -->
  <strong style="text-align:right; float: right;color: royalblue;"> الخياطة الرجالية
</strong><br>


    </div>
  </div>









 




  <div class="row" id="row3">
    <div class="col-sm-6" style="text-align:right; float: right;color: royalblue;">
      <!-- date  -->
<input type="date" name="accept_date" value="<?php echo $row ['accept_date']; ?>"> &nbsp&nbsp&nbsp
<strong > ت تاريخ التسليم </strong><br><br>

<input type="date" name="deliver_date" value="<?php echo $row ['deliver_date']; ?>">  &nbsp&nbsp&nbsp&nbsp&nbsp
<strong > تاريخ الاستلام </strong><br><br>


<!-- text -->
<input type="text" name="mublgh_fatorah" value="<?php echo $row ['mublgh_fatorah']; ?>"> &nbsp&nbsp&nbsp&nbsp
<strong > مبلغ الفاتورة  </strong><br><br>
<input type="text" name="al_madfooh" value="<?php echo $row ['al_madfooh']; ?>"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<strong >    المدفوع  </strong><br><br>
<input type="text" name="al_baki" value="<?php echo $row ['al_baki']; ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<strong > الباقي  </strong><br><br>
<input type="text" name="empty_box"  value="<?php echo $row ['empty_box']; ?>">&nbsp&nbsp
فتورة نمبر</div>


    <div class="col-md-6" style="text-align:right; float: right;color: royalblue;" >
      <input type="text" name="noh_alkamash1" value="<?php echo $row ['noh_alkamash1']; ?>"> 
<strong > نوع القماش  </strong><br><br>
<input type="text" name="noh_alkamash2"  value="<?php echo $row ['noh_alkamash2']; ?>"> 
<strong > </strong><br><br>
<input type="text" name="noh_alkamash3" value="<?php echo $row ['noh_alkamash3']; ?>"> 



<strong >  </strong><br><br>
<input type="text" name="noh_alkamash4" value="<?php echo $row ['noh_alkamash4']; ?>"> 
<strong >  </strong><br><br>
<input type="text" name="noh_alkamash5" value="<?php echo $row ['noh_alkamash5']; ?>"> 
<strong >    </strong><br><br>
<input type="text" name="noh_alkamash6" value="<?php echo $row ['noh_alkamash6']; ?>">



    </div>

<div class="row">
  <div class="col-12">
  <strong  style="float: right; text-align: right; font-size:x-large; large;"  >تفصيل</strong>
  <hr style="height: 30%;  ">
  </div>
</div>
<div class="row">
  <div class="col-4"style="float: rigt; text-align: left; ">
   <input type="text" name="koyti" value="<?php echo $row ['koyti']; ?>">
  <strong    >كويتي</strong>
<br>
<input type="text" name="jaab_sagher" value="<?php echo $row ['jaab_sagher']; ?>">
 <strong    >جيب صغير</strong>
  
  </div>

  <div class="col-4"style="float: right; text-align: right; ">
    <input type="text" name="katri" value="<?php echo $row ['katri']; ?>">
  <strong    >قطري</strong>

<br>
<input type="text" name="jaab_saudi" value="<?php echo $row ['jaab_saudi']; ?>">
 <strong    >جيب سعودي</strong>

 
  </div>

  

  <div class="col-4"  style="float: right; text-align: right;">

  <input type="text" name="saudi" value="<?php echo $row ['saudi']; ?>">
  <strong>سعودي </strong>
  <br>
  
  <input type="text" name="jaab_mukhfi" value="<?php echo $row ['jaab_mukhfi']; ?>">
  <strong    >جیب مخفي</strong>
  </div>


</div>


<!-- mid  left side article -->

<div class="row">
  <br>
  <div class="col-sm-4" style="border: 1px solid black;">
<img src="img/pocket1.jpeg" width="80px" height="80px">
<!-- box1 -->
  <input  type="text" name="pocInp1" style="width:20% ;" value="<?php echo $row ['pocInp1'];  ?>"

  >
    <input type="checkbox"  name="pocket" value="pocket01" 
<?php 
if ($row['pocket']=='pocket01') {
  echo "checked";
}
   ?> >
 

     <input type="text" name="pocInp2"style="width:20%;"
value="<?php echo $row ['pocInp2'];  ?>"
     >    
  <img src="img/pocket2.jpeg" width="80px" height="80px">
  <input type="checkbox" name="pocket" value="pocket02"
<?php 
if ($row['pocket']=='pocket02') {
  echo "checked";
}
   ?> >
  
 
 <br><br>
 
  <img src="img/pocket3.jpeg" width="80px" height="80px">
   <input type="text" name="pocInp3" style="width:20%"
value="<?php echo $row ['pocInp3'];  ?>"
   >
<input type="checkbox"  name="pocket" value="pocket03"
<?php 
if ($row['pocket']=='pocket03') {
  echo "checked";
}
   ?> >


   <input type="text" name="pocInp4" style="width:20%"
value="<?php echo $row ['pocInp4'];  ?>"
   >
     <img src="img/pocket4.jpeg" width="80px" height="80px"> 
<input type="checkbox"  name="pocket" value="pocket04"
<?php 
if ($row['pocket']=='pocket04') {
  echo "checked";
}
   ?> >


 <br><br>
   <img src="img/pocket5.jpeg" width="80px" height="80px">
     <input type="text" name="pocInp5" style="width:20%"
value="<?php echo $row ['pocInp5'];  ?>"
     >
    <input type="checkbox"  name="pocket" value="pocket05"

<?php 
if ($row['pocket']=='pocket05') {
  echo "checked";
}
   ?> >
    




  
     <input type="text" name="pocInp6" style="width:20%"
value="<?php echo $row ['pocInp6'];  ?>"
     >
  <img src="img/pocket6.jpeg" width="80px" height="80px">
  <input type="checkbox"  name="pocket" value="pocket06"
<?php 
if ($row['pocket']=='pocket06') {
  echo "checked";
}
   ?> 
  >
  <br><br>

    
  <img src="img/pocket7.jpeg" width="80px" height="80px">
<input type="text" name="pocInp7" style="width:20%"
value="<?php echo $row ['pocInp7'];  ?>"
>
  <input type="checkbox" name="pocket" value="pocket07"

<?php 
if ($row['pocket']=='pocket07') {
  echo "checked";
}
   ?> 
  >

       <input type="text" name="pocInp8" style="width:20%"
value="<?php echo $row ['pocInp8'];  ?>"
       >   
    <img src="img/pocket8.jpeg" width="80px" height="80px">
<input type="checkbox" name="pocket" value="pocket08"
<?php 
if ($row['pocket']=='pocket08') {
  echo "checked";
}
   ?> 
>

 

    <img src="img/pocket9.jpeg" width="80px" height="80px">
       <input type="text" name="pocInp9" style="width:20%"
value="<?php echo $row ['pocInp9'];  ?>"
       >
    <input type="checkbox"  name="pocket"value="pocket09"  
<?php 
if ($row['pocket']=='pocket09') {
  echo "checked";
}
   ?> 
    >

   <input type="text" name="pocInp10" style="width:20%" 
value="<?php echo $row ['pocInp10'];  ?>"
   >
    <img src="img/pocket10.jpeg" width="80px" height="80px">
    
    <input type="checkbox"  name="pocket" value="pocket10"

<?php 
if ($row['pocket']=='pocket10') {
  echo "checked";
}
   ?> 
    >
    <br><br>
    <textarea style="size: 10%;" name="message"  placeholder="description"><?php echo $row['message'] ?></textarea>

  </div>

  <div class="col-sm-5" >

   <img src="img/patti1.jpeg" width="50px" height="80px">
     <input type="text" name="patiInp1" style="width:28%"
value="<?php echo $row ['patiInp1'];  ?>">


     
    <input type="checkbox" name="patti" value="patti1"

<?php 
if ($row['patti']=='patti1') {
  echo "checked";
}


 ?>

    >

   <input type="text" name="patiInp2"style="width:28%"
value="<?php echo $row ['patiInp2'];  ?>"
   > 
<img src="img/patti2.jpeg" width="50px" height="80px">
  <input type="checkbox"  name="patti"  value="patti2"

<?php 
if ($row['patti']=='patti2') {
  echo "checked";
}


 ?>


  >
<br><br>
   <img src="img/patti3.jpeg" width="50px" height="80px">
     <input type="text" name="patiInp3" style="width:28%"
value="<?php echo $row ['patiInp3'];  ?>"
     >
    <input type="checkbox" name="patti"  value="patti3"

<?php 
if ($row['patti']=='patti3') {
  echo "checked";
}


 ?>


    >
 
     <input type="text" name="patiInp4" style="width:28%"
value="<?php echo $row ['patiInp4'];  ?>"

     >
    <img src="img/patti4.jpeg" width="50px" height="80px">    
      <input type="checkbox" name="patti"  value="patti4"
<?php 
if ($row['patti']=='patti4') {
  echo "checked";
}
 ?>
    >
      <br><br>
     <img src="img/patti5.jpeg" width="40px" height="80px">
     <input type="text" name="pattiInp5" value="<?php echo $row ['patiInp5'];  ?>">
     <input type="checkbox" name="patti" value="patti5"

<?php 
if ($row['patti']=='patti5') {
  echo "checked";
}


 ?>

     >
       <br><br>
   

<label>تاركيا</label>
<input type="checkbox" name="tarkia" value="tarkia1" 

<?php 
if ($row['tarkia']=='tarkia1') {
  echo "checked";
}
 ?>
>
<label>كاغ صدف</label>
<input type="checkbox" name="tarkia" value="tarkia2"

<?php 
if ($row['tarkia']=='tarkia2') {
  echo "checked";
}


 ?>


>
<label>تعق_صدف</label>
<input type="checkbox" name="tarkia" value="tarkia3" 
<?php 
if ($row['tarkia']=='tarkia3') {
  echo "checked";
}


 ?>
 >
<label>تعق مخفي</label>
<input type="checkbox" name="tarkia" value="tarkia4"

<?php 
if ($row['tarkia']=='tarkia4') {
  echo "checked";
}


 ?>

>
<input type="text" style="font-weight:bold" name="kalai_message"  placeholder="<?php echo $row ['kalai_message'];?>">
<br><br><br>
 <div class="col-12" style="float: right; ">

     <img src="img/terra1.jpeg" width="50px" height="80px">
        <input type="text" name="k1" style="width:28%" value="  <?php   echo $row ['k1']?>">
    <input type="checkbox" name="kalai" value="kalai1"
<?php 
if ($row['kalai']=='kalai1') {
  echo "checked";
}


 ?>


     >

     <img src="img/terra2.jpeg" width="50px" height="80px">
        <input type="text" name="k2"style="width:28%" value="  <?php   echo $row ['k2']?>">
          <input type="checkbox" name="kalai" value="kalai2"

          <?php 
if ($row['kalai']=='kalai2') {
  echo "checked";
}


 ?>
          >


<br>
    
     <img src="img/terra3.jpeg" width="50px" height="80px">
        
   <input style="width:28%" type="text" name="k3" value="  <?php   echo $row ['k3']?>">
    <input type="checkbox" name="kalai"  value="kalai3" 

<?php 
if ($row['kalai']=='kalai3') {
  echo "checked";
}


 ?>

     >
     
</div>
  
  </div>

  <div class="col-sm-3"  style="float: right; text-align: right; border:1px solid black;">
    
    <input type="text" name="tool_kadam" value="<?php echo $row ['tool_kadam'];  ?>"> 
<strong  >طول قدام</strong><br><br>
<input type="text" name="tool_warah" value="<?php echo $row ['tool_warah'];  ?>"> 
<strong >طوال وراء</strong><br><br>
<input type="text" name="al_kataf"  value="<?php echo $row ['al_kataf'];  ?>"> 

<strong > الكتف </strong><br><br>
<input type="text" name="tool_alkamSada" value="<?php echo $row ['tool_alkamSada'];  ?>"> 
<strong > تطول الكم سادة  </strong><br><br>
<input type="text" name="Rakbah_kalab" value="<?php echo $row ['Rakbah_kalab'];  ?>"> 
<strong > الرقبة قلاب</strong><br><br>

<input type="text" name="Rakbah_adi" value="<?php echo $row ['Rakbah_adi'];  ?>"> 
<strong >الرقبة عادي</strong><br><br>


<input type="text" name="wast_Sadar" value="<?php echo $row ['wast_Sadar'];  ?>"> 
<strong >وسط الصدر </strong><br><br>


<input type="text" name="wast_teht"value="<?php echo $row ['wast_teht'];  ?>" > 
<strong > وسط تحت</strong><br><br>
 

  </div>



</div>





<!-- mid  left side article -->





<!-- mid right side aticle -->





<br>  <br>  
<!-- foot content -->
<div class="row">
  <div class="col-12">
    
   <table class="table table-bordered border-primary">
<thead>
<th>  <img src="img/tab3.jpeg" width="80px" height="80px"></th> 
  <th>     <img src="img/tab1.jpeg" width="80px" height="80px"></th>
  <th>     <img src="img/tab2.jpeg" width="80px" height="80px"></th>
           <th> <img src="img/tab4.jpeg" width="80px" height="80px"></th>
         <th>     <img src="img/tab5.jpeg" width="80px" height="80px"></th>
   <th>     <img src="img/tab6.jpeg" width="80px" height="80px"></th>
     <th>     <img src="img/tab7.jpeg" width="80px" height="80px"></th>
       
</thead>
<tbody > 
<td ><input style="width: 80%;" type="text" name="tab3" value=" <?php   echo $row['tab3'] ?>"></td>
    <td ><input  style="width: 80%; " type="text" name="tab1" value=" <?php   echo $row['tab1'] ?>"></td>
   <td><input style="width: 80%;" type="text" name="tab2" value=" <?php   echo $row['tab2'] ?>"></td>
     <td><input style="width: 80%;" type="text" name="tab4"
      value=" <?php echo $row['tab4'] ?>"></td>
      <td ><input style="width: 80%;" type="text" name="tab5"
value="<?php   echo $row['tab5']; ?> "
        ></td>
   <td><input style="width: 80%;" type="text" name="tab6"
value=" <?php   echo $row['tab6']; ?>"
    ></td>
    <td ><input style="width: 80%;" type="text" name="tab7"
value=" <?php   echo $row['tab7']; ?>"
      ></td>
</tbody>
</table>
  

</table>
  </div>
</div>
<div class="row">
  <div class="col-12">
  <center>
    <input type="text" name="customer_name"  value="<?php echo $row ['customer_name']; ?>">
    <strong  style=" font-size:x-large; large;"  >اسم العميل </strong>
 <br><br><br>
 <img src="img/phone.jpg"  style=" width: 15%; height: 50px; float: right;" >

 <input type="text" name="phone"  style=" "  value="<?php echo $row ['phone']; ?>">اتصل
 <hr>
<input type="submit" name="Submit">
  </center>
  

  </div>
</div>





  </div>

 </form>
<?php }} ?>








  </body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    
  </body>
</html>   
<?php 

$con = mysqli_connect("localhost","root","","project");
$msg="";
?>
<?php 




if (isset($_POST['Submit'])) {
  $accept_date = $_POST['accept_date'];
   $deliver_date = $_POST['deliver_date'];
$mublgh_fatorah = $_POST['mublgh_fatorah'];
     $al_madfooh = $_POST['al_madfooh'];
      $al_baki = $_POST['al_baki'];
       $empty_box = $_POST['empty_box'];
        $noh_alkamash1 = $_POST['noh_alkamash1'];
         $noh_alkamash2 = $_POST['noh_alkamash2'];
          $noh_alkamash3 = $_POST['noh_alkamash3'];
           $noh_alkamash4 = $_POST['noh_alkamash4'];
            $noh_alkamash5 = $_POST['noh_alkamash5'];
             $noh_alkamash6 = $_POST['noh_alkamash6'];

              $saudi = $_POST['saudi'];
               $jaab_sagher = $_POST['jaab_sagher'];
                $katri = $_POST['katri'];
                 $jaab_saudi = $_POST['jaab_saudi'];
                  $koyti = $_POST['koyti'];
$jaab_mukhfi = $_POST['jaab_mukhfi'];
$pocInp1 = $_POST['pocInp1'];
$pocInp2 = $_POST['pocInp2'];
$pocInp3 = $_POST['pocInp3'];
$pocInp4 = $_POST['pocInp4'];
$pocInp5 = $_POST['pocInp5'];
$pocInp6 = $_POST['pocInp6'];
$pocInp7 = $_POST['pocInp7'];
$pocInp8= $_POST['pocInp8'];
 $pocInp9 = $_POST['pocInp9'];
$pocInp10 = $_POST['pocInp10'];
          

             $patiInp1 = $_POST['patiInp1'];
               $patiInp2 = $_POST['patiInp2'];
               $patiInp3 = $_POST['patiInp3'];
               $patiInp4 = $_POST['patiInp4'];
                  $patiInp5 = $_POST['pattiInp5'];
                $patti = $_POST['patti'];
                  
          $tarkia = $_POST['tarkia'];
             $kalai = $_POST['kalai'];
    
      

                    $tool_kadam = $_POST['tool_kadam'];
                     $tool_warah = $_POST['tool_warah'];
                      $al_kataf = $_POST['al_kataf'];
                       $tool_alkamSada = $_POST['tool_alkamSada'];
                      $Rakbah_kalab = $_POST['Rakbah_kalab']; 
                $Rakbah_adi = $_POST['Rakbah_adi'];
                $wast_Sadar = $_POST['wast_Sadar'];
                 $wast_teht= $_POST['wast_teht'];
           $tab1 = $_POST['tab1'];
             $tab2 = $_POST['tab2'];
            $tab3 = $_POST['tab3'];
              $tab4 = $_POST['tab4'];
                $tab5 = $_POST['tab5'];  
                $tab6 = $_POST['tab6'];
                  $tab7 = $_POST['tab7'];
          
                     $customer_name = $_POST['customer_name'];
                        $phone = $_POST['phone'];
                         $message= $_POST['message'];

                          $pocket= $_POST['pocket'];
                           $k1= $_POST['k1'];
                          $k2= $_POST['k2'];
                             $k3= $_POST['k3'];
                             $kalai_message= $_POST['kalai_message'];
                             
$sql="UPDATE  measure set accept_date='$accept_date',deliver_date='$deliver_date',mublgh_fatorah='$mublgh_fatorah',al_madfooh='$al_madfooh',al_baki='$al_baki',empty_box='$empty_box',noh_alkamash1='$noh_alkamash1',noh_alkamash2='$noh_alkamash2',noh_alkamash3='$noh_alkamash3', noh_alkamash4='$noh_alkamash4',noh_alkamash5='$noh_alkamash5', noh_alkamash6='$noh_alkamash6',saudi='$saudi', jaab_sagher='$jaab_sagher', katri='$katri', jaab_saudi='$jaab_saudi', koyti='$koyti' , jaab_mukhfi='$jaab_mukhfi',tool_kadam='$tool_kadam',tool_warah='$tool_warah',al_kataf='$al_kataf', tool_alkamSada='$tool_alkamSada',Rakbah_kalab='$Rakbah_kalab', Rakbah_adi='$Rakbah_adi',wast_Sadar='$wast_Sadar', wast_teht='$wast_teht',tab1='$tab1',tab2='$tab2',tab3='$tab3',tab4='$tab4',tab5='$tab5',tab6='$tab6',tab7='$tab7', customer_name='$customer_name',phone='$phone',k1='$k1',k2='$k2',k3='$k3',tarkia='$tarkia',kalai='$kalai',pocInp1='$pocInp1',pocInp2='$pocInp2',pocInp3='$pocInp3',pocInp4='$pocInp4',pocInp5='$pocInp5',pocInp6='$pocInp6',pocInp7='$pocInp7',pocInp8='$pocInp8',pocInp9='$pocInp9',pocInp10='$pocInp10',patiInp1='$patiInp1',patiInp2='$patiInp2',patiInp3='$patiInp3',patiInp4='$patiInp4',patiInp5='$patiInp5',
pocket='$pocket',patti='$patti',message='$message',
kalai_message='$kalai_message'
 where id='$id'";

if(mysqli_query($con,$sql)) {    

     $msg = "Update  added Successfuly...!";
       echo "<script> alert('Update  added Successfuly 😄😄😄')  </script>";
       
       }
   

   else
   {
    echo "<script> alert('Query error')  </script>";
   }
  }


?>