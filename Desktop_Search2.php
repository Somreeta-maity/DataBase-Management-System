
<html>
<body>
<table>
<tr>
<th>CpuSerialNo</th>
<th>MonitorSerialNo</th>
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


$CpuSerialNo = $_POST['CpuSerialNo'];



if(!empty($CpuSerialNo) )
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
		$sql1="SELECT * FROM Desktop_Stock WHERE CpuSerialNo='$CpuSerialNo'";
		$result = $conn-> query($sql1);
		if($result-> num_rows>0){

			
  			    while($row=mysqli_fetch_row($result))
			    { 
				   
                                if($row[1]==$CpuSerialNo)
				{

                                       $c=$row[0];
				       $a=$row[1];
				       $b=$row[2];
				       $k=$row[4];
                                       $f=$row[5];
				       $g=$row[6];
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

	      
            echo "<tr><td>$a</td><td>$b</td><td>$l</td><td>$m</td><td>$n</td><td>$o</td><td>$p</td><td>$q</td><td>$f</td><td>$g</td></tr>";


              echo "</table>";

			    }
                    }





			    }

                           
			    }
		    
		    else
		    {
			    echo "This Desktop is not in the stock";


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
