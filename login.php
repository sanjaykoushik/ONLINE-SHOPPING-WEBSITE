<?php
session_start();

$username=$_POST['username'];

$password=$_POST['password'];

if ($username&&$password)
{
$connect = mysql_connect("localhost","root","") or die ("couldn't connect to database");
mysql_select_db("shopping") or die("couldn't find database");
$query = mysql_query("SELECT * FROM users WHERE username='$username'");
$numrows = mysql_num_rows($query);
if($numrows!==0)
{
while($row = mysql_fetch_assoc($query))
{
$dbusername =$row['username'];
$dbpassword=$row['password'];



}
if($username==$dbusername&&$password==$dbpassword)
{
$_SESSION['username'] = $username;
    
header('Location: page1.html');
    
}
else
echo "Your password is incorrect";




}
else
die("That user doesn't exist");


}
else 
die("Please enter a username and password");


?>