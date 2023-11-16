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

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-icons.css" rel="stylesheet">
<link href="../css/templatemo-topic-listing.css" rel="stylesheet">

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
						<?php

							if(!session_id()) {
								session_start();
							} ?>

							<div class="mb-3">
								<h1 class="text-white text-left">Which city do you want to
									travel?</h1>
								<h6 class="text-left">Choose a city to find out the travel cost</h6>

								<select class="form-control" name="cityId" id="cityId" required>
									<option disabled="disabled" selected="selected" value="">City</option>
                                                <?php include '../estimation/esmt_cityoption.php'; ?>

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
										<?php include '../estimation/esmt_accoption.php'; ?>
									
								</select>
							</div>

							

							<div class="mb-3">
								<h6 class="text-white text-left">Which mode of transportation will you take for your trip?</h6>
								<select class="form-control" name="transType" id="transType"
									 required>
									<option disabled="disabled" selected value="">Transportation
										Type</option>
										<?php include '../estimation/esmt_transoption.php'; ?>
									
								</select>
							</div>

					
							<button type="submit" class="btn btn-primary">Submit</button>
										
										
								<?php

					
								
                        
								if(isset($_POST['cityId']) && isset($_POST['accType']) && isset($_POST['duration']) && isset($_POST['transType'])) {
									$_SESSION['cityId'] = $_POST['cityId'];
									$_SESSION['accType'] = $_POST['accType'];
									$_SESSION['duration'] = $_POST['duration'];
									$_SESSION['transType'] = $_POST['transType'];
									$_SESSION['total'] = True;
								}else{
									$_SESSION['cityId'] = NULL;
									$_SESSION['accType'] = NULL;
									$_SESSION['duration'] = NULL;
									$_SESSION['transType'] = NULL;
									$_SESSION['total'] = NULL;

								}
                                // echo $cityId." ".$accType." ".$duration." ".$transType;
                                ?>
								
										
                            </form>
					</div>

				</div>


				<div class="col-lg-6 d-flex justify-content-end align-items-end">
					<div class="col-lg-12 justify-content-end text-end">	
					<?php include '../estimation/esmt_acc.php';
					include '../estimation/esmt_trans.php';
					?> 
					
					<div style='color: var(--bs-gray-dark);' class="col-lg-12"> <?php include '../estimation/esmt_station.php';?></div>
				
					<?php include '../estimation/esmt_total.php'; ?>
					<?php include '../estimation/esmt_acc_rcm.php'; ?>
					<div>
					<details>
						<summary>Check the other travel options</summary>
						<div class="col-lg-12 d-flex justify-content-end align-items-end"><?php include '../estimation/esmt_city_info.php'; ?></div>
					</details>
					</div>
				</div>

				</div>

			</div>
		</div>

	</main>

	<!-- JAVASCRIPT FILES -->

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/jquery.sticky.js"></script>
	<script src="../js/click-scroll.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../js/submit"></script>

</body>
</html>