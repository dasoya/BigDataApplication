<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Page</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com"
	crossorigin="crossorigin">
<link
	href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
	rel="stylesheet">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-icons.css" rel="stylesheet">
<link href="css/templatemo-topic-listing.css" rel="stylesheet">

<style>
body, html {
	width: 100%;
	height: 100%;
}

.hero-section {
	width: 100%;
	height: 100%;
}
</style>
</head>
<body id="top">

	<main class="hero-section d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex justify-content-center align-items-center mx-auto">
					<div class="estimate-form">

						<form method="POST">
                            			<?php session_start(); ?>

							<div class="mb-3">
								<h1 class="text-white text-left">Which city do you want to
									travel?</h1>
								<h6 class="text-left">Choose a city to find out the travel cost</h6>

								<select class="form-control" name="cityId" id="cityId" required>
									<option disabled="disabled" selected="selected" value="">City</option>
                                                <?php include 'esmt_cityoption.php'; ?>

                                            </select>
							</div>

							<div class="mb-3">
								<h6 class="text-white text-left">How long will you stay?</h6>
								<input type="number" class="form-control" placeholder="Duration"
									id="duration" name="duration" required="required" min="1">
							</div>

							<div class="mb-3">
								<h6 class="text-white text-left">What accommodation will you
									stay at?</h6>
								<select class="form-control" name="accType" id="accType"
									 required>
									<option disabled="disabled" selected value="">Accommodation
										Type</option>
									<option value="Hotel">Hotel</option>
									<option value="Guesthouse">Guesthouse</option>
									<option value="Airbnb">Airbnb</option>
									<option value="Riad">Riad</option>
									<option value="Resort">Resort</option>
									<option value="Vacation rental">Vacation rental</option>
									<option value="Villa">Villa</option>
								</select>
							</div>

							

							<div class="mb-3">
								<h6 class="text-white text-left">Which mode of transportation will you take for your trip?</h6>
								<select class="form-control" name="transType" id="transType"
									 required>
									<option disabled="disabled" selected value="">Transportation
										Type</option>
									<option value="Airplane">Airplane</option>
									<option value="Bus">Bus</option>
									<option value="Car">Car</option>
									<option value="Car rental">Car rental</option>
									<option value="Ferry">Ferry</option>
									<option value="Subway">Subway</option>
									<option value="Train">Train</option>
								</select>
							</div>

					
							<button type="submit" class="btn btn-primary">Submit</button>
										
										
										<?php

                               
                                    session_start();
                                
                        
                                $_SESSION['cityId'] = $_POST['cityId'];
                                $_SESSION['accType'] = $_POST['accType'];
                                $_SESSION['duration'] = $_POST['duration'];
                                $_SESSION['transType'] = $_POST['transType'];
                                // echo $cityId." ".$accType." ".$duration." ".$transType;
                                ?>
								
										
                            </form>
					</div>

				
						


				</div>


				<div class="col-lg-6 d-flex justify-content-end align-items-end">
					<div class="col-lg-12 justify-content-end text-end">	
					<?php include 'esmt_acc.php';
					include 'esmt_trans.php';
					?> 
					<div style='color: var(--bs-gray-dark);' class="col-lg-12 justify-content-end"> <?php include 'esmt_station.php';?></div>
					<?php include 'esmt_total.php'; ?>
				</div>

				</div>

			</div>
		</div>

	</main>

	<!-- JAVASCRIPT FILES -->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/click-scroll.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/submit"></script>

</body>
</html>