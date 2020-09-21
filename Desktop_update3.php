
<?php

$PoNo1 = $_POST['PoNo'];
$CpuSerialNo = $_POST['CpuSerialNo'];

$MonitorSerialNo=$_POST['MonitorSerialNo'];




if( !empty($PoNo1) || !empty($CpuSerialNo)  ||  !empty($MonitorSerialNo) )
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

                $sql = "UPDATE Desktop_Stock SET  Pono='$PoNo1' , CpuSerialNo='$CpuSerialNo' , MonitorSerialNo='$MonitorSerialNo' WHERE Pono='$PoNo1' ";
		

if(mysqli_query($conn, $sql)){
    echo "Records updated  successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>

