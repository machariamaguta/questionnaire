<html>
	<form method="get" action="validating.php">
	<input type="radio" name="q1" value="A" />
	<input type="radio" name="q2" value="B" />
	<button name="submit">Submit</button>
	
<?php
if(isset($_REQUEST['submit']))
{
extract($_GET);

if($q1=="" OR $q2=="")
{
	echo "Some questions haven't been answered!";
}
if($q1=="")
{
	echo "Question one has been left blank! Please go back and fill it!";
}
else if($q2=="")
{
	echo "Question two has been left blank please go back and answer it!";
}
else
{
	echo "All quesions answered!";
}
}
?>
	</form>
	
</html>