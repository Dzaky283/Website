<?php
    include_once "../config/koneksi.php";
    
    if(isset($_POST['upload']))
    {
       
        $product = $_POST['product'];
        $size= $_POST['size'];
        $qty = $_POST['qty'];

         $insert = mysqli_query($ha,"INSERT INTO product_size_variation
         (product_id,product_name,quantity_in_stock) VALUES ('$product','$size','$qty')");
 
         if(!$insert)
         {
             echo mysqli_error($ha);
             header("Location: ../dashboard.php?variation=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?variation=success");
         }
     
    }
        
?>