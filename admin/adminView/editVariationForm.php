<div class="container p-5">

<h4>Edit Variation Detail</h4>
<?php
    include_once "../config/koneksi.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($ha, "SELECT * FROM courses c INNER JOIN team t ON c.id = t.id WHERE c.id ='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $pID=$row1["id"];
      $sID=$row1["id"];
?>
<form id="update-Items" onsubmit="updateVariations()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="v_id" value="<?=$row1['id']?>" hidden>
    </div>
    <div class="form-group">
        <label>Courses:</label>
        <select id="product" >
        <?php

        $sql="SELECT * from courses where id=$pID";
        $result = $ha-> query($sql);

        if ($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo"<option selected value='".$row['id_courses']."'>".$row['courses_name'] ."</option>";
        }
        }
        ?>
        <?php

            $sql="SELECT * from courses where id!=$pID";
            $result = $ha-> query($sql);

            if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo"<option value='".$row['id_courses']."'>".$row['courses_name'] ."</option>";
            }
            }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label>Team:</label>
        <select id="size" >
        <?php

            $sql="SELECT * from team where id=$sID";
            $result = $ha-> query($sql);

            if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo"<option selected value='".$row['id_team']."'>".$row['team_name'] ."</option>";
            }
            }
        ?>
        <?php

            $sql="SELECT * from team where id!=$sID";
            $result = $ha-> query($sql);

            if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo"<option value='".$row['id_team']."'>".$row['team_name'] ."</option>";
            }
            }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label for="qty">Stock Quantity:</label>
        <input type="number" class="form-control" id="qty" value="<?=$row1['quantity']?>"  required>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Variation</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>