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

		$sql = "SELECT * FROM Computer";

		

       if($result=mysqli_query($conn, $sql)){

      while($row=mysqli_fetch_row($result))

      {
	      if($row[0]==$PoNo1)
	      {
		      $a=$row[0];
		      $b=$row[1];
		      $c=$row[2];
		      $d=$row[3];
		      $e=$row[4];
		      $f=$row[5];
		      $g=$row[6];
		      $h=$row[7];
/*
	      echo "PoNo:<input type='text' value='$row[0]'/>";      
                        	       echo "InvoiceNo: <input type='text' value='$row[1]'/>";
                       echo "Quantity:<input type='text' value='$row[2]'/> ";
                       echo " Specification:<input type ='text' value='$row[3]'/>";
                       echo "Amount :<input type ='text' value='$row[4]'/>";
                       echo "DateofInstallation:<input type ='date' value='$row[5]'/>";
                       echo "WarrentyEndDate:<input type ='date' value='$row[6]'/>";
		       echo "Vendor:<input type ='text' value='$row[7]'/>";
echo "<input type ='submit' value='update'/>";
 */


/*


		      	 	 <table>

<tr>
<th>PoNo</th>
<th>InvoiceNo</th>

<th>No. of quantity</th>
<th>Specification</th>
<th>Amount</th>
<th>DateofInstallation</th>
<th>WarrentyEndDate</th>
<th>Vendor</th>

 </tr>
 <tr>

 <td> echo"<input type ='text'  value ='$row[0]' />"</td>
         <td><input type="text"  name="InvoiceNo" value ="<?php echo "$row[1]";?>"></td>

         <td><input type="text" name="Quantity" value ="<?php echo "$row[2]";?>"></td>
         <td><input type="text"  name="Specification" value =<"?php echo "$row[3]";?>"></td>
         <td><input type="text" name="Amount" value ="<?php echo "$row[4]";?>"></td>
         <td><input type="date" name="DateofInstallation" value="<php echo"$row[5]";?>" ></td>

         <td><input type="date"  name="WarrentyEndDate"  value ="<?php echo "$row[6]";?>"></td>

         <td><input type="text" name="Vendor" value="<?php echo "$row[7]";?>"></td>

</tr>
</table>

 */


	      }
       }
 /*mysqli_free_resullt($result);*/


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

<form action="Computer_update3.php" method="post">
<table >
<tr>
<th>PoNo</th>
<th>InvoiceNo</th>

<th>No. of quantity</th>
<th>Specification</th>
<th>Amount</th>
<th>DateofInstallation</th>
<th>WarrentyEndDate</th>
<th>Vendor</th>

 </tr>
 <tr>

 <td><input type ="text" name ="PoNo" value="<?php echo $a;?>" ></td>
<td><input type="text"  name="InvoiceNo"value="<?php echo $b;?>" ></td>
<td><input type="text" name="Quantity" value="<?php echo $c;?>"></td>
 <td><input type="text"  name="Specification"value="<?php echo $d;?>"></td>
 <td><input type="text" name="Amount"value="<?php echo $e;?>"></td>
  <td><input type="date" name="DateofInstallation" value="<?php echo $f;?>"></td>
<td><input type="date"  name="WarrentyEndDate" value="<?php echo $g;?>"></td>

<td><input type="text" name="Vendor"value="<?php echo $h;?>"></td>

</tr>
</table>
<center><input type="submit" name="Update" value="Update"/></center>
</form>

</body>

</html>





