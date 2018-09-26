 <html>
	<head>
        <title>Bootstrap Case</title>
        <meta content="text/html; charset=ISO-8859-1"
        http-equiv="content-type">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        </head>
	<body>
        <div class="container">
  <ul class="nav nav-tabs nav-justified">
    <li><a href="account.php">My account</a></li>
    
    <li><a href="page1.html">Buy product</a></li>
    <li><a href="signout.php">Signout</a></li>
  </ul>
	<br><br><br><br><br>
       
        </div>
        </body>
	</html>






<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$username = $_SESSION['username'];
$conn = mysql_connect("localhost","root","") or die ("couldn't connect to database");
$sql = "UPDATE payment ". "SET balance = 0 ". "WHERE username ='$username'" ;
            mysql_select_db('shopping');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            echo "Thank you for paying balance\n";
            
         
         
?>

<html>
<body>
<h4>Send confirmation receipt via email</h4>
<input type="button" onclick="location.href='mail1.php'" value="Send">
</body>
</html>