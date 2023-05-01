<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="images/XBOX_game/Microsoft_logo.png" type="image/x-icon">
	<LINK REL="stylesheet" href="assets/css/style.css">
	<title>Xbox Fan Page</title>
</head>

<body>
	<header>
		<h1>Microsoft Xbox</h1>
		<h3>by: Taiye Davies</h3>
		<h3>23-01-2023</h3>
	</header>

	<nav class="sticky">
		<a href="index.html">Home Page</a>
		<a href="catalog.html">Catalog</a>
		<a href="https://www.xbox.com/en-CA/xbox-game-pass?xr=shellnav">XBOX</a>
		<a href="contact.html">Contact us</a>
		<a class="active" href="escape_js.html">Escape Room</a>
		<a class="active" href="add_game.php">Add Game</a>
	</nav>

<form method='POST' action=''>
 <fieldset>
 <legend>Add student information</legend>
 	 <label>Game Name: </label><input type='text' name='game_name' required><br>
     <label>Release Date: </label><input type='date' name='release_date' required><br>
     <label>Price: </label><input type='text' name='game_price' required><br>
     <label>Game Description:</label><br><textarea id="textarea" cols="50" rows="5" maxlength=500 placeholder="max 500 characters..." name='game_description' required></textarea><br>
     <input type='submit' value = "Submit Query" name='Submit'>
 </fieldset>
</form>
<?php
(include "Taiye_Davies_lab05/MySQL/connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Submit"])) {
      $submit = "Submit is set";
      echo $submit ."<br>";
    }
}
     $conn = new mysqli($server_name, $username, $password, $database_name);
	 echo "Connected Succesfully". "<br><br>";
	 echo "<strong>Course Record Connected Successfully!!!</strong>". "<br><br>";
	 echo "<table>";
	 echo "<tr>
		 <th>#</th>
		 <th>Game ID</th>
		 <th>Game Name</th>
		 <th>Game Price</th>
		 <th>Release Date</th>
		 <th>Game Description</th>
		 </tr>";
     $game_name = $_POST['game_name'];
     $release_date = $_POST['release_date'];
     $game_price = $_POST['game_price'];
     $game_description = $_POST['game_description'];
     $sql = "INSERT INTO game_details VALUES (0,'".$game_name."', '".$release_date."','".$game_price."','".$game_description."')";
     $conn->query($sql); 
     $sql = "SELECT * FROM game_details ORDER BY release_date DESC";
     $results = $conn->query($sql); 

    // fetch a record from result set into an associative array
	$count = 0;
    while ($row = $results->fetch_assoc()) {
    // the keys must match the field names from the table
	echo "<tr>";
    echo "<td>" .$count."</td>";
	echo "<td>" .$count. "</td>";
	echo "<td>" .$row["game_name"]. "</td>";
	echo "<td>" .$row["game_price"]. "</td>";
    echo "<td>" .$row["release_date"]. "</td>";
    echo "<td>" .$row["game_description"]. "</td>";
	echo "<tr>";
	$count++;
}

    $conn->close();
	echo "</table>";
?>
<hr>
	<footer>
		<p>Copyright @ Taiye Davies<br>Email:
			<a href="mailto:taiyedavies@cmail.carleton.ca">taiyedavies@cmail.carleton.ca</a>
		</p>
	</footer>
</body>

</html>