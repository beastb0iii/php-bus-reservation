<?php
	require_once "database.php";

	$sqlquery = "SELECT * FROM departure";
	$results = mysqli_query($conn, $sqlquery);
?>

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
					<li><a href="index.php">Home</a></li>
					<li><a class="active" href="departure.php">Departure</a></li>
					<li><a href="reservation.php">Reservation</a></li>
					<li><a href="about_us.php">About</a></li>
				</ul>
			</nav>

			<a href="add_departure.php" class="get-started-btn">Add Departure</a>
		</div>
	</header>

    <!-- MAIN -->
    <main id="main">
		<div class="container">
			<?php
				session_start();

				if(isset($_SESSION["create"])) {
					?>
					<div class="text-center alert alert-success" role="alert">
						<?php echo $_SESSION["create"]; ?>
					</div>
					<?php unset($_SESSION["create"]); 
				}
			?>
			<div class="row">
				<?php
					while($data = mysqli_fetch_array($results)){
						?>
						<div class="col-lg-6 mt-4">
							<div class="ticket">
								<div class="preview">
									<h5><?php echo $data['time']; ?></h5>
								</div>
								<div class="info">
									<h5><?php echo $data['destination']; ?></h5>
									<p><?php echo $data['price']; ?>php</p>
									<a href="reservation_form.php?id=<?php echo $data['id']; ?>" class="ticketbtn">Reserve Ticket</a>
								</div>
							</div>
						</div>
						<?php
					}
				?>
			</div>
		</div>
	</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>