
<?php

$VendorName = $_POST['VendorName'];
$Address = $_POST['Address'];

$MobileNo=$_POST['MobileNo'];
$Emailid = $_POST['Emailid'];


if( !empty($VendorName) || !empty($Address)  ||  !empty($MobileNo) ||  !empty($Emailid))
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

                $sql = "UPDATE Vendor SET  VendorName='$VendorName' , Address='$Address' , MobileNo='$MobileNo' , Emailid='$Emailid'  WHERE VendorName='$VendorName'";
		

if(mysqli_query($conn, $sql)){
    echo "Records updated  successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>

