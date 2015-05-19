<?php
    //session_start();
	include('conexaodb.php');

	$query = "SELECT * FROM Evento ";
   
	$recordset = mysql_query($query,$conn);
	
?>

<?     	
$data = array();
while ($row = mysql_fetch_array($recordset)) {
   $data[] = array('id'=>$row['Cod'], 'name' => $row['Nome']);
}
echo json_encode($data);
?>
