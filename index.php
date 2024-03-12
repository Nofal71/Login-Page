<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css.css">
    <title>Login Page</title>
</head>
<body>
    
    <h1 id="1" style="text-align: center;"></h1><br>
    <h1 id="2"></h1>
    <div class="container" id="loginContainer">
        <form id="loginForm" method="post">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button class="submit" type="submit">Login</button>
            <div id="loginStatus">
                <?php 
                require_once "database.php";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        echo "Login successful!";
                    } else {
                        echo "Login failed. Please check your username and password.";
                    }
                }
                ?>
            </div>
        </form>
    </div>
  
</body>
</html>
