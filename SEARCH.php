
<?php

$PoNo = $_POST['PoNo'];



if( !empty($PoNo))
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

                $sql = "SELECT * FROM Computer where PoNo='$PoNo'";
if(mysqli_query($conn, $sql)){
	

<form action="Computerdb.php" method="post">


	echo "<td><input type=text name=PoNo value=".$row['PoNo']."></td>";
                    echo "<td><input type=text name=InvoiceNo value= ". $row['InvoiceNo'] ."></td>";
                    echo "<td><input type=text name=Quantity value=".$row['Quantity'] ."></td>" ;

                    echo "<td><input type=text name=Specification value=". $row['Specification'] ."></td>";
                    echo "<td><input type=text name=Amount value=".$row['Amount']."></td>";
                    echo "<td><input type=date name=DateofInstallation value=".$row['DateofInstallation']."></td>";
                    echo "<td><input type=date name=WarrentyEndDate value=". $row["WarrentyEndDate"] ."></td>";
                    echo " <td><input type=text name=Vendor value=".$row["Vendor"] ."></td>";
                   echo "<td><input type=Submit>";


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

}
?>


