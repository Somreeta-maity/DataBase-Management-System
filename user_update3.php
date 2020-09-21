
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

                $sql = "UPDATE UserData SET  Name='$Name' , RollNo='$RollNo' , Designation='$Designation' , Department='$Department' , MobileNo=' $MobileNo' , EmailId='$EmailId'   WHERE EmailId='$EmailId'";
		

if(mysqli_query($conn, $sql)){
    echo "Records updated  successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>

