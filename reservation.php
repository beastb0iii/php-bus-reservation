<?php
	require_once "database.php";

	$sqlquery = "SELECT * FROM reservation";
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
					<li><a href="departure.php">Departure</a></li>
					<li><a class="active" href="reservation.php">Reservation</a></li>
					<li><a href="about_us.php">About</a></li>
				</ul>
			</nav>

			<a href="add_departure.php" class="get-started-btn">Add Departure</a>
		</div>
	</header>

	
	

    <main id="reservation">
		<div class="container">
			<?php
				session_start();

				if(isset($_SESSION["reserved"])) {
					?>
					<div class="text-center alert alert-success" role="alert">
						<?php echo $_SESSION["reserved"]; ?>
					</div>
					<?php unset($_SESSION["reserved"]); 
				}
			?>
			<table class="table table-bordered mt-5 text-center">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Ticket</th> 
						<th scope="col">Destination</th>
						<th scope="col">Time</th>
					</tr>
				</thead>
				<tbody>

					<?php
						while($data = mysqli_fetch_array($results)){
							?>
							<tr>
							<td><?php echo $data['name'] ?></td>
							<td><?php echo $data['email'] ?></td>
							<td><?php echo $data['phone'] ?></td>
							<td><?php echo $data['ticket'] ?></td>
							<td><?php echo $data['destination'] ?></td>
							<td><?php echo $data['time'] ?></td>
							</tr>
							<?php
							
						}
					?>
				</tbody>
			</table>
		</div>
	</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
    