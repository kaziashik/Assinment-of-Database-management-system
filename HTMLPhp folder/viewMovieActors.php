

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
		<title>Movie Actors</title>
	</head>
	<body>
		<!-- HTML Form -->
		<form action="">
			<fieldset>
				<legend>
					Movie Actors information:
				</legend>
				Movie Name:
				<!-- Actors select Input Field -->
				
				<?php
					$query = "SELECT * FROM `movies` WHERE 1";
					$res = mysqli_query($db_conn, $query);
					echo "<select name = 'nameM'>";
					while (($row = mysqli_fetch_array($res)) != null)
					{
						echo "<option value = '{$row['name']}'";
						echo ">{$row['name']}</option>";
					}
					echo "</select><br><br>";
				?>
				
				<!-- Submit button field -->
				<input type="submit" name="submitShowMovieActors" value="Show Movie Actors">
			</fieldset>

				
				</form>
							<?php
				if (isset($_GET['submitShowMovieActors'])) {
					
					// Store data into the variables
					$m_name = $_GET['nameM'];
					
					// Storing data into the variables and Escaping special characters.
					$nameM = mysqli_real_escape_string($db_conn, $m_name);
					
					// query
					$selectMovieActorsQuery = "SELECT
					actors.name As Actors
					FROM movies
					JOIN moviesactors
					ON movies.id = moviesactors.movies_id
				JOIN actors
				ON actors.id = moviesactors.actors_id
				WHERE movies.name = '$nameM' ";
				// results
				$res = mysqli_query($db_conn, $selectMovieActorsQuery);
				if ($res) {
				# code...
				$rowcount=mysqli_num_rows($res);			
				
				
				}
				if ($rowcount > 0) {
				# code...
				echo "<ul>";
				while( ($row = mysqli_fetch_array($res))  != null )
				{
				echo "<li>";
				echo $row['Actors'] . "<hr />";
				echo "</li>";
				}
				echo "</ul>";
				
				} else {
				echo "No Actors Found For The Selected Movie!";
				exit();
				}
				}
				?>
				</body>
				</html>	
				<br><br>
				<a href="index.php">Home</a>					
                