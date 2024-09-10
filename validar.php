<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST["first_name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $rpwd = $_POST["rpwd"];

    // Validate form data
    // ...

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "factura";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO invoice_user (first_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $first_name, $email, $pwd);

    // Execute the prepared statement
    $stmt->execute();

    echo "New record created successfully";

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
