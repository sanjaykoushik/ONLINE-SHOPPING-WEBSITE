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
    <li class="active"><a href="#">My account</a></li>
    
    <li><a href="page1.html">Buy product</a></li>
    <li><a href="signout.php">Signout</a></li>
  </ul>
	<br><br><br><br><br>
        <form action="balance.php" method="post">
        <h4>Pay remaining balance</h4>
        <input type="radio" value="card" name="credit" checked>Credit card
        <input type="submit" value="pay">
        </form>
<div>
       
<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$username = $_SESSION['username'];
$balance=null;
$colspan=2;
$rowspan=2;
$discount=null;
$db=null;
$percent=10;
$h=100;
$connect = mysql_connect("localhost","root","") or die ("couldn't connect to database");
mysql_select_db("shopping") or die("couldn't find database");
$strSQL = "SELECT * FROM payment where username='$username'";
$rs = mysql_query($strSQL);
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>"."username"."</th>";
        echo "<th>"."mode"."</th>";
        echo "<th>"."product name"."</th>";
        echo "<th>"."amount"."</th>";
        echo "<th>"."balance"."</th>";
        echo "</tr>";
      	while($row = mysql_fetch_array($rs))
          {
            
	   echo "<tr><td>".$row['username']."&nbsp"."&nbsp"."&nbsp"."</td>";
            echo "<td>".$row['mode']."&nbsp"."&nbsp"."&nbsp"."</td>";
           echo "<td>".$row['productname']."&nbsp"."&nbsp"."&nbsp"."</td>";
           echo "<td>".$row['amount']."&nbsp"."&nbsp"."&nbsp"."</td>";
           echo "<td>".$row['balance']."&nbsp"."&nbsp"."&nbsp"."</td></tr>";
          
       
	  }
        
          echo "<br />";
           echo "</table>";
	 
          $strSQL = "SELECT * FROM payment where username='$username'"; 
          $rs = mysql_query($strSQL);
          	while($row = mysql_fetch_array($rs))
          {
          $balance=$balance+$row['balance'] ;          

          }  
          $discount = ($percent/ $h) * $balance;
          $db=$balance-$discount;
          $_SESSION['db']=$db;;
           echo "<h4>Total balance is $balance</h4>";
           echo "<h4>Discounted balance is $db</h4>";
          
	// Close the database connection
	mysql_close();
	?>
</div>
</div>
</body>
</html>
	