<!DOCTYPE html>
<html>

<head>
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="about.css">
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

    
    
    <section class="about">
        <h2>About Us</h2>

        <p>Welcome to the College Blog, your source for insightful articles, thoughtful discussions, and engaging
            content. We are a group of passionate students who believe in the power of sharing ideas and knowledge
            through the art of blogging.

            Our mission is to provide a platform for students, faculty, and enthusiasts to express their thoughts,
            showcase their creativity, and foster meaningful conversations. Whether you're interested in technology,
            literature, science, or any other topic, you'll find a place here to connect and learn.

            Our dedicated team of writers, editors, and designers work tirelessly to bring you articles that are
            informative, entertaining, and relevant. We encourage diverse perspectives and aim to create an inclusive
            space where everyone feels welcome to contribute and engage.

            Thank you for joining us on this journey of exploration and expression. Together, we can build a community
            that celebrates knowledge and promotes positive discussions.

            Feel free to explore our blog, read our articles, and join the conversation. Let's learn, grow, and inspire
            together!</p>
</section>

</body>

</html>