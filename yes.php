<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>
	<body class="body">
		<form class="form" method="post" action="yes.php">
Q6. Who usually pays the money needed at the social place? ASK FOR EACH SOCIAL PLACE VISITED.
<table>
<tr><th rowspan="2">Social Place</th><th>Company</th></tr>
<tr><th>Self</th><th>Others</th></tr>
<tr name="q6a"><td>Beach</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6b"><td>Church/Mosque</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6c"><td>Cinema</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6d"><td>Clubs/bars/discotheques</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6e"><td>Game park</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6f"><td>Public parks</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6g"><td>Restaurants</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6h"><td>Shopping malls</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6i"><td>Stadium for sports</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6j"><td>Stadium not for sports</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6k"><td>Theatre</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6l"><td>Video gaming</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6m"><td>Video Halls</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
<tr name="q6n"><td>Others</td><td><input type="checkbox" value="1"/></td><td><input type="checkbox" value="2"/></td></tr>
</table>
<button name="button">Continue</button><br><br>
		</form>
	</body>
</html>
<?php
if(isset($_POST['button']))
{
header('location:no.php');
}
?>