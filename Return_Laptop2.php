



<?php

$EmailId = $_POST['EmailId'];
$SerialNo = $_POST['SerialNo'];
$PoNo= $_POST['PoNo'];
$Specification=$_POST['Specification'];
$ReturnDate= date('Y-m-d');


if( !empty($PoNo) || !empty($SerialNo) )
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

                $sql = "UPDATE Laptop_Stock SET  PoNo='$PoNo' , SerialNo='$SerialNo' , Specification='$Specification' ,  EmailId='$EmailId', ReturnDate='$ReturnDate' ,  Status='1' WHERE SerialNo='$SerialNo' ";
		
		

if(mysqli_query($conn, $sql)){
    echo "Records updated  successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>




