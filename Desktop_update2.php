
<?php

$PoNo1 = $_POST['PoNo'];




if( !empty($PoNo1) )

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

		$sql = "SELECT * FROM Desktop_Stock where PoNo='$PoNo1'";

             $result = $conn-> query($sql);

                   if($result-> num_rows>0){

      while($row=mysqli_fetch_row($result))

      {
	      if($row[0]==$PoNo1)
	      {
		      $a=$row[0];
		      $b=$row[1];
		      $c=$row[2];
		     


	      }

}
		   }
		   else

		   {

                        header("Location:Desktop_add.html");


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

}                                                                                                                                                                                          1,10          Top
</style>
 <body>

<form action="Desktop_update3.php" method="post">
<table >
<tr>
<th>PoNo</th>
<th>CPU Serial No.</th>

<th>Monitor Serial No.</th>


 </tr>
 <tr>

 <td><input type ="text" name ="PoNo" value="<?php echo $a;?>" ></td>
<td><input type="text"  name="CpuSerialNo"value="<?php echo $b;?>" ></td>
<td><input type="text" name="MonitorSerialNo" value="<?php echo $c;?>"></td>
 
</tr>
</table>
<center><input type="submit" name="Update" value="Update"/></center>
</form>

</body>

</html>





