
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
  
 <link rel="stylesheet" href="style.css">
   </style>
    <title>AL-Sada</title>
  </head>
  <body>
    <form id="myForm" autocomplete="off" method="POST" action="customer.php">
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
 --><br>
       <strong style="text-align:left; float: left; color: royalblue;"> المدينة المنورة</strong>
<br>
<br>
<!-- mobile: 059091082 -->
<strong style="text-align:left; float: left;color: royalblue;">جوال : ۰٥۸۰٤۷٤٥۰۰</strong>
   



  </div>
    <div class="col-sm-5">
      <center>
<img src="img/al-sada.jpeg" width="100%" height="160px">        
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








<br><br>




  <div class="row" id="row3">
    <div class="col-sm-6" style="text-align:right; float: right;color: royalblue;">
      <!-- date  -->
      
<input type="date" name="accept_date"> &nbsp&nbsp&nbsp
<strong > ت تاريخ التسليم </strong><br><br>

<input type="date" name="deliver_date"> &nbsp&nbsp&nbsp&nbsp&nbsp
<strong > تاريخ الاستلام </strong><br><br>


<!-- text -->
<input type="text" name="mublgh_fatorah"> &nbsp&nbsp&nbsp&nbsp
<strong > مبلغ الفاتورة  </strong><br><br>
<input type="text" name="al_madfooh"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<strong >    المدفوع  </strong><br><br>
<input type="text" name="al_baki"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<strong > الباقي  </strong><br><br>
<input type="text" name="empty_box">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
فتورة نمبر    </div>


    <div class="col-md-6" style="text-align:right; float: right;color: royalblue;" >
      <input type="text" name="noh_alkamash1"> 
<strong > نوع القماش  </strong><br><br>
<input type="text" name="noh_alkamash2"> 
<strong > </strong><br><br>
<input type="text" name=noh_alkamash3> 



<strong >  </strong><br><br>
<input type="text" name="noh_alkamash4"> 
<strong >  </strong><br><br>
<input type="text" name="noh_alkamash5"> 
<br><br>
<input type="text" name="noh_alkamash6">
<strong >  رقم قدیم   </strong>


    </div>

<div class="row">
  <div class="col-12">
  <strong  style="float: right; text-align: right; font-size:x-large; large;"  >تفصيل</strong>
  <hr style="height: 30%;  ">
  </div>
</div>
<div class="row">
  <div class="col-4"style="float: rigt; text-align: left; ">
   <input type="radio" name="koyti" value="koyti">
  <strong    >كويتي</strong>

<input type="radio" name="jaab_sagher" value="jaab_sagher">
 <strong    >جيب صغير</strong>
  
  </div>

  <div class="col-4"style="float: right; text-align: right; ">
    <input type="radio" name="katri" value="katri">
  <strong    >قطري</strong>


<input type="radio" name="jaab_saudi" value="jaab_saudi">
 <strong    >جيب سعودي</strong>

 
  </div>

  

  <div class="col-4"  style="float: right; text-align: right;">

  <input type="radio" name="saudi" value="saudi">
  <strong>سعودي </strong>
  
  <input type="radio" name="jaab_mukhfi" value="jaab_mukhfi">
  <strong >جیب مخفي</strong>
</div>


<!-- mid  left side article -->



<!-- mid right side aticle -->

<div class="row">
  
  <div class="col-sm-4" >
<img src="img/pocket1.jpeg" width="80px" height="80px">
<!-- box1 -->
  <input  type="text" name="pocInp1" style="width:20% ;">
    <input type="radio"  name="pocket" value="pocket01" >
 

     <input type="text" name="pocInp2"style="width:20%;">    
  <img src="img/pocket2.jpeg" width="80px" height="80px">
  <input type="radio" name="pocket" value="pocket02">
 
 <br><br>
 
  <img src="img/pocket3.jpeg" width="80px" height="80px">
   <input type="text" name="pocInp3" style="width:20%">
<input type="radio"  name="pocket" value="pocket03">

   <input type="text" name="pocInp4" style="width:20%">
     <img src="img/pocket4.jpeg" width="80px" height="80px"> 
<input type="radio"  name="pocket" value="pocket04">

 <br><br>
   <img src="img/pocket5.jpeg" width="80px" height="80px">
     <input type="text" name="pocInp5" style="width:20%">
    <input type="radio"  name="pocket" value="pocket05">




  
     <input type="text" name="pocInp6" style="width:20%">
  <img src="img/pocket6.jpeg" width="80px" height="80px">
  <input type="radio"  name="pocket" value="pocket06">
  <br><br>

    
  <img src="img/pocket6.jpeg" width="80px" height="80px">
<input type="text" name="pocInp7" style="width:20%">
  <input type="radio" name="pocket" value="pocket07">

       <input type="text" name="pocInp8" style="width:20%">   
    <img src="img/pocket7.jpeg" width="80px" height="80px">
<input type="radio" name="pocket" value="pocket08">

 

    <img src="img/pocket8.jpeg" width="80px" height="80px">
       <input type="text" name="pocInp9" style="width:20%">
    <input type="radio"  name="pocket"value="pocket09">

   <input type="text" name="pocInp10" style="width:20%">
    <img src="img/pocket9.jpeg" width="80px" height="80px">
    
    <input type="radio"  name="pocket" value="pocket10">
    <br>
   

  </div>
<br>
  <div class="col-sm-5" >

   <img src="img/patti1.jpeg" width="50px" height="80px">
     <input type="text" name="patiInp1" style="width:28%">
    <input type="radio" name="patti" value="patti1">

   <input type="text" name="patiInp2"style="width:28%"> 
<img src="img/patti2.jpeg" width="50px" height="80px">
  <input type="radio"  name="patti"  value="patti2">
<br><br>
   <img src="img/patti3.jpeg" width="50px" height="80px">
     <input type="text" name="patiInp3" style="width:28%">
    <input type="radio" name="patti"  value="patti3">
 
     <input type="text" name="patiInp4" style="width:28%">
    <img src="img/patti4.jpeg" width="50px" height="80px">    
      <input type="radio" name="patti"  value="patti4">
  
    <br><br>
     <img src="img/patti5.jpeg" width="50px" height="80px">
     <input type="radio" name="patti" value="patti5">
     <input type="text" name="pattiInp5" >
       <br><br>
   

<label>تاركيا</label>
<input type="radio" name="tarkia" value="tarkia1">
<label>كاغ صدف</label>
<input type="radio" name="tarkia" value="tarkia2">
<label>تعق_صدف</label>
<input type="radio" name="tarkia" value="tarkia3">
<label>تعق_ پلاسٹک</label>
<input type="radio" name="tarkia" value="tarkia4">
<input type="text" name="kalai_message" >
<br><br><br>
 <div class="col-12" style=" float: right;">

     <img src="img/terra1.jpeg" width="50px" height="80px">
        <input type="text" name="k1" style="width:28%">
    <input type="radio" name="kalai" value="kalai1">

     <img src="img/terra2.jpeg" width="50px" height="80px">
        <input type="text" name="k2"style="width:28%">
          <input type="radio" name="kalai" value="kalai2">
<br>
    
     <img src="img/terra3.jpeg" width="50px" height="80px">
        
   <input style="width:28%" type="text" name="k3">
    <input type="radio" name="kalai"  value="kalai3">
        
    <img src="img/terra3.jpeg" width="50px" height="80px">
        
        <input style="width:28%" type="text" name="k4">
         <input type="radio" name="kalai"  value="kalai4">
         <textarea style="min-width:100%;min-height:20%;" name="message"  placeholder="description"></textarea>
    
  </div>
 
  </div>

  <div class="col-sm-3"  style="float: right; text-align: right;">
    
    <input type="text" name="tool_kadam"> 
<strong  >طول قدام</strong><br><br>
<input type="text" name="tool_warah"> 
<strong >فرنت</strong><br><br>
<input type="text" name="al_kataf"> 

<strong > الكتف </strong><br><br>
<input type="text" name="tool_alkamSada"> 
<strong > تطول الكم سادة  </strong><br><br>
<input type="text" name="Rakbah_kalab"> 
<strong > الرقبة قلاب</strong><br><br>

<input type="text" name="Rakbah_adi" > 
<strong >الرقبة عادي</strong><br><br>


<input type="text" name="wast_Sadar" > 
<strong >وسط الصدر </strong><br><br>


<input type="text" name="wast_teht" > 
<strong > وسط تحت</strong><br><br>
 

  </div>



</div>





<!-- foot content -->
<div class="row">
  <div class="col-12">
    
   <table class="table table-bordered border-primary">
<thead>
<th>  <img src="img/tab3.jpeg" width="80px" height="80px"></th>
  <th>     <img src="img/tab1.jpeg" width="80px" height="70px"></th>
     <th>     <img src="img/tab2.jpeg" width="80px" height="80px"></th>
     <th> <img src="img/tab4.jpeg" width="80px" height="80px"></th>
         <th><img src="img/tab5.jpeg" width="80px" height="80px"></th>
   <th><img src="img/tab6.jpeg" width="80px" height="80px"></th>
     <th><img src="img/tab7.jpeg" width="80px" height="80px"></th>
       
</thead>
<tbody > 
<td ><input style="width: 80%;" type="text" name="tab3"></td>
<td ><input  style="width: 80%; " type="text" name="tab1"></td>
<td><input style="width: 80%;" type="text" name="tab2"></td>
     <td><input style="width: 80%;" type="text" name="tab4"></td>
      <td ><input style="width: 80%;" type="text" name="tab5"></td>
   <td><input style="width: 80%;" type="text" name="tab6"></td>
    <td ><input style="width: 80%;" type="text" name="tab7"></td>
    
</tbody>
</table>
  

</table>
  </div>
</div>
<div class="row">
  <div class="col-12">
  <center>
    <input  style="width: 70%; " type="text" name="customer_name">
    <strong  style=" font-size:x-large; large;"  >اسم العميل </strong>
 <br><br><br>
 <img src="img/phone.jpg"  style=" width: 15%; height: 50px; float: right;" >

 <input style="width: 50%; " type="text" name="phone"  style=" ">اتصل
 <hr>

<input type="submit" name="submit" class="btn btn-info">

  </center>
  

  </div>
</div>
  </div>
</form>

<style >
  background-color:white;

</style>
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

error_reporting(0);
if (isset($_POST['submit'])) {
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
             $kalai_message = $_POST['kalai_message'];
    
             

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
                             $k4= $_POST['k4'];

  if ($noh_alkamash1==""  ) {
    echo"<script> alert('Please Enter All Fields 😢...!')  </script>";
  }
  

  else
  {
   $sql = "INSERT INTO measure(accept_date,
    deliver_date,
    mublgh_fatorah,al_madfooh,al_baki,empty_box,noh_alkamash1,noh_alkamash2,noh_alkamash3,noh_alkamash4,noh_alkamash5,noh_alkamash6,koyti,jaab_sagher,jaab_saudi,saudi,katri,jaab_mukhfi, 
    pocInp1,pocInp2,pocInp3,pocInp4,pocInp5,
    pocInp6,pocInp7,pocInp8,pocInp9,pocInp10,
    patiInp1,patiInp2,patiInp3,patiInp4,patiInp5,tarkia,kalai,kalai_message,tool_kadam,tool_warah,al_kataf,tool_alkamSada,Rakbah_kalab,Rakbah_adi,
    wast_Sadar,wast_teht
,tab1,tab2,tab3,tab4,tab5,tab6,tab7,customer_name,phone,message,pocket,patti,k1,k2,k3,k4)VALUES('$accept_date','$deliver_date',
'$mublgh_fatorah',
    '$al_madfooh','$al_baki','$empty_box',
    '$noh_alkamash1','$noh_alkamash2'
    ,'$noh_alkamash3','$noh_alkamash4',
    '$noh_alkamash5','$noh_alkamash6','$koyti','$jaab_sagher','$jaab_saudi','$saudi','$katri','$jaab_mukhfi','$pocInp1','$pocInp2','$pocInp3','$pocInp4','$pocInp5','$pocInp6','$pocInp7','$pocInp8','$pocInp9','$pocInp10','$patiInp1','$patiInp2','$patiInp3','$patiInp4','$patiInp5',
    '$tarkia','$kalai', '$kalai_message','$tool_kadam','$tool_warah','$al_kataf','$tool_alkamSada','$Rakbah_kalab','$Rakbah_adi','$wast_Sadar','$wast_teht','$tab1','$tab2','$tab3','$tab4','$tab5','$tab6','$tab7','$customer_name','$phone',
    '$message','$pocket','$patti','$k1','$k2','$k3','$k4')";

   if (mysqli_query($con,$sql)) {
    

     $msg = "New category added Successfuly...!";
        echo "<script> alert('Done 😄😄😄')  </script>";
    
     
       }
   

   else
   {
    echo "<script> alert('Query error')  </script>";
   }
  }
}

?>