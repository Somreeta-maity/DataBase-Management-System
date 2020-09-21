



<?php

$EmailId = $_POST['EmailId'];
$CpuSerialNo = $_POST['CpuSerialNo'];
$MonitorSerialNo=$_POST['MonitorSerialNo'];
$PoNo= $_POST['PoNo'];
$Specification=$_POST['Specification'];
$IssueDate= date('Y-m-d');
$ReturnDate=$_POST['ReturnDate'];
$Status=$_POST['Status'];



if( !empty($PoNo) || !empty($CpuSerialNo) || !empty($MonitorSerialNo))
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

		if($Status=='0')

		{

			echo "This Desktop is not in stock";


		}else

		{
           if($ReturnDate!=='1111-11-11')
	   {

		  $sql1=" INSERT INTO Desktop_Stock(Pono,CpuSerialNo,MonitorSerialNo,Specification,EmailId,IssueDate,ReturnDate,Status) VALUES ('$PoNo' , '$CpuSerialNo' , '$MonitorSerialNo' , '$Specification' , '$EmailId' , '$IssueDate' ,'1111-11-11', '0')";       


            if(mysqli_query($conn , $sql1)){

                        echo "Record Updated Succesfully";

                   }   
                 else
           {  
  
            echo "not updated succesfully";
		  
		 }
	   }
	   else 
	   {


       $sql = "UPDATE Desktop_Stock SET  Pono='$PoNo' , CpuSerialNo='$CpuSerialNo' , MonitorSerialNo='$MonitorSerialNo' , Specification='$Specification' ,  EmailId='$EmailId' , IssueDate='$IssueDate' , ReturnDate='1111-11-11' , Status='0' WHERE CpuSerialNo='$CpuSerialNo' ";	   


                 if(mysqli_query($conn, $sql)){
                echo "Records updated  successfully.";
              } else{
                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
               }   

	   }	
		}	   
 

}

}
?>




