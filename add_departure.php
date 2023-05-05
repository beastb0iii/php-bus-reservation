<?php
	require_once "database.php";

	if(isset($_POST["create"])) {
		$destination = mysqli_real_escape_string($conn, $_POST["destination"]);
		$price = mysqli_real_escape_string($conn, $_POST["price"]);
		$time = mysqli_real_escape_string($conn, $_POST["time"]);

		$sqlInsert = "INSERT INTO departure(destination, price, time) VALUES ('$destination', '$price', '$time')";

		if(mysqli_query($conn, $sqlInsert)) {
			session_start();

			$_SESSION["create"] = "Added Successfully";
			header("Location: departure.php");
		}
		else {
			die("Something went wrong");
		}
	}
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

    <main id="reservation">
        <div class="container text-center">
            <div class="w-100 m-auto" id="form-signin">
            <form class="mt-4" method="POST">
				
				<h1 class="h3 mb-3 fw-normal">Adding Departure</h1>

                <div class="form-floating mb-3">
					<input type="text" class="form-control" name="destination" id="floatingInput" placeholder="e.g Zamboange to Siocon" />
					<label for="floatingInput">Destination</label>
				</div>

				<div class="form-floating mb-3">
					<input type="text" class="form-control" name="price" id="floatingInput" placeholder="500" />
					<label for="floatingInput">Price</label>
				</div>

                <div class="form-floating mb-3">
					<input type="text" class="form-control" name="time" id="floatingInput" placeholder="9PM" />
					<label for="floatingInput">Time</label>
				</div>
				

				<input class="w-100 btn btn-lg btn-primary" name="create" type="submit" value="Add Departure">
			</form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>