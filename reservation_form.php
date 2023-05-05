<?php
	require_once "database.php";

    $id = $_GET['id'];

    if($id) {
        $sql = "SELECT * FROM departure WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if(isset($_POST["submit"])) {
            $name = mysqli_real_escape_string($conn, $_POST["name"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
            $ticket = mysqli_real_escape_string($conn, $_POST["ticket"]);
            $destination = $row["destination"];
            $time = $row["time"];

            $sqlInsert = "INSERT INTO reservation(name, email, phone, ticket, destination, time) VALUES ('$name', '$email', '$phone', '$ticket', '$destination', '$time')";

            if(mysqli_query($conn, $sqlInsert)) {
                session_start();

                $_SESSION["reserved"] = "Reservation is Successful";
                header("Location: reservation.php");
            }
            else {
                die("Something went wrong");
            }
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
				
				<h1 class="h3 mb-3 fw-normal">Please Fill Up the Form</h1>

                <div class="form-floating mb-3">
					<input type="text" class="form-control" name="name" id="floatingInput" placeholder="e.g Alridzmar Ibrahim" />
					<label for="floatingInput">Name</label>
				</div>

				<div class="form-floating mb-3">
					<input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" />
					<label for="floatingInput">Email address</label>
				</div>

                <div class="form-floating mb-3">
					<input type="text" class="form-control" name="phone" id="floatingInput" placeholder="e.g 09XXXXXXXXX" />
					<label for="floatingInput">Phone Number</label>
				</div>

                <div class="form-floating mb-3">
					<input type="text" class="form-control" name="ticket" id="floatingInput" placeholder="e.g 2" />
					<label for="floatingInput">Ticket</label>
				</div>
				

				<input class="w-100 btn btn-lg btn-primary" name="submit" type="submit" value="Reserve Ticket">
			</form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>