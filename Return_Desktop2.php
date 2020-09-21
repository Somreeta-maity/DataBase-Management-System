




<?php

$EmailId = $_POST['EmailId'];
$CpuSerialNo = $_POST['CpuSerialNo'];
$PoNo= $_POST['PoNo'];
$Specification=$_POST['Specification'];
$ReturnDate= date('Y-m-d');
$MonitorSerialNo=$_POST['MonitorSerialNo'];
/*
echo "$EmailId";
echo "$CpuSerialNo";
echo "$PoNo";
echo "$Specification";
echo "$ReturnDate";
echo "$MonitorSerialNo";
 */

if( !empty($PoNo) || !empty($CpuSerialNo) || !empty($MonitorSerialNo) )
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

                $sql = "UPDATE Desktop_Stock SET  Pono='$PoNo' , CpuSerialNo='$CpuSerialNo' , MonitorSerialNo='$MonitorSerialNo' , Specification='$Specification' ,  EmailId='$EmailId', ReturnDate='$ReturnDate' ,  Status='1' WHERE CpuSerialNo='$CpuSerialNo' ";
		
		

if(mysqli_query($conn, $sql)){
    echo "Records updated  successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>




