<?php
    include_once "../config/koneksi.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
       
         $insert = mysqli_query($ha, "INSERT INTO `category`(`category_name`) VALUES ('$catname')");
 
         if(!$insert)
         {
             echo mysqli_error($ha);
             header("Location: ../dashboard.php?category=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?category=success");
         }
     
    }
        
?>