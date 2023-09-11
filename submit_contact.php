<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_requests (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Request submitted successfully! Redirecting...";

     
        echo '<script>
            setTimeout(function() {
                window.location.href = "homepage.html";
            }, 3000); // Redirect after 3 seconds
        </script>';
    } else {
       
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
