<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="DV8 Game Event 2022">
  <title>Game Event</title>
	<link rel="icon" type="image/x-icon" href="images/dv8.png">
	<!-- Style -->
	<link rel="stylesheet" href="stylesheet.css">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@600&display=swap">
</head>
	<?php
		include"ui/navigationRoot.html";
	?>
	<body>
		<!-- Root of all the text sections -->
		<main>
			<header>
				<img src="images/wiggleBefore.png">
				<h1>Welcome to DV8's Game Event!</h1>
				<img src="images/wiggleAfter.png">
			</header>

			<!-- Root of sections -->

			<!-- Teams -->
			<section id="team">
				<h2>The Teams</h2>
				<?php
				include"ui/teams.html";
				?>
			</section>

			<section id="about">
				<h2>About</h2>
				<div>
					<p>The DV8 Game Event is a panel run by its students, showcasing their hard work they have done during this year and a chance to show off their skills to others!</p>
				</div>
			</section>


			<!-- Visitors -->
			<section id="visitors">
				<h2>Featured Visitors</h2>
				<div>
					<img src="images/visitors/EpicGames.png" alt="Epic Games">
					<img src="images/visitors/makereal.svg" alt="Make Real">
				</div>
			</section>

			<!-- Times -->
			<section id="times">
				<h2>Times and Dates</h2>
				<div class="times">
					<div>
						<h3>Friday - June</h3>
						<div>
							<i class="material-icons">event</i>
							<p>17/6/2022</p>
						</div>
						<div>
							<i class="material-icons">schedule</i>
							<p>11:00 to 16:00</p>
						</div>
						<div>
							<i class="material-icons">place</i>
							<p>27 Richmond Pl, BN2 9NA</p>
						</div>
					</div>
					<img src="images/temporaryDirections.png" alt="directions">
				</div>
			</section>

			<!-- Activities -->
			<section id="activities">
				<h2>Activities</h2>
				<div class="activities">
					<div id="showcase">
						<h3>Game Showcase and Demos</h3>
						<p>Panles showing off the different teams' work and a chance to play some of the amazing works</p>
					</div>
					<div id="demo">
						<h3>Wren's Panel</h3>
						<p>A panel discusing how we could sucessfully implament non-binary chacters into video games. From NPCs to the main cast to the main character themselves.</p>
					</div>
					<div id="more">
						<h3>More!</h3>
						<p>And many other things?!</p>
					</div>
				</div>
			</section>
		</main>

	</body>
	<?php
		include"ui/footer.html";
	?>
</html>
