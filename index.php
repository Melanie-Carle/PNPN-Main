<!-- Homepage-->
<!doctype html>
<html>
	<head>
		
		<?php
			include("Javascript/connections/req.php");
			include("Views/Partials/Header.php");
		?>	
		
	</head>

	<body>

		<div class = "container-flow">
			<div class = "d-flex">
				<div class="row">
					<div class = "col-xl-9 d-flex">
						<div id="CarouselControls" class="carousel slide" data-ride="carousel">
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
					<div class="col-xl-3 d-flex" id="AboutBoxHome">
						<div class="AboutUs">Legacy Bay</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>