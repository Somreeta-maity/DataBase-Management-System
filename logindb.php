i<?php

$Name = $_POST['usr'];
$Passwd = $_POST['pwd'];


if( !empty($Name) || !empty($Passwd))
{
        $host = "localhost";
        $dbUsername = "cssc";
        $dbPassword = "cssc123";
        $dbname = "dbname";

        $conn =new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if(mysqli_connect_error())
        {
                die('connection error');

        }
        else

        {

		$sql = "SELECT * FROM login WHERE name = '$Name' and passwd = '$Passwd' ";
		$result = mysqli_query($conn,$sql);
		$check =mysqli_fetch_array($result);

if(isset($check)){
    header("Location:Menu2.html");
} else{
    echo "Enter correct username and password ";
}
}

}
?>
~
