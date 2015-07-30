<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>
<body class="body">
<form class="form" action="index.php" method="post">
Towns<br>
<input type="radio" name="town" value="1" checked/>Nairobi
<input type="radio" name="town" value="2" />Mombasa
<input type="radio" name="town" value="3" />Kisumu
<input type="radio" name="town" value="4" />Eldoret
<input type="radio" name="town" value="5" />Meru
<input type="radio" name="town" value="6" />Nyeri<br>

<input type="text" name="name" placeholder="Enter Respondents Name Here"/><br><br>

<input type="text" name="estate" placeholder="Enter Respondents Estate Name Here"/><br><br>

<input type="text" name="street" placeholder="Enter Respondents Street Here"/><br><br>

<input type="text" name="door" placeholder="Enter Respondents Door number Here"/><br><br>

<input type="text" name="number" placeholder="Enter Respondents phone number Here"/><br><br>

<input type="text" name="email" placeholder="Enter Respondents email address Here"/><br><br>

Q1. Do you or anyone in your household work in any of the following organisations?<br>
<input type="radio" name="q1" value="1" checked/>Advertising agency<br>
<input type="radio" name="q1" value="2" />Market research company<br>
<input type="radio" name="q1" value="3" />Media house <br>
<input type="radio" name="q1" value="4" />Sales promotion company<br>
<input type="radio" name="q1" value="5" />Others/None of the above<br><br>

Q2. Please also code where the respondent age falls in the following age brackets.<br>
<input type="radio" name="q2" value="1" checked/>Below 13 years<br>
<input type="radio" name="q2" value="2" />13-15 years<br>
<input type="radio" name="q2" value="3" />16-19 years<br>
<input type="radio" name="q2" value="4" />20-25 years<br>
<input type="radio" name="q2" value="5" />26-30 years<br>
<input type="radio" name="q2" value="8" />Above 30 years<br>

<button name="submit">Check Requirements</button><br><br>
<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	if($q1=="5")
	{
		if($q2=="2" OR $q2=="3" OR $q2=="4" OR $q2=="5")
		{
			$q1=intval($q1);
			$q2=intval($q2);
			header('location:main.php?q1=$q1&q2=$q2');
		}
		else
		{
			echo "You don't fall within the age bracket!";
			die;
		}
	}
	else
	{
		echo "You've been disqualified because of you relation to the above working fields.";
		die;
	}
}
?>
</form>
</body>
</html>