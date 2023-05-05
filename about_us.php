<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bus Reservation</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    
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
					<li><a href="index.php">Home</a></li>
					<li><a href="departure.php">Departure</a></li>
					<li><a href="reservation.php">Reservation</a></li>
					<li><a class="active" href="about_us.php">About</a></li>
				</ul>
			</nav>

			<a href="add_departure.php" class="get-started-btn">Add Departure</a>
		</div>
	</header>

    <main id="about">
		<section id="contact" class="section-bg">
			<div class="container" data-aos="fade-up">
				<div class="section-header">
					<h2>Contact Us</h2>
				</div>

				<div class="row contact-info">
					<div class="col-md-4">
						<div class="contact-address">
							<i class="bi bi-geo-alt"></i>
							<h3>Address</h3>
							<address>MCLL Highway, Divisoria 7000 Zamboanga City, Philippines</address>
						</div>
					</div>

					<div class="col-md-4">
						<div class="contact-phone">
							<i class="bi bi-phone"></i>
							<h3>Phone Number</h3>
							<p>+639XXXXXXXXX</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="contact-email">
							<i class="bi bi-envelope"></i>
							<h3>Email</h3>
							<p>info@gmail.com</p>
						</div>
					</div>
				</div>
				<img src="img/zbt1.png" class="img-fluid mx-auto d-block" alt="..." />
			</div>
		</section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
    