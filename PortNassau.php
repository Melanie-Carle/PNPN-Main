<!doctype html>
<html>
	<head>
		
		<?php
			include("Javascript/connections/req.php");
			include("Views/Partials/Header.php");
		?>	
		
	</head>

	<body>
		<div class="container-flow">
			<div class = "row">

				<!--Left Column-->
				<div class="col-xl-9 d-flex flex-column" id="EventLeftColumn">

					<!--Page Banner-->
					<img class="mx-auto d-block" src="CSS/styles/PortNassauBanner.png" style="margin-top: 0.5em; width: 90%; height: auto;">

					<!--Slide Show-->
					<div class = "mx-auto d-block">
						<div id="CarouselControlsEventPage" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="CSS/styles/DSC_0763.jpg">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#CarouselControls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#CarouselControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>

					<!--Column within the left side column-->
					<div class="row">

						<!--Defender and other stuff-->
						<div class="col-md">

						</div>

						<!--Blog/News Updates-->
						<div class="col-md">

						</div>
					</div>

				</div>


				<!--Right Column-->
				<div class="col-xl-3 d-flex flex-column" id="EventRightColumn">

					<!--Event Location-->
					<div class="Port">Port</div>
						<div class="col d-flex flex-column">
							<div class = "EventLocation">
								<div>Cheadle Lake Park</div>
								<div>Lebanon, OR</div>
							</div>
						</div>

					<!--Countdown-->
					<div class="Countdown">Countdown</div>
					<div class="col d-flex flex-column">
						<div id="CountdownBox">
							<div>
								<div id="NassauEventCountdown"></div>
							</div>
						</div>
					</div>
					<script>
						// Set the date we're counting down to
						var countDownDate = new Date("July 16, 2020 08:00:").getTime();

						// Update the count down every 1 second
						var x = setInterval(function() {

						  // Get today's date and time
						  var now = new Date().getTime();

						  // Find the distance between now and the count down date
						  var distance = countDownDate - now;

						  // Time calculations for days, hours, minutes and seconds
						  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
						  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

						  // Display the result in the element with id=""
						  document.getElementById("NassauEventCountdown").innerHTML = days + "d " + hours + "h "
						  + minutes + "m ";

						  // If the count down is finished, write some text
						  if (distance < 0) {
						    clearInterval(x);
						    document.getElementById("NassauEventCountdown").innerHTML = "It's Time!";
						  }
						}, 1000);
					</script>

					<!--Navigation-->
					<div class="EventNavigationTitle">Navigation</div>
					<div class="col d-flex flex-column">
						<div class = "EventNavigation">
							<div style="font-size: 1.1em; padding-left: 0.6em; color: red">Registration</div>
							<div style="font-size: 1.1em; padding-left: 3em;">Pre-Registration</div>
							<div style="font-size: 1.1em; padding-left: 3em;">Private Biffie</div>
							<div style="font-size: 1.1em; padding-left: 3em; padding-bottom: 0.5em;">Merchants</div>

							<div style="font-size: 1.1em; padding-left: 0.6em; padding-top: 0.5em; color: red">Camping</div>
							<div style="font-size: 1.1em; padding-left: 3em;">Map</div>
							<div style="font-size: 1.1em; padding-left: 3em; padding-bottom: 0.5em;">Land Grants</div>

							<div style="font-size: 1.1em; padding-left: 0.6em; padding-top: 0.5em;">Event Program</div>

							<div style="font-size: 1.1em; padding-left: 0.6em; padding-top: 0.5em;">Volunteering</div>

						</div>
					</div>

				</div>


			</div>
		</div>
	</body>
</html>
