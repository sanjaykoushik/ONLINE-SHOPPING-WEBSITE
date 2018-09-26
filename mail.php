<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$username = $_SESSION['username'];
$p1 = $_SESSION['p1'];
$p2 = $_SESSION['p2'];
$p3 = $_SESSION['p3'];
$id=null;
$email=null;
$connect = mysql_connect("localhost","root","") or die ("couldn't connect to database");
mysql_select_db("shopping") or die("couldn't find database");
$strSQL = "SELECT * FROM users where username='$username'";
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs))
{
$email=$row['email'] ;
}

$strSQL = "SELECT * FROM payment where username='$username'";
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs))
{
$id=$row['paymentid'] ;
} 

 
mysql_close();
$headers="From:anishkale07@gmail.com \r\n";
$subject="Shopping";
$message="Thank you for purchasing product $p1 of amount $p2 by mode of payment $p3 with id $id....We will deliver it to you shortly ";
$result=mail($email,$subject,$message,$headers);
if($result==true)
{
echo '<script>window.location="page1.html"</script>';
}
else
{
echo "mail unable to send";
} 
?>
