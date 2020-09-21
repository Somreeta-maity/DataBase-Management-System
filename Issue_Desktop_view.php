



<!DOCTYPE html>
<html>
<head> 
    <title> Computer Record </title>
</head>
<body>
<table>
 <tr>
  <th>PoNo</th>
 <th> CpuSerial No. </th>
<th>MonitorSerialNo</th>
<th>Specification</th>
<th>EmailId</th>
<th>IssueDate</th>
<th>ReturnDate</th>
<th>Status</th>
  
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
        $sql = "SELECT * FROM Desktop_Stock";
                $result = $conn-> query($sql);
                if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["Pono"] ."</td><td>". $row["CpuSerialNo"] ."</td><td>". $row["MonitorSerialNo"] ."</td> <td>". $row["Specification"] ."</td><td>". $row["EmailId"] ."</td><td>" . $row["IssueDate"] ."</td><td>" . $row["ReturnDate"]."</td><td>" . $row["Status"] ."</td> </tr>";
                        }

echo "</table>";

}
else {
echo "0 result";
}
        }

$conn->close();


?></table>

</body>
</html>
