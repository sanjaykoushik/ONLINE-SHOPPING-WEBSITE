
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

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
    <link href="style1.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <body>
    <header class="clearfix">
           </div>
      <h1>Shopping Receipt</h1>
      <div id="company" class="clearfix">
        <div>Company Address</div>
        <div>KJSIEIT,sion<br /></div>
        <div>9876543210</div>
        <div><a href="mailto:test@shopping.com">test@shopping.com</a></div>
      </div>
      <div id="project">
        <div><span>USERNAME</span><?php echo "$username"?></div>
        <div><span>EMAIL</span><?php echo "$email"?> </div>
        
       <div><span>DATE</span> <?php $theDate = date("d/m/y"); echo " $theDate"; ?></div>
        
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Payment id</th>
            <th class="desc">Product Name</th>
            <th>Mode of Payment</th>
            <th>Amount</th>
         </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"><?php echo "$id" ?></td>
            <td class="desc"><?php echo "$p1" ?></td>
            <td class="unit"><?php echo "$p3" ?></td>
            <td class="qty"><?php echo "$p2" ?></td>
                      </tr>
          <tr>
                     </tbody>
      </table>
      <div id="notices">
                    </div>
    </main>


<br>
<h3 align="center">
Thank you for the purchase
</h3>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h4>Send confirmation receipt via email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp  
&nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp   &nbsp  &nbsp   &nbsp  &nbsp  Return to account</h4>
<input type="button" onclick="location.href='mail.php'" value="Send">
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="button" onclick="location.href='page1.html'" value="Return">
      </body>

</html>



