<html>
<head>
	<title>TAXXY: A Tax Calculator</title>

	<!-- CSS sheets -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Calculator Icon -->
	<link rel="icon" href="calcu1.png" type="image/gif">
</head>

		<body>

		<!--Frontend Design-->
		<br>
		<h1>Welcome to TAXXY!</h1>
		<hr>

		<br>
        <h3>This is a tax calculator and this will compute the estimated taxes of a working individual.</h3>

			<div class="container">
				<form action="result.php" method="get">
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

				</form>

			</div>
		
			
		</body>

</html>