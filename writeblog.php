<!DOCTYPE html>
<html>
<head>
    <title>Write a Blog</title>
    <link rel="stylesheet" type="text/css" href="writeblog.css">
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
      <a href="profile.php"><button>Login</button></a>
    </div>
    
    <section class="write-blog">
        <h1>Write a New Blog Post</h1>
        <form method="post" action="process_blog.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required><br>
            
            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="10" required></textarea><br>
            
            <button type="submit" name="submit">Publish</button>
        </form>
    </section>
    
  
</body>
</html>
