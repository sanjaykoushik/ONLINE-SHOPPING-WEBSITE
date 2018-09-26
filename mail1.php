<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$username = $_SESSION['username'];
$db = $_SESSION['db'];
$email=null;
$connect = mysql_connect("localhost","root","") or die ("couldn't connect to database");
mysql_select_db("shopping") or die("couldn't find database");
$strSQL = "SELECT * FROM users where username='$username'";
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs))
{
$email=$row['email'] ;
}
mysql_close();
$headers="From:anishkale07@gmail.com \r\n";
$subject="Shopping";
$message="Thank you for paying your balance of amount $db";
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
