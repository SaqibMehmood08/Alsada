 <?php  
 $connect = mysqli_connect("localhost", "root", "", "project"); 

 $number = count($_POST["name"]);  
 if($number > 0)  
 { 
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO data(title) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 
   <?php ?>
    <?php  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 $number = count($_POST["price"]);  
 if($number > 0)  
 { 
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["price"][$i] != ''))  
           {  
                $sql = "INSERT INTO data(category) VALUES('".mysqli_real_escape_string($connect, $_POST["price"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 
   
       <?php  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 $number = count($_POST["recieved"]);  
 if($number > 0)  
 { 
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["recieved"][$i] != ''))  
           {  
                $sql = "INSERT INTO data(category) VALUES('".mysqli_real_escape_string($connect, $_POST["recieved"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 