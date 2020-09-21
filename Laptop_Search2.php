<html>
<body>
<table>
<tr>
<th>SerialNo</th>
<th>Name</th>
<th>RollNo</th>
<th>Designation</th>
<th>Department</th>
<th>MobileNo</th>
<th>EmailId</th>
<th>IssueDate</th>
<th>ReturnDate</th>
</tr>



<?php


$SerialNo = $_POST['SerialNo'];



if(!empty($SerialNo) )
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
		$sql1="SELECT * FROM Laptop_Stock WHERE SerialNo='$SerialNo'";
		$result = $conn-> query($sql1);
		if($result-> num_rows>0){

			
  			    while($row=mysqli_fetch_row($result))
			    { 
				   
                                if($row[1]==$SerialNo)
				{

                                       $c=$row[0];
                                       $a=$row[1];
				       $k=$row[3];
                                       $f=$row[4];
				       $g=$row[5];
				}     
				  
		$sql2="SELECT * FROM UserData WHERE EmailId='$k'";
                $result2 = $conn-> query($sql2);
                    if($result2-> num_rows>0){
                            while($row2=mysqli_fetch_row($result2))
          {

                    $l=$row2[0];
                      $m=$row2[1];
              $n=$row2[2];
              $o=$row2[3];
              $p=$row2[4];
              $q=$row2[5];


            echo "<table>";

	      
            echo "<tr><td>$a</td><td>$l</td><td>$m</td><td>$n</td><td>$o</td><td>$p</td><td>$q</td><td>$f</td><td>$g</td></tr>";


              echo "</table>";

			    }
                    }





			    }

                           
			    }
		    
		    else
		    {
			    echo "This Laptop is not in the stock";


		    }

/*
             
                $sql2="SELECT * from UserData where EmailId='$k'";
                $result2 = $conn-> query($sql2);
                    if($result2-> num_rows>0){
                            while($row2=mysqli_fetch_row($result2))
          {
              
                    $l=$row2[0];
                      $m=$row2[1];
	      $n=$row2[2];
	      $o=$row2[3];
	      $p=$row2[4];
	      $q=$row2[5];

            
           echo "<tr><td>$l</td><td>$m</td><td>$n</td><td>$o</td><td>$p</td><td>$q</td></tr>";


              }
			    
			    echo"</table>";
		    }

			
 */		

}


}
?>



  </table>

</body>
</html>
