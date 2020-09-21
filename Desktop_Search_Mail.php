

<html>
<body>
<table>
<tr>
<th>PoNo</th>
<th>CpuSerialNo</th>
<th>MonitorSerialNo</th>
<th>Specification</th>
<th>EmailId</th>
<th>IssueDate</th>
<th>ReturnDate</th>
<th>Status</th>
</tr>



<?php


$EmailId = $_POST['EmailId'];



if(!empty($EmailId) )
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
		$sql1="SELECT * from Desktop_Stock where EmailId='$EmailId'";
		$result = $conn-> query($sql1);
                    if($result-> num_rows>0){
  			    while($row=mysqli_fetch_row($result))
          {
              if($row[4]==$EmailId)
             {       $c=$row[0];
	      $a=$row[1];
	      $b=$row[2];
              $d=$row[3];

	      $k=$row[4];
	      $f=$row[5];
	      $g=$row[6];
	      $e=$row[7];

echo "<tr><td>$c</td><td>$a</td><td>$b</td><td>$d</td><td>$k</td><td>$f</td><td>$g</td><td>$e</td><tr>";
	      
              }
			    }

			    echo "</table>";
                   }
           /*  else
              {


                   header("Location: Laptop_add.html");
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

            
           echo "<tr><td>$l</td><td>$m</td><td>$n</td><td>$o</td><td>$p</td><td>$q</td></tr>";


              }
			    }

			    echo"</table>";
		    }
		else {
echo "0 result";
}

             

	    */

}


}
?>



  </table>

</body>
</html>
