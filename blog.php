<!DOCTYPE html>
<html>

<head>
    <title>Blog Post</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<div id="nav">
        <h3><a href="homepage.html"><b>Content</b>Flow</a></h3>
        <nav>
        <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="blog.php">Blogs</a></li>
            
          </ul>
        </nav>
        <script>
function toggleMenu() {
  var menu = document.getElementById("menu");
  if (menu.style.display == "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}
</script>
        <a href="profile.php"><button>Login</button></a>
    </div>


    <section class="posts">

        <?php
        require_once "config.php";

        $sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<article>";
                echo "<h2>{$row['title']}</h2>";
                echo "<p>" . substr($row['content'], 0, 150) . "...</p>";
                echo "<a href='blog.php?id={$row['id']}'>Read More</a>";
                echo "</article>";
            }
        } else {
            echo "No blog posts found.";
        }

        $conn->close();
        ?>

    </section>
   

</body>

</html>