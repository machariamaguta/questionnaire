<html>
<head>
</head>
<body>
<form class="form" action="insert.php" method="post">
<textarea name="fullsms" placeholder="Enter Comments Here">
</textarea><br><br>
<button name="submit">Submit</button>
<?php
if(isset($_POST['submit']))
{
include("connect_mpesa.php");
extract($_POST);
$balance=explode("New M-PESA balance is Ksh",$fullsms);
$balance=floatval($balance[1]);
$sql="INSERT INTO test(fullsms,balance)VALUES('$fullsms',$balance)";
$result=mysql_query($sql);
if($result==1)
{
	echo "Data posted successfully";
}
else
{
	echo "Data not posted!Try again later!";
}
}
?>
<br><br>
</form>
</body>
</html>