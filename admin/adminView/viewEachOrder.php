<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>N.O.</th>
            <th>Number</th>
            <th>Flat</th>
            <th>City</th>
            <th>Country</th>
            <th>Total_Product</th>
        </tr>
    </thead>
    <?php
        include_once "../config/koneksi.php";
        $ID= $_GET['orderID'];
        //echo $ID;
        $sql="SELECT * from orders where id='$ID'";
        $result=$ha-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
                $v_id=$row['id'];
    ?>
                <tr>
                    <td><?=$count?></td>
                    <?php
                       $subqry="SELECT * from orders where id='$v_id'";
                       $res=$ha-> query($subqry);
                    ?>
                    <td><?=$row["number"] ?></td>
                    <td><?=$row["flat"] ?></td>
                    <td><?=$row["city"] ?></td>
                    <td><?=$row["country"]?></td>
                    <td><?=$row["total_products"]?></td>
                </tr>
    <?php
                $count=$count+1;
            }
        }else{
            echo "error";
        }
    ?>
</table>
</div>
