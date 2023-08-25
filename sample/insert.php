<?php  

	
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "event_form";

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(isset($_POST['submit'])) {

		if(!empty($_POST['eventname']) && !empty($_POST['place']) && !empty($_POST['dt']) && !empty($_POST['guest']) && !empty($_POST['club']) && !empty($_POST['about'])) {

				$eventname = $_POST['eventname'];
				$place = $_POST['place'];
				$dt = $_POST['dt'];
				$guest = $_POST['guest'];
				$club = $_POST['club'];
				$about = $_POST['about'];

				$query = "INSERT INTO event(eventname, place, dt, guest, club, about) VALUES('$eventname', '$place', '$dt', '$guest', '$club', '$about')";

				$run = mysqli_query($conn, $query) or die(mysqli_error());

				if($run) {
					header("Location: thank.html");
				} else {
					echo "Form not Submitted";
				}
		} else {
			echo "All Feilds are Requires";
		}

	}

?>