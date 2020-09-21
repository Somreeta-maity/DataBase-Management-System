


<?php

$EmailId=$_POST['EmailId'];




if( !empty($EmailId) )

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

		$sql = "SELECT * FROM UserData where EmailId='$EmailId'";

		

       if($result=mysqli_query($conn, $sql)){

      while($row=mysqli_fetch_row($result))

      {
	      if($row[5]==$EmailId)
	     {
		      $a=$row[0];
		      $b=$row[1];
		      $c=$row[2];
		      $d=$row[3];
		      $e=$row[4];
		   
		      $f=$row[5];
		     
	      }

	      else
	      {


                   header("Location: user.html");
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

<form action="Issue_Desktop_Serial_Search.php" method="post">
<table >
<tr>

<th>Name</th>
<th>RollNo</th>
<th>Designation</th>
<th>Department </th>
<th>MobileNo</th>
<th>EmailId</th>
 </tr>
 <tr>


<td><input type="text"  name="Name"value="<?php echo $a;?>" placeholder="Name"></td>
<td><input type="text"  name="RollNo" value="<?php echo $b;?>" placeholder="RollNo"></td>

<td><input type="text" name="Designation" value="<?php echo $c;?>" placeholder="Designation"></td>
 <td><input type="text"  name="Department"value="<?php echo $d;?>"placeholder="Department"></td>
<td><input type="text" name="MobileNo"value="<?php echo $e;?>"placeholder="MobileNo"></td>
<td><input type="email" name="EmailId"value="<?php echo $f;?>" placeholder="EmailId"></td>

</tr>
</table>


<center><input type="submit" name="Update" value="ISSUE"/></center>
</form>

</body>

</html>


