
<!DOCTYPE html>
<html>
<head> 
    <title> Computer Record </title>
</head>
<body>
<table>
 <tr>
  <th>PoNo</th>
 <th>CPU Serial No. </th>

  <th>Monitor Serial No. </th>
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
                        echo "<tr><td>". $row["Pono"] ."</td><td>". $row["CpuSerialNo"] ."</td><td>". $row["MonitorSerialNo"] ."</td></tr>";
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
