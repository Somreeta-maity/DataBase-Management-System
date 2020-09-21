<!DOCTYPE html>
<html>
<head> 
    <title> Computer Record </title>
</head>
<body>
<table>
 <tr>
  <th>PoNo</th>
 <th>InvoiceNo </th>

  <th>Quantity </th>

  <th>Specification</th>

   <th>Amount </th>

   <th>DateofInstallation</th>

   <th>WarrentyEndDate</th>
<th>Vendor</th>
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
        $sql = "SELECT * FROM Computer";
                $result = $conn-> query($sql);
                if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
			echo "<tr><td>". $row["PoNo"] ."</td><td>". $row["InvoiceNo"] ."</td><td>". $row["Quantity"] ."</td><td>". $row["Specification"] ."</td>
				<td>". $row["Amount"] ."</td><td>". $row["DateofInstallation"] ."</td><td>". $row["WarrentyEndDate"] ."</td><td>". $row["Vendor"] ."";
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

