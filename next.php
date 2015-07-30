<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
	</head>
	<body class="body">
		<form class="form" action="next.php" method="post">
 Q6. When you are at(MENTION ALL SOCIAL PLACE VISITED, I.E NOT CODED 7 OR 8 IN Q9 ABOVE, ONE AT A TIME) Do you usually spend money?
<table>
<tr><th rowspan="2">Social Place</th><th>Spend</th></tr>
<tr><th>Yes</th><th>No</th></tr>
<tr><td>Beach</td><td><input name="q6a" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Church/Mosque</td><td><input name="q6b" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Cinema</td><td><input name="q6c" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Clubs/bars/discotheques</td><td><input name="q6d" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Game park</td><td><input name="q6e" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Public parks</td><td><input name="q6f" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Restaurants</td><td><input name="q6g" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Shopping malls</td><td><input name="q6h" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Stadium for sports</td><td><input name="q6i" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Stadium not for sports</td><td><input name="q6j" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Theatre</td><td><input name="q6k" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Video gaming</td><td><input name="q6l" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Video Halls</td><td><input name="q6m" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr><td>Others</td><td><input name="q6n" type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
</table>
<button name="button">Continue</button><br><br>
		</form>

	</body>
</html>
<?php
if(isset($_POST['button']))
{
	extract($_POST);
	if($q6a=="1" OR $q6b=="1" OR $q6c=="1" OR $q6d=="1" OR $q6e=="1" OR $q6f=="1" OR $q6g=="1" OR $q6h=="1" OR $q6i=="1" OR $q6j=="1" OR 
		$q6k=="1" OR $q6l=="1" OR $q6m=="1" OR $q6n=="1")
	{
		 header('location:yes.php');
	}
	else
	{
		header('location:no.php');
	}
}
?>