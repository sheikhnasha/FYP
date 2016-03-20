		<?php
			// Create connection
			$conn = new mysqli($servername="localhost", $username = "", $password = "", $dbname = "test");

			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			?>