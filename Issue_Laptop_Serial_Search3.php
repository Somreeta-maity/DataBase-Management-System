


<?php

$EmailId = $_POST['EmailId'];
$SerialNo = $_POST['SerialNo'];
$PoNo= $_POST['PoNo'];
$Specification=$_POST['Specification'];
$IssueDate= date('Y-m-d');
$ReturnDate=$_POST['ReturnDate'];
$Status=$_POST['Status'];



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

		if($Status=='0')

		{

			echo "This Laptop is not in stock";


		}else

		{
           if($ReturnDate!=='1111-11-11')
	   {

		  $sql1=" INSERT INTO Laptop_Stock(PoNo,SerialNo,Specification,EmailId,IssueDate,ReturnDate,Status) VALUES ('$PoNo' , '$SerialNo' ,'$Specification' , '$EmailId' , '$IssueDate' ,'1111-11-11', '0')";       


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


       $sql = "UPDATE Laptop_Stock SET  PoNo='$PoNo' , SerialNo='$SerialNo' , Specification='$Specification' ,  EmailId='$EmailId' , IssueDate='$IssueDate' , ReturnDate='1111-11-11' , Status='0' WHERE SerialNo='$SerialNo' ";	   


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




