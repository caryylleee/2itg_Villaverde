<html>
<head>
	<title>TAXXY: A Tax Calculator</title>

	<!-- CSS sheets -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Calculator Icon -->
	<link rel="icon" href="calcu1.png" type="image/gif">
</head>

		<body>
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

						else if($salary >400000.00 && $salary <= 800000.00)
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
		<h1>Welcome to TAXXY!</h1>
		<hr>

		<br>
        <h3>This is a tax calculator and this will compute the estimated taxes of a working individual.</h3>

			<div class="container">
				<form action="taxxy.php" method="get">
				<div class="form-container solid-bg">

				<!--Salary Details-->
				<div class="form-flex">
						<legend>
                            <h2>Salary:</h2>
							<br>
                        </legend>

                        <label>
                            <input type="text" name="salary" id="color" placeholder="Please input your salary here."/>
                        </label>
                </div>

				<br>

				<!--Salary Type Details-->
				<div class="form-flex">
						<legend>
                            <h2>Type:</h2>
							<br>
                        </legend>

						<label>
								<p><input type="radio" id="color" name="stype" value="Bi-Monthly" checked="checked"/>Bi-Monthly</p>
                		</label>

						<label>
								<p><input type="radio" id="color" name="stype" value="Monthly"/>Monthly</p>
                		</label>
            	</div>

				<button type="submit" name="compute" value="COMPUTE">Compute</button>
				<br>	
				
				<!--Results-->
				<br><?php echo "Your Annual Salary is: ₱ $salary pesos only.<br>"; ?>
				<br><?php echo "Your Estimated Annual Tax is: ₱ $annualTax pesos only.<br>"; ?>
				<br><?php echo "Your Estimated Monthly Tax is: ₱ $monthlyTax pesos only.<br>" ; ?>

				</form>

			</div>
		
			
		</body>

</html>