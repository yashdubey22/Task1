<?php
require_once "config.php";

$sql = "SELECT * FROM blog_posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<article>";
        echo "<h2>{$row['title']}</h2>";
        echo "<p>{$row['content']}</p>";
        echo "<a href='blog.php?id={$row['id']}'>Read More</a>";
        echo "</article>";
    }
} else {
    echo "No blog posts found.";
}

$conn->close();
?>
