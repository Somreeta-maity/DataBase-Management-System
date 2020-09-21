<!DOCTYPE html>
<html>
<head> 
    <title> Computer Record </title>
</head>
<body>
<table>
 <tr>
  <th>VendorName</th>
 <th>Address </th>

  <th>MobileNo </th>

  <th>EmailId</th>

   
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
        $sql = "SELECT * FROM Vendor";
                $result = $conn-> query($sql);
                if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["VendorName"] ."</td><td>". $row["Address"] ."</td><td>". $row["MobileNo"] ."</td><td>". $row["Emailid"] ."</td></tr>";
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
