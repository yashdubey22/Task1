<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div id="nav">
        <h3>
            <a href="homepage.html"><b>Content</b>Flow</a>
        </h3>
        <nav>
            <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Contact</a></li>
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

    <?php
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        require_once "config.php";

        // Fetch user data based on email
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // After verifying the user's credentials
        if ($user) {
            // Verify password using password_verify
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = "yes";
                $_SESSION["username"] = $user["username"]; // Set the username
                $_SESSION["email"] = $user["email"]; // Set the email
                header("Location: index.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email not found</div>";
        }


        $stmt->close();
        $conn->close();
    }
    ?>



    <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
        <div>
            <p>Not registered yet <a href="register.php">Register Here</a></p>
        </div>
    </form>
    </div>
</body>

</html>