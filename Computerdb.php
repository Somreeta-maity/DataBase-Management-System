<?php

$PoNo = $_POST['PoNo'];
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
	
		$sql = "INSERT INTO Computer(PoNo,InvoiceNo,Quantity,Specification,Amount,DateofInstallation,WarrentyEndDate,Vendor)  VALUES ('$PoNo', '$InvoiceNo', '$No','$Specification','$Amount','$DateofInstallation','$WarrentyEndDate','$Vendor')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$sql1="SELECT VendorName FROM Vendor WHERE VendorName='$Vendor'";
$result = $conn-> query($sql1);

                if($result-> num_rows>0){
		
                         echo "Vendor Details are already exit";

                                       

		        	}
			else{

				

				  header("Location:vendor.html");


						}


		}
		}

                          

	


?>
