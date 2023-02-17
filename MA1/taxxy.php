<html>
<head>
	<title>TAXXY: A Tax Calculator</title>

	<!-- CSS sheets -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Calculator Icon -->
	<link rel="icon" href="calcu1.png" type="image/gif">
</head>

		<body>
		<h1>Welcome to TAXXY!</h1>
		<hr>

		<br>
        <h3>This is a tax calculator and this will compute the estimated taxes of a working individual.</h3>

			<div class="container">
				<form method="post" action="">
				<div class="form-container solid-bg">

				<!--Salary Details-->
				<div class="form-flex">
						<legend>
                            <h2>Salary:</h2>
							<br>
                        </legend>

                        <label>
                            <input type="text" id="color" checked="checked" />
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
                            <span class="sub-link">Bi-Monthly</span>
                            <input type="radio" id="color" name="salary_type" value="Bi-Monthly" checked="checked" />
                        </label>

                        <label>
                            <span class="sub-link">Monthly</span>
                            <input type="radio" id="color" name="salary_type" value="Monthly" />
                        </label>
                	</div>

				<input type="submit" name="sub" value="COMPUTE">
				<br>

				<!--Results-->
				<div>
					<br><h4>Annual Salary:</h4>
					<br><h4>Estimated Annual Tax:</h4>
					<br><h4>Estimated Monthly Tax:</h4>
				</div>

				</form>
			</div>
		</body>

</html>