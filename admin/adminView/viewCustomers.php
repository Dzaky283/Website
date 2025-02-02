<div >
  <h2>All Users</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">N.U.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
      </tr>
    </thead>
    <?php
      include 'C:/xampp/htdocs/crud/p/config.php';
      $sql="SELECT * from users where isadmin=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["username"]?> </td>
      <td><?=$row["email"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>