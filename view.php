<!DOCTYPE html>
<html>
<head> 
    <title> Computer Record </title>
</head>
<body>
<table>
 <tr>
  <th>PoNo</th>
  <th>CpuSerialNo </th>
  
  <th>MonitorSerialNo </th>

  <th>Userid</th>

   <th>IssueDate </th>

   <th>ReturnDate</th>

   <th>Stock</th>
</tr>
<?php

        $host = "localhost";
        $dbUsername = "cssc";
        $dbPassword = "cssc123";
        $dbname = "dbname";

        $conn =new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if(mysqli_connect_error())
        {
                die('coonnection error');

        }
        else

        {
	$sql = "SELECT * FROM Stock";
		$result = $conn-> query($sql);
		if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			echo "<tr><td>". $row["PoNo"] ."</td><td>". $row["CpuSerialNo"] ."</td><td>". $row["MonitorSerialNo"] ."</td><td>". $row["Userid"] ."</td><td>". $row["IssueDate"] ."</td><td>". $row["ReturnDate"] ."</td><td>". $row["Stock"] ."";
			}

echo "</table>";

}
else {
echo "0 result";

}
}

$conn->close();
?>
</table>
</body>
</html>
