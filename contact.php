<!DOCTYPE html>
<html>

<head>
  <title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
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
    <!-- <script>
        function toggleMenu() {
          var menu = document.getElementById("menu");
          if (menu.style.display == "block") {
            menu.style.display = "none";
          } else {
            menu.style.display = "block";
          }
        }
      </script> -->
    <a href="profile.php"><button>Login</button></a>
  </div>

  <section class="contact-form">
    <div class="container">
      <h1>Contact Us</h1>
      <p>If you have any questions or inquiries, feel free to get in touch with us.</p>
      <form action="submit_contact.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="btn">
          <button type="submit">Send Message</button>
        </div>
      </form>
    </div>
  </section>

  <footer class="footer">
    <!-- Footer content goes here -->
  </footer>
</body>

</html>