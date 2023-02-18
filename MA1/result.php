<html>
<head>
	<title>TAXXY: A Tax Calculator</title>

	<!-- CSS sheets -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Calculator Icon -->
	<link rel="icon" href="calcu1.png" type="image/gif">
</head>

		<body class="result">
		<!--Backend-->
		<?php
				//Get method
				if (isset($_GET['compute']))
				{
					$salary = $_GET["salary"] ;
                    $salary_type = $_GET["stype"];
                    $excess;
                    $annualTax;
                    $monthlyTax;
					
					if($salary_type == "Bi-Monthly" )
					{
						/*Bi-Monthly = 2 years*/
						$salary = $salary * 24;

						/*Bi-Monthly conditions*/
						if($salary <= 250000.00)
						{
							$annualTax = 0.00;
							$monthlyTax = 0.00;
						}

						else if($salary > 250000.00 && $salary <= 400000.00)
						{
							$excess = $salary - 250000.00;
							$annualTax = $excess * 0.2;
							$monthlyTax =  $annualTax / 12;
						}

						else if($salary > 400000.00 && $salary <= 800000.00)
						{
							$excess = $salary - 400000.00;
							$annualTax = $excess * 0.25 + 30000;
							$monthlyTax = $annualTax / 12;
						}

						else if($salary > 800000.00 && $salary <= 2000000.00)
						{
							$excess = $salary - 800000.00;
							$annualTax = $excess * 0.30 + 130000;
							$monthlyTax = $annualTax / 12;
						}

						else if($salary > 2000000.00 && $salary <= 8000000000.00)
						{
							$excess = $salary - 2000000.00;
							$annualTax = $excess * 0.32 + 490000;
							$monthlyTax = $annualTax / 12;
						}

						else if($salary > 8000000.00)
						{
							$excess = $salary - 8000000.00;
							$annualTax = $excess * 0.35 + 2410000;
							$monthlyTax = $annualTax / 12;
						}
					}

					if($salary_type == "Monthly" )
					{
						/*Monthly = 1 year*/
						$salary = $salary * 12;

						/*Monthly conditions*/
						if($salary <= 250000.00)
						{
							$annualTax = 0.00;
							$monthlyTax = 0.00;
						}

						else if($salary > 250000.00 && $salary <= 400000.00)
						{
							$excess = $salary - 250000.00;
							$annualTax = $excess * 0.2 ;
							$monthlyTax = $annualTax / 12;
						}

						else if($salary > 400000.00 && $salary <= 800000.00)
						{
							$excess = $salary-400000.00;
							$annualTax = $excess * 0.25 + 30000;
							$monthlyTax = $annualTax / 12;
						}

						else if($salary > 800000.00 && $salary <= 2000000.00)
						{
							$excess = $salary - 800000.00;
							$annualTax = $excess * 0.30 + 130000;
							$monthlyTax = $annualTax / 12;
						}

						else if($salary > 2000000.00 && $salary <= 8000000000.00)
						{
							$excess = $salary - 2000000.00;
							$annualTax = $excess * 0.32 + 490000;
							$monthlyTax = $annualTax / 12;
						}

						else if($salary > 8000000.00)
						{
							$excess = $salary - 8000000.00;
							$annualTax = $excess * 0.35 + 2410000;
							$monthlyTax = $annualTax / 12;
						}
					}
				}
			?>

		<!--Frontend Design-->
		<br>
		<h1>Here's the result!</h1>
		<hr>

		<br>
        <h3>Thank you for using this tax calculator. Hope it helped you!</h3>

			<div class="container">
				<form action="result.php" method="get">
				<div class="form-container solid-bg1">

                <!--Results-->
				<br><?php echo "Your Annual Salary is: ₱ $salary pesos only.<br>"; ?>
				<br><?php echo "Your Estimated Annual Tax is: ₱ $annualTax pesos only.<br>"; ?>
				<br><?php echo "Your Estimated Monthly Tax is: ₱ $monthlyTax pesos only.<br>" ; ?>

				</form>

			</div>
		
			
		</body>

</html>