<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi data
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Validasi sederhana untuk memastikan username diisi
    if (empty($username)) {
        $error_message = "Silakan isi username.";
    } else {
        // Proses data atau lakukan operasi lain yang diinginkan
        // Misalnya, verifikasi login dengan database, dll.

        // Redirect ke halaman selanjutnya
        header("Location: index.php?username=$username&email=$email");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2c3e50;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            max-width: 400px;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            overflow: hidden;
            transition: all 0.3s;
        }

        .login-container:hover {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.4);
        }

        h2 {
            color: #3498db;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #555;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input:focus {
            border-color: #3498db;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .error-message {
            color: #e74c3c;
            margin-top: 8px;
        }

        .icon {
            font-size: 24px;
            margin-right: 8px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2><i class="fas fa-lock icon"></i> Login Form </h2>

        <form action="get.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <input type="submit" value="Login">
        </form>

        <?php
        if (isset($error_message)) {
            echo "<p class='error-message'><i class='fas fa-exclamation-circle icon'></i> $error_message</p>";
        }
        ?>

    </div>

    <?php
    if (isset($_GET["username"]) && isset($_GET["email"])) {
        $username = $_GET["username"];
        $email = $_GET["email"];
        echo "<div class='content'>";
        echo "<h2>Selamat Datang!</h2>";
        echo "<p>Anda berhasil login sebagai:</p>";
        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
