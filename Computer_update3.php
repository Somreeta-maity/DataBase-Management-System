<?php

$PoNo1 = $_POST['PoNo'];
$InvoiceNo = $_POST['InvoiceNo'];

$No=$_POST['Quantity'];
$Specification = $_POST['Specification'];
$Amount = $_POST['Amount'];
$DateofInstallation = $_POST['DateofInstallation'];
$WarrentyEndDate=$_POST['WarrentyEndDate'];
$Vendor = $_POST['Vendor'];



if( !empty($PoNo) || !empty($InvoiceNo)  ||  !empty($No) ||  !empty($Specification) || !empty($Amount)|| !empty($DateofInstallation) || !empty($WarrentyEndDate) ||!empty($Vendor))
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

                $sql = "UPDATE Computer SET  PoNo='$PoNo1' , InvoiceNo='$InvoiceNo' , Quantity='$No' , Specification='$Specification' , Amount='$Amount' , DateofInstallation='$DateofInstallation' , WarrentyEndDate='$WarrentyEndDate' , Vendor='$Vendor'  WHERE PoNo='$PoNo1'";
		

if(mysqli_query($conn, $sql)){
    echo "Records updated  successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>

