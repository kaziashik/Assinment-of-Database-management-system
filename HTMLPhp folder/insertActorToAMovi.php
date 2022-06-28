<?php
    // Mysql Database connection
	// Server name , username, password, Database name
	$db_conn = mysqli_connect("127.0.0.1","root","","moviesactors");
	
	// Check database connection status
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Actor</title>
	</head>
	<body>
		<!-- HTML Form -->
		<form action="movie_actor.php" method = "post">
			<fieldset>
				<legend>
					Actor/Movie information:
				</legend>
				Actor Name:
				<!-- Name select Input Field -->
				<?php
					$query = "SELECT * FROM `actors` WHERE 1";
					$res = mysqli_query($db_conn, $query);
					echo "<select name = 'nameA'>";
					while (($row = mysqli_fetch_array($res)) != null)
					{
						echo "<option value = '{$row['id']}'";
						echo ">{$row['name']}</option>";
					}
					echo "</select><br><br>";
				?>
				Movie Name:
				<!-- Actors select Input Field -->
				
				<?php
					$query = "SELECT * FROM `movies` WHERE 1";
					$res = mysqli_query($db_conn, $query);
					echo "<select name = 'nameM'>";
					while (($row = mysqli_fetch_array($res)) != null)
					{

						echo "<option value = '{$row['id']}'";
						echo ">{$row['name']}</option>";
					}
					echo "</select><br><br>";
				?>
				
				<!-- Submit button field -->
				<input type="submit" value="submit">
			</fieldset>
			<br><br>
			<a href="index.php">Home</a>
		
		</form>
		</body>
		</html>		