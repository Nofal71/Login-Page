<?php
include "db_connect.php";
session_start();
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css.css">
    <title>Login Page</title>
</head>
<body>

<h1 id="1" style="text-align: center;"></h1><br>
<h1 id="2"></h1>
<div class="container" id="loginContainer">
    <form id="loginForm" action="index.php" method="post">
        <h2>Login</h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button class="submit" type="submit">Login</button>
        <div id="loginStatus"></div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

      
        $stmt = $conn->prepare("SELECT * FROM users WHERE username AND passwor = ?");
        if ($stmt) {
            
            $stmt->bind_param("s", $username);

            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "successful match";
            } else {
                echo "No match found";
            }
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

</body>
</html>
