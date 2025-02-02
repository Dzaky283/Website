<?php
    include_once "../config/koneksi.php";

    $v_id=$_POST['v_id'];
    $product= $_POST['product'];
    $size= $_POST['size'];
    $qty= $_POST['qty'];
   
    $updateItem = mysqli_query($ha,"UPDATE courses SET 
        courses_name=$product, 
        team_name=$size,
        quantity=$qty 
        WHERE id=$v_id");


    if($updateItem)
    {
        echo "true";
    }
?>