<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    require_once "config.php"; // Adjust this line to match your database configuration
    
    $sql = "INSERT INTO blog_posts (title, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $title, $content);
    
    if ($stmt->execute()) {
        header("Location: index.php"); // Redirect to the main page or a success message
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>
