<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$username = $_SESSION['username'];
$mode=$_POST['payment'];
$product=$_POST['product'];
$connect = mysql_connect("localhost","root","") or die ("couldn't connect to database");
mysql_select_db("shopping") or die("couldn't find database");
if($product=='bulb')
{
if($mode=='monthly')
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('100'),('100'))");
echo '<script>window.location="order.php"</script>';
$_SESSION['p1']='bulb';
$_SESSION['p2']=100;
$_SESSION['p3']=$mode;
}
else
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('100'),('0'))");
$_SESSION['p1']='bulb';
$_SESSION['p2']=100;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
}
if($product=='thali')
{
if($mode=='monthly')
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('100'),('100'))");
$_SESSION['p1']='thali';
$_SESSION['p2']=100;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
else
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('100'),('0'))");
$_SESSION['p1']='thali';
$_SESSION['p2']=100;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
}
if($product=='tubelight')
{
if($mode=='monthly')
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('150'),('150'))");
$_SESSION['p1']='tubelight';
$_SESSION['p2']=150;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
else
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount) VALUES(('$mode'),('$username'),('$product'),('150'),('0'))");
$_SESSION['p1']='tubelight';
$_SESSION['p2']=150;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
}
if($product=='snacks')
{
if($mode=='monthly')
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('40'),('40'))");
$_SESSION['p1']='snacks';
$_SESSION['p2']=40;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
else
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('40'),('0'))");
$_SESSION['p1']='snacks';
$_SESSION['p2']=40;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
}
if($product=='shirt')
{
if($mode=='monthly')
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('299'),('299'))");
$_SESSION['p1']='shirt';
$_SESSION['p2']=299;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
else
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('299'),('0'))");
$_SESSION['p1']='shirt';
$_SESSION['p2']=299;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
}
if($product=='jeans')
{
if($mode=='monthly')
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('199'),('199'))");
$_SESSION['p1']='jeans';
$_SESSION['p2']=199;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
else
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('199'),('0'))");
$_SESSION['p1']='jeans';
$_SESSION['p2']=199;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
}
if($product=='te_books')
{
if($mode=='monthly')
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('400'),('400'))");
$_SESSION['p1']='te_books';
$_SESSION['p2']=400;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
else
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('400'),('0'))");
$_SESSION['p1']='te_books';
$_SESSION['p2']=400;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
}
if($product=='be_books')
{
if($mode=='monthly')
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('400'),('400'))");
$_SESSION['p1']='be_books';
$_SESSION['p2']=400;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
else
{
$query = mysql_query("INSERT INTO payment(mode,username,productname,amount,balance) VALUES(('$mode'),('$username'),('$product'),('400'),('0'))");
$_SESSION['p1']='be_books';
$_SESSION['p2']=400;
$_SESSION['p3']=$mode;
echo '<script>window.location="order.php"</script>';
}
}
?>