<?php
	$con = mysqli_connect("localhost","root","","editorDB");		
	if(isset($_POST['submit']))
	{
		$Image = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
		//$FileName = $_FILES(['Image']['tmp_name']);
		//$Image = file_get_contents('$FileName');
		$managemenu = $_POST['managemenu'];
		$ordering = $_POST['ordering'];
		$contenttitle = $_POST['contenttitle'];
		$description = $_POST['description'];
	
		
			  
			$sql = "INSERT INTO aboutus(managemenu,ordering,contenttile,description,Image)
				VALUES ('$managemenu','$ordering','$contenttitle','$description','$Image')";

				if ($con->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $con->error;
				} 
							/*

								$sql = "SELECT * FROM aboutus";
									$result = $con->query($sql);

									if ($result->num_rows > 0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {
											echo "managemenu: " . $row["managemenu"]. " - Name: " . $row["ordering"]. " " . $row["contenttitle"]. " ". $row["description"]. "<br>";
										}
									} else {
										echo "0 results";
									}
									
									*/

	}

?>