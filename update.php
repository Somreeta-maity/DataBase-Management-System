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

if (isset($_POST(['update']))
{
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
        $sql = "UPDATE 'Computer' SET 'CpuSerialNo'='".$CpuSerialNo"', 'MonitorSerialNo'='".$MonitorSerialNo"','Userid'='".$UserId"','IssueDate'= '". $IssueDate"','ReturnDate'='".$ReturnDate"','Stock' ='".$Stock"' WHERE 'id'= $id";
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

