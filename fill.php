<?php echo '<?xml version="1.0" encoding="IUTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title>Fill a prescription</title>
<link rel="stylesheet" type="text/css" href="stylesfl.css"/>
</head>
<body>
<script type="text/javascript" src="catalog.js"></script>
<h1>Prescription data entry form:</h1>
<p>
</p>
<form method="post" action="label.php" onsubmit="return Validate()">
<p>
<?php
function SessionExists()
{
	return array_key_exists("name", $_SESSION);
}
function Initialize()
{
	session_start();
	if (SessionExists())
	{
	}
}
Initialize();
?>

</p>
<script type="text/javascript">
function Validate()
{
	//Input was acceptable.
	return true;
}
</script>
<p id="description"></p>
<p>
Patient's name:
<input type="textbox" name="patientname" id="patientname" size="40" style=""/>
</p>
<p>
Prescription text:
<input type="textbox" name="prescription" id="prescription" size="120" style=""/>
<input type="submit" value="Fill"/>
</p>
</form>




<p>
<a href="index.php">Home</a>
</p>


</body>
</html>