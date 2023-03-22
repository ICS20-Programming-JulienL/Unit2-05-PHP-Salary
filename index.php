<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="User Input with PHP : Salary Program">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>User Input with PHP : Salary Program</title>
  </head>
  <!--Header and Text-->
  <body>
    <center>
    <?php echo "<h1> User Input with PHP : Salary Program</h1>" ?>
    <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
    <?php echo "<h4>Course: ICS20 Promgramming</h4>" ?>
    <br>
    <br>
    <!--User Input-->
    <?php echo "<h3>Please enter the following:</h3>" ?>
    <form action="./results.php" method="post" target="result">
      <label for="hoursWorked">Hours Worked</label>
      <input type="text" id="hoursWorked" step=".001" placeholder="Enter hours worked" name="hoursWorked"><br><br>
      <label for="hourlyRate">Hourly Rate</label>
      <input type="text" id="hourlyRate" step=".01" placeholder="Enter your hourly rate" name="hourlyRate"><br><br>
      <input type="submit" value="Enter">
    </center>
			<br><br>	
    </form>
      <div id="result"></div>
    <center>
      <!--Final Result of User Input-->
      <iframe id="result" name="result">
        You earned "" + $netIncome
        The government will take "" + $taxes
      </iframe>
    </center>
  </body>
</html>