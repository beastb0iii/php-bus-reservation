<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bus Reservation</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- NAVBAR -->
    <header class="fixed-top" id="header">
		<div class="container d-flex align-items-center">
			<h1 class="logo me-auto">
				<a href="index.php">Online Bus Reservation</a>
			</h1>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li><a class="active" href="index.php">Home</a></li>
					<li><a href="departure.php">Departure</a></li>
					<li><a href="reservation.php">Reservation</a></li>
					<li><a href="about_us.php">About</a></li>
				</ul>
			</nav>

			<a href="add_departure.php" class="get-started-btn">Add Departure</a>
		</div>
	</header>

    <!-- HERO SECTION -->
    <main>
		<section id="hero">
			<div class="lol-item" style="background-image: url(img/zbt.png)">
				<div class="lol-container">
					<div class="container">
						<h2 class="animate__animated animate__fadeInDown">WELCOME</h2>
						<p class="animate__animated animate__fadeInUp">We're here to make your trip easier! Check available bus right now</p>
						<a href="departure.php" class="btn-get-started scrollto animate__animated animate__fadeInUp"> Book Now </a>
					</div>
				</div>
			</div>
		</section>
	</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>