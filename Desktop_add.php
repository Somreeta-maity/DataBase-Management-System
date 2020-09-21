<?php

$PoNo=$_POST['PoNo'];
$CpuSerialNo=$_POST['CpuSerialNo'];
$MonitorSerialNo=$_POST['MonitorSerialNo'];
$Userid=$_POST['Userid'];
$IssueDate = $_POST['IssueDate'];

$Stock=$_POST['Stock'];

if( !empty($PoNo) || !empty($CpuSerialNo)  || !empty($MonitorSerialNo) || !empty($Userid) ||  !empty($IssueDate) || !empty($ReturnDate)|| !empty($Stock))
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

		$sql = "INSERT INTO Desktop_Stock(Pono,CpuSerialNo,MonitorSerialNo,ReturnDate,Status)  VALUES ('$PoNo', '$CpuSerialNo', '$MonitorSerialNo','1111-11-11','1')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>

