   
<?php require_once('database/db_lead.php'); 

$result = mysqli_query($conn, "SELECT order_str._id AS ID, order_str._article, order_str._price, order_str._client ,order_str._count, order_str._date, client._name  FROM order_str INNER JOIN client ON client._id = order_str._client");
 
 $rows = array();
 while($row = mysqli_fetch_array($result)){
	 $rows[] = $row;
 }
 echo json_encode($rows);
 ?>      