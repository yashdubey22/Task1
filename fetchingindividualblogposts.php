<?php
require_once "config.php";

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    $sql = "SELECT * FROM blog_posts WHERE id = $post_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<article>";
        echo "<h2>{$row['title']}</h2>";
        echo "<p>{$row['content']}</p>";
        echo "</article>";
    } else {
        echo "Blog post not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
