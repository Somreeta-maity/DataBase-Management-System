
<?php

$a=$_POST['EmailId'];

?>

<html>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <center><h2>Computer & Statistical Service Centre</h2></center>

        <style>
body {
  background-color: #F0F8FF;
}


input[type=text] {
margin-top:300px;
   box-sizing: border-box;
  border: 2px solid black ;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
   background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}

input[type=password] {
        margin:auto;
   box-sizing: border-box;
  border: 2px solid black ;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
   background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
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
  margin: 20px 20px;
  cursor: pointer;
}


</style>
  <body>
          <form method="post" action="Issue_Desktop_Serial_Search2.php">
<form>
        <center>SerialNo <input type="text" name="CpuSerialNo" placeholder="CpuSerialNo" required></center>
	  <center><input type="submit" name="delete" value="show"></center><br></br>
<input type="hidden" name="EmailId" value="<?php echo $a;?>" placeholder="EmailId"></td>

                                                                                                                                                                                                 1,1           </form>
  </body>
  </html>



