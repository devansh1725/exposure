<?php
$servername = "localhost";
   $username = "root";
   $password = "";
   $database = "event";

$conn = MySQLi_connect( $servername , $username , $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];

    $stmt = $conn->prepare("SELECT * FROM info WHERE userId = ?");
    
    if ($stmt === false) {
        die('MySQL prepare statement error: ' . $conn->error);
    }

    // Bind the user ID parameter to the query
    $stmt->bind_param("s", $userId);
    $stmt->execute(); // Execute the query
    $result = $stmt->get_result(); // Get the result of the query

    // Check if any record was found
    if ($result->num_rows > 0) {
        // Output user data
        while ($row = $result->fetch_assoc()) {
            echo "User Id: " . $row["userId"]. "<br>";
	    echo "First Name: " .$row["Firstname"]."<br>";
		echo"Last name: " . $row["Lastname"]. "<br>";
		echo "Course: " .  $row["Course"]. "<br>";
		echo "Event: " .  $row["event"]."<br>";
		echo "Gender: " .  $row["Gender"]."<br>";
		echo "Phone: " .  $row["Phone"]."<br>";
		echo "Email: " .  $row["Email"]."<br>";
		 		 
"<br>";  }
    } else {
        echo "No user found with the User ID: " . htmlspecialchars($userId);
    }

    $stmt->close(); // Close the statement
} else {
    echo "User ID not provided.";
}

// Close the database connection
$conn->close();
?>
