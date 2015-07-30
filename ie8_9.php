<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>

<!--CHECKING IE VERSION TO CALL APPROPRIATE CSS-->
<!--[IE 9]>
<link rel="stylesheet" type="text/css" href="ie9.css"/>
<![ENDIF]-->
<!--[IE 8]>
<link rel="stylesheet" type="text/css" href="ie9.css"/>
<![ENDIF]-->
<!--END OF CHECKING IE VERSION-->

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="body">
<center>
<h1>
Consumer Insight Research
</h1>
<form class="form" action="index.php" method="post">
<p>
<br><br>
&nbsp;<input type="text" name="name" placeholder="Enter Interviewee's Name"/><br>
&nbsp;Q1 What company is taking this survey?<br>
<input type="radio" name="Q1" value="A" checked/>Consumer Insight<br>
<input type="radio" name="Q1" value="B"/>GAP Marketing<br>
<input type="radio" name="Q1" value="C"/>Joyfreto Creative Solutions<br><br>
&nbsp;Q2 Are you satisfied with the services offered by company A?<br>
<input type="radio" name="Q2" value="A" checked/>Very Satisfied<br>
<input type="radio" name="Q2" value="B"/>Has room to improve<br>
<input type="radio" name="Q2" value="C"/>Poor Services<br>
</p>
&nbsp;&nbsp;<button name="submit">SUBMIT</button><br><br>
<?php
if(isset($_POST['submit']))
{
include("connect.php");
extract($_POST);
$sql="insert into democi(name,q1,q2) values('$name','$Q1','$Q2')";
$result=mysql_query($sql) or die(mysql_error);
if($result==1)
{
echo "Data uploaded successfully";
}
else
{
echo "Error!Data not uploaded successfully!Please try again later.";
}
//echo $Q1."<br>".$Q2;
}
?>
<br><br>
</form>
</center>
</body>
</html>