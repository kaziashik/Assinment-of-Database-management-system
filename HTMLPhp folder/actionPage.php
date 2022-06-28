
<?php
    
	// Mysql Database connection
	// Server name , username, password, Database name
	$db_conn = mysqli_connect("127.0.0.1","root","","moviesactors");
	
	// Check database connection status
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//If submit button is clicked
	if (isset($_GET['submitMovie'])) {
		
		// Store data into the variables
		$m_name = $_GET['name'];
		
		// Storing data into the variables and Escaping special characters.
		$name1 = mysqli_real_escape_string($db_conn, $m_name);
		
		
		// Insert query
		$sql = "INSERT INTO movies (name) VALUES ('$name1')" ;
		
		// Inserting data into users table
		$insert_data = mysqli_query($db_conn, $sql);
		
		// Check if data inserted
		if($insert_data){
			echo "Data inserted successfully.";
		}
		// else data not inserted
		else{
			echo "Something error occurred";
		}
	}

	if (isset($_GET['submitActor'])) {
		
		// Store data into the variables
		$m_name = $_GET['name'];
		$echo (m_name);
		
		// Storing data into the variables and Escaping special characters.
		$name1 = mysqli_real_escape_string($db_conn, $m_name);
		
		
		// Insert query
		$sql = "INSERT INTO `actors` (name) VALUES ('$name')";
		
		// Inserting data into users table
		$insert_data = mysqli_query($db_conn, $sql);
		
		// Check if data inserted
		if($insert_data){
			echo "Data inserted successfully.";
		}
		// else data not inserted
		else{
		echo "Something error occurred";
		}
	}
		
	if (isset($_GET['submitActorMovie'])) {
		
		// Store data into the variables
		$a_name = $_GET['nameA'];
		$m_name = $_GET['nameM'];
		
		// Storing data into the variables and Escaping special characters.
		$nameA = mysqli_real_escape_string($db_conn, $a_name);
		$nameM = mysqli_real_escape_string($db_conn, $m_name);
		
		// Check If Exists query
		$sqlCheckIfExists = "SELECT `id`, `movies_id`, `actors_id` FROM `moviesactors` WHERE `movies_id` = '$nameM' AND `actors_id` = '$nameA' ";
		// data Exists users table
		$data_Exists = mysqli_query($db_conn, $sqlCheckIfExists);
		if ($data_Exists) {
		# code...
		$rowcount=mysqli_num_rows($data_Exists);

		
		}
		if ($rowcount > 0) {
		# code...
		echo "That Actor Is Already Assigned To The Selected Movie!";
		exit();
		
		}
	
	}
		# code...
		
		// Insert query
		// $sql = "INSERT INTO `moviesactors` (`movies_id`, `actors_id`) VALUES ('$m_name', '$a_name')";
		
		// // Inserting data into users table
		// $insert_data = mysqli_query($db_conn, $sql);
		
		// // Check if data inserted
		// if($insert_data){
		// echo "Data inserted successfully.";
		// }
		// // else data not inserted
		// else{
		// echo "Something error occurred";
		// }
		
		
		
		
		
		
		?>		
        
  