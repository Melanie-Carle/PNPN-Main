<!doctype html>
<html>
<head>
	
	<link href="CSS/Master.css" rel="stylesheet" type="text/css">
	<?php
		include("Views/Partials/Header.php");
		include("Javascript/connections/req.php");
	?>	
	
</head>

<body>
	<div class = "container">
		<div class = "d-flex justify-content-center">
			<div class = "col">
				<div id="CarouselControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="CSS/styles/PNSR20.jpg">
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
		</div>
	</div>

</body>
</html>