
<?php
$PoNo = $_POST['PoNo'];
$SerialNo = $_POST['SerialNo'];



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
        
                $sql = "INSERT INTO Laptop_Stock(PoNo,SerialNo,ReturnDate,Status) VALUES ('$PoNo' , '$SerialNo','1111-11-11','1')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


}

}
?>


