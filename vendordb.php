<?php

$VendorName = $_POST['VendorName'];
$Address = $_POST['Address'];
$MobileNo=$_POST['MobileNo'];
$Emailid=$_POST['Emailid'];
$PurchaseOrderNo = $_POST['PurchaseOrderNo'];


if( !empty($VendorNo) || !empty($Address)  || !empty($MobileNo) || !empty($Emailid) ||  !empty($PurchaseOrderNo))
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

                $sql = "INSERT INTO Vendor(VendorName,Address,MobileNo,Emailid,PurchaseOrderNo)  VALUES ('$VendorName','$Address','$MobileNo','$Emailid','$PurchaseOrderNo')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>

