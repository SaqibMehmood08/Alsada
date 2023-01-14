<?php 
$connect = mysqli_connect("localhost", "root", "", "project");
$msg="";
?>
<?php 

include"config.php";


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
                    $tool_kadam = $_POST['tool_kadam'];
                     $tool_warah = $_POST['tool_warah'];
                      $al_kataf = $_POST['al_kataf'];
                       $tool_alkamSada = $_POST['tool_alkamSada'];
                        $Rakbah_kalab = $_POST['Rakbah_kalab']; 
                        $Rakbah_adi = $_POST['Rakbah_adi'];
                        $wast_Sadar = $_POST['wast_Sadar'];
                        $tab1 = $_POST['tab1'];
                        $tab2 = $_POST['tab2'];
                        $tab3 = $_POST['tab3'];
                        $tab4 = $_POST['tab4'];
                        $customer_name = $_POST['customer_name'];
                        $phone = $_POST['phone'];


  if ($noh_alkamash1=="") {
    echo"<script> alert('Please Enter noh_alkamash...!')  </script>";
  }
  else
  {
   $sql = "INSERT INTO measur(accept_date,deliver_date,mublgh_fatorah,al_madfooh,al_baki,empty_box,noh_alkamash1,noh_alkamash2,noh_alkamash3,noh_alkamash4,noh_alkamash5,noh_alkamash6,saudi,jaab_sagher ,katri,jaab_saudi,koyti,jaab_mukhfi,tool_kadam,tool_warah,al_kataf,tool_alkamSada,Rakbah_kalab,Rakbah_adi,wast_Sadar,tab1,tab2,tab3,tab4,customer_name,phone)VALUES('$accept_date','$deliver_date','$mublgh_fatorah','$al_madfooh','$al_baki','$empty_box','$noh_alkamash1','$noh_alkamash2','$noh_alkamash3','$noh_alkamash4','$noh_alkamash5','$noh_alkamash6','$saudi','$jaab_sagher','$katri','$jaab_saudi','$koyti','$jaab_mukhfi','$tool_kadam','$tool_warah','$al_kataf','$tool_alkamSada','$Rakbah_kalab','$Rakbah_adi','$wast_Sadar','$tab1','$tab2','$tab3','$tab4','$customer_name','$phone')";
   if ($sql) {
    
     $msg = "New category added Successfuly...!";
   }
   else
   {
    echo "<script> alert('Query error')  </script>";
   }
  }
}

?>