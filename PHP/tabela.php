<?php
    //session_start();
	include('conexaodb.php');

	$query = "SELECT * FROM Evento ";
   
	$recordset = mysql_query($query,$conn);
	
?>



<table id="select" border="1" align="center" width="900" bgcolor="#96ebd4" RULES=ROWS FRAME=HSIDES>

<tr>

<th align="center"><b>Id</b></th>
<th align="center"><b>Modelo</b></th>

<?     	
	while($row = mysql_fetch_assoc($recordset))
	{
	    echo "<tr>";
		$id = $row['Cod'];
		$modelo = $row['Nome'];
		
		
		
		echo "<td align='left'>".$id."</td>";
		echo "<td align='center'>".$modelo."</td>";
		
		echo "</tr>";
	}
?>

</table>

</body>
</html>