<?php
	// get the base and height from the textfields
	$hoursWorked = $_POST["hoursWorked"];
	$hourlyRate = $_POST["hourlyRate"];

	// calculate the other variables
  
	$totalPay= $hoursWorked*$hourlyRate;
  $taxes= $totalPay*0.2005;
  $roundedTaxes= round($taxes, 2);
  $netIncome= $totalPay-$roundedTaxes;
  $roundedNetIncome = round($netIncome, 2);
?>
<h3>Results:</h3>
You earned $<?php echo "$roundedNetIncome"?> 
<br>
The government will take $<?php echo "$roundedTaxes" ?> 