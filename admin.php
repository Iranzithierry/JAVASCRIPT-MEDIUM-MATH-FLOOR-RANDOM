<?php
include("conn.php");

$stmt = $conn->prepare("SELECT * FROM identity");
$stmt->execute();
$result = $stmt->get_result();




?>
<table>
    <tr>
        <th>NAME</th>
        <th>LOCATION</th>
        <th>AGE</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()){
    
    ?>
    <tr>
    <td><?php echo $row["name"]?></td>
    <td><?php echo $row["location"]?></td>
    <td><?php echo $row["age"]?></td>
</tr>
<?php }?>
</table>




<style>
    body {
  background-color: #fff;
  font-size: 15px;
  font-weight: 400;
  overflow-x: hidden;
  justify-content: center;
  margin: 0;
  align-items: center;
  padding: 5px;
  zoom: 0.85;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  margin: 2px;
  width: 100%;
  top: 0;
  padding: 0;
  background-color: #fff;
  text-align: center;
  justify-content: center;
  border-radius: 8px;
  z-index: 1;
}

tr {
  background-color: #fff;
  border: 2px solid #000;
  font-size: 14px;
  font-weight: 550;
}

td {
  padding: 7px 2px;
  border: 2px solid #000;
}

th {
  padding: 16px;
  border: 2px solid #000;
  position: sticky;
  top: 0;
}
</style>