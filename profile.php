<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="nav">
      <h3>
        <a href="homepage.html"><b>Content</b>Flow</a>
      </h3>
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
      <!-- <a href="profile.php"><button>Login</button></a> -->
    </div>
    <section class="content">
        <h2>Profile</h2>
        <p>Welcome to Dashboard.</p>
        <a href="logout.php">Logout</a>
    </section>
    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
