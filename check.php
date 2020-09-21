
<?php

$PoNo = $_POST['PoNo'];
$SerialNo = $_POST['SerialNo'];


if( !empty($PoNo) || !empty($SerialNo))
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
	
		$sql = "INSERT INTO Laptop_Stock(PoNo,SerialNo)VALUES ('$PoNo', '$SerialNo')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$sql1="SELECT SerialNo FROM Laptop_stock WHERE SerialNo='$SerialNo'";
$result = $conn-> query($sql1);

                if($result-> num_rows>0){
		
                         echo "Vendor Details are already exist";

                                       

		        	}
			else{

				

				  header("Location:Laptop_add.html");


						}


		}
		}

                          

	


?>
