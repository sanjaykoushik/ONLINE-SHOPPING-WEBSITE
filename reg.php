<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$username=$_POST['username'];
$user=null;
$flag=null;
$password=$_POST['password'];
$cpass=$_POST['cpass'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];

if($password!=$cpass)
{
die("passwords don't match");
}

if ($username&&$password&&$name&&$email&&$address&&$gender)
{
$connect = mysql_connect("localhost","root","") or die ("couldn't connect to database");
mysql_select_db("shopping") or die("couldn't find database");
$strSQL = "SELECT * FROM users";
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs))
{
if($username==$row['username'])
{
echo "user already exist";
$flag=1;
}

}
if (!stristr($email,"@") OR !stristr($email,"."))
 {
$flag=1;
die("please enter a valid email address");
} 


if($flag==null)
{
$query = mysql_query("INSERT INTO users(username,password,name,email,address,gender) VALUES(('$username'),('$password'),('$name'),('$email'),('$address'),('$gender'))");
header('Location: reg.html');
}

}
else 
die("please enter data");


?>