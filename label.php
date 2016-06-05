<?php echo '<?xml version="1.0" encoding="IUTF-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Order Confirmation</title>
<link rel="stylesheet" type="text/css" href="stylespl.css"/>
</head>
<body onload="Initialize()">
<p>
<script type="text/javascript">
function SetLabel(patientdisplay, drugdisplay, prescriptiondisplay)
{
	//alert('eet');
	document.getElementById("patientdisplay").innerHTML =patientdisplay;
	document.getElementById("drugdisplay").innerHTML =drugdisplay;
	document.getElementById("prescriptiondisplay").innerHTML =prescriptiondisplay;
}

function Print()
{
	window.print();
}
</script>
<?php


function DisplayLabel($patientname, $drugname, $prescription)
{
	print "Thank you. A prescription will be filled for $patientname. The prescription is for $drugname, with the instructions as '$prescription' .";
	print "<script type='text/javascript'>function Initialize(){ SetLabel('$patientname','$drugname','$prescription');}</script>";
}

DisplayLabel($_POST["patientname"], $_POST["drug"], $_POST["prescription"]);

?>
</p>

<p>

<table>
<tr>
<th>
Pharmacy Simulator
</th>
<td>
</td>
</tr>

<tr>
<th>
1 Nowhere in Particular
</th>
<td>
Patient: <span id="patientdisplay">Arthur, King of the Britons</span>
</td>
</tr>

<tr>
<th>
</th>
<td>
Rx: <span id="drugdisplay">Drug1</span>
</td>
</tr>
<tr>
<th>
</th>
<td>
Directions: <span id="prescriptiondisplay">Fenny Snake, 10mg fillet. Swallow whole, drink plenty of beer.</span>
</td>
</tr>

</table>
<p>
<input type="button" id="Print" name="Print" value="Print" onclick="Print()"/>
<p>
<a href="fill.php">Fill another prescription</a>
<p>
<a href="index.php">Go back home</a>
</p>
</body>
</html>