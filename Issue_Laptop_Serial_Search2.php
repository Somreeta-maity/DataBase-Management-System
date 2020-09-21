


<?php

$SerialNo=$_POST['SerialNo'];
$EmailId=$_POST['EmailId'];



if( !empty($SerialNo) )

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

		$sql = "SELECT * FROM Laptop_Stock where SerialNo='$SerialNo'";
		 $result = $conn-> query($sql);

                   if($result-> num_rows>0){

             while($row=mysqli_fetch_row($result))
   
          {
	      if($row[1]==$SerialNo)
	     {       $c=$row[0];
	             $a=$row[1];
$f=$row[5];
	            $b=$row[6];	     
              }
	     }
		   }
	      else
	      {


                   header("Location: Laptop_add.html");
	      }
			      
            

          
 
        $sql1 = "SELECT * FROM Computer where PoNo='$c'";            

		if($result1=mysqli_query($conn, $sql1))
		{
                              while($row1=mysqli_fetch_row($result1))
                              {

                                      if($row1[0]==$c)
                                      {
                                              $d=$row1[3];

                                         }

			      }	      

		}


        



  }

$conn->close();

}

?>



<!DOCTYPE>

<html>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
<title>Latop/Desktop Details</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<style>

table
{
        table-layout:auto;
        width: 100%;
        margin-top:300px;
}



body{
        background-color:hsla(120,60%,70%,0.3);}
  td, th {

margin:800px;
  border: 1px solid #DAA520 ;
  text-align: left;
  padding: 9px;
}

tr:nth-child(even) {
        margin-top:800px;

  background-color: #dddddd;
}




input[type=submit]{
        margin:auto;
          background-color: #4CAF50;
  border: none;
  color: white;
  padding: 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

}                                                                                                                                                                                         </style>
 <body>

<form action="Issue_Laptop_Serial_Search3.php" method="post">
<table >
<tr>


<th>SerialNo</th>
<th>Specification</th>

 </tr>
 <tr>


<td><input type="text"  name="SerialNo"value="<?php echo $a;?>" placeholder="SerialNo"></td>


<td><input type="text"  name="Specification" value="<?php echo $d;?>" placeholder="Specification"></td>

<input type="hidden" name="EmailId" value="<?php echo $EmailId;?>" placeholder="EmailId">
<input type="hidden" name="PoNo" value="<?php echo $c;?>" placeholder="PoNo">
<input type="hidden" name="Status" value="<?php echo $b;?>" placeholder="Status">
<input type="hidden" name="ReturnDate" value="<?php echo $f;?>" placeholder="ReturnDate">
</tr>
</table>


<center><input type="submit" name="Update" value="ISSUE"/></center>
</form>

</body>

</html>





