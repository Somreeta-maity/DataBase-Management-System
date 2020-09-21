
<?php

$Name = $_POST['Name'];
$RollNo=$_POST['RollNo'];
$Designation=$_POST['Designation'];
$Department= $_POST['Department'];
$MobileNo=$_POST['MobileNo'];
$EmailId= $_POST['EmailId'];



if( !empty($Name)  ||  !empty($RollNo) || !empty($Designation) ||  !empty($Department) || !empty($MobileNo)|| !empty($EmaillId))
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
	
		$sql = "INSERT INTO UserData(Name,RollNo,Designation,Department,MobileNo,EmailId)  VALUES ( '$Name', '$RollNo' , '$Designation','$Department','$MobileNo','$EmailId')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
/*
$sql1="SELECT VendorName FROM Vendor WHERE VendorName='$Vendor'";
$result = $conn-> query($sql1);

                if($result-> num_rows>0){
		
                         echo "Vendor Details are already exit";

                                       

		        	}
			else{

				

				  header("Location:vendor.html");


			}*/


	}
		}

                          

	


?>
