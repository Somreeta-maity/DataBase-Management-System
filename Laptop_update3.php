

<?php

$PoNo1 = $_POST['PoNo'];
$SerialNo = $_POST['SerialNo'];



if( !empty($PoNo1) || !empty($SerialNo) )
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

                $sql = "UPDATE Laptop_Stock SET  PoNo='$PoNo1' , SerialNo='$SerialNo'  WHERE Pono='$PoNo1' ";
		

if(mysqli_query($conn, $sql)){
    echo "Records updated  successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>

