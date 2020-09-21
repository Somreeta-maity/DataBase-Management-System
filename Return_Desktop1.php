
<?php

$EmailId = $_POST['EmailId'];
$CpuSerialNo = $_POST['CpuSerialNo'];
$PoNo= $_POST['PoNo'];
$Specification=$_POST['Specification'];
$IssueDate= date('Y-m-d');


if( !empty($CpuSerialNo) )
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

              $sql1="SELECT * from Desktop_Stock where CpuSerialNo='$CpuSerialNo'";
		
		$result = $conn-> query($sql1);
                    if($result-> num_rows>0){
                            while($row=mysqli_fetch_row($result))
          {
              if($row[1]==$CpuSerialNo)
             {       $c=$row[0];
                    $a=$row[1];
                     $b=$row[2];
                     $d=$row[3];
		     $k=$row[4];
		     $f=$row[5];
		     $g=$row[6];
		     $e=$row[7];
              }
             }
                   }
              else
              {


                   header("Location: Desktop_add.html");
              }



                $sql2="SELECT * from UserData where EmailId='$k'";
                $result2 = $conn-> query($sql2);
                    if($result2-> num_rows>0){
                            while($row2=mysqli_fetch_row($result2))
          {
              if($row2[5]==$k)
             {       $l=$row2[0];
                      $m=$row2[1];
	      $n=$row2[2];
	      $o=$row2[3];
	      $p=$row2[4];
	      $q=$row2[5];
              }
             }
                   }
             
           
	
             if($e=='1')
		{
	


		echo "Desktop is already in the stock";

	     }
		   

          else
	  {
		 

echo "<form action='Return_Desktop2.php' method='post'/>";


echo"Name<input type='text'  name='Name'value='$l' placeholder='Name'/>";
echo"RollNo<input type='text'  name='RollNo'value='$m' placeholder='RollNo'/>";
echo"Designation<input type='text'  name='Designation'value='$n' placeholder='Designation'/>";
echo"Department<input type='text'  name='Department'value='$o' placeholder='Department'/>";
echo"MobileNo<input type='text'  name='MobileNo'value='$p' placeholder='MobileNo'/>";
echo "EmailId<input type='text'  name='EmailId'value='$q' placeholder='EmailId'/>";
echo "<center><input type='submit' name='submit' value='Return' /></center>";



echo "<input type='hidden' name='PoNo' value='$c' placeholder='PoNo'/>";
echo "<input type='hidden' name='CpuSerialNo' value='$a' placeholder='CpuSerialNo'/>";
echo "<input type='hidden' name=MonitorSerialNo' value='$b' placeholder='MonitorSerialNo'/>";
echo "<input type='hidden' name='Specification' value='$d' placeholder='Specification'/>";
echo "<input type='hidden' name='IssueDate' value='$f' placeholder='IssueDate'/>";
echo "<input type='hidden' name='ReturnDate' value='$g' placeholder='ReturnDate'/>";
echo "<input type='hidden' name='Status' value='$e' placeholder='Status'/>";
echo "</from>";

	  }


		/*
           

			echo "</form>";
echo "<form name='input' action='index.php' method='get'>";
echo "<table border='0' cellpadding='0' cellspacing='0' width='600' height='400'>";
echo "<tr>";
echo "<td height='560'><textarea class='textarea' name='xml' cols='83' rows='37'>";
echo "$test";
echo "</textarea></td>";
echo "</tr>";
echo "<tr>";
echo "<td height='40' align='center'><input type='submit' value='PRENESI XML'></td>";
echo "</tr>";
echo "</table>";
echo "</form>";

 */

/*

			echo "$a";
			echo "$b";
			echo "$d";
			echo "$k";
			echo "$f";
			echo "$g";

 
		}*/

	
}


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

}

																						   </style>


 <body>
<!--






<form action="Return_Desktop3.php" method="post">
<table >
<tr>


<th>Name</th>
<th>RollNo</th>
<th>Designation</th>
<th>Department</th>
<th>MobileNo</th>
<th>EmailId</th>
 </tr>
 <tr>


<td><input type="text"  name="Name"value="<?php echo $l;?>" placeholder="Name"></td>
<td><input type="text"  name="RollNo"value="<?php echo $m;?>" placeholder="RollNo"></td>
<td><input type="text"  name="Designation"value="<?php echo $n;?>" placeholder="Designation"></td>
<td><input type="text"  name="Department"value="<?php echo $o;?>" placeholder="Department"></td>
<td><input type="text"  name="MobileNo"value="<?php echo $p;?>" placeholder="MobileNo"></td>
<td><input type="text"  name="EmailId"value="<?php echo $q;?>" placeholder="EmailId"></td>


<input type="hidden" name="poNo" value="<?php echo $c;?>" placeholder="PoNo">
<input type="hidden" name="cpuSerialNo" value="<?php echo $a;?>" placeholder="CpuSerialNo">
<input type="hidden" name="monitorSerialNo" value="<?php echo $b;?>" placeholder="MonitorSerialNo">
<input type="hidden" name="specification" value="<?php echo $d;?>" placeholder="Specification">
<input type="hidden" name="issueDate" value="<?php echo $f;?>" placeholder="IssueDate">
<input type="hidden" name="returnDate" value="<?php echo $g;?>" placeholder="ReturnDate">
<input type="hidden" name="status" value="<?php echo $e;?>" placeholder="Status">


</tr>
</table>


<center><input type="submit" name="Update" value="Return"/></center>
</form>
-->
</body>

</html>

