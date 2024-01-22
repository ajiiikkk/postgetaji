<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Validasi data
    $username = isset($_GET["username"]) ? $_GET["username"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";
    $password = isset($_GET["password"]) ? $_GET["password"] : "";

    // Validasi sederhana
    $error_message = "";
    if (empty($username) || empty($email) || empty($password)) {
        $error_message = "Silakan isi semua kolom.";
    } else {
        // Proses data atau lakukan operasi lain yang diinginkan
        // Misalnya, simpan data ke database, dll.
        $success_message = "Selamat, $username! Pendaftaran berhasil.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .registration-form {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
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
        }

        input:focus {
            border-color: #3498db;
        }

        .error-message {
            color: #e74c3c;
            margin-top: 8px;
        }

        .success-message {
            color: #2ecc71;
            margin-top: 8px;
        }
    </style>
</head>
<body>

    <div class="registration-form">
        <h2>Formulir Pendaftaran</h2>

        <form action="get.php" method="get">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <input type="submit" value="Daftar">
        </form>

        <?php
        if (isset($error_message)) {
            echo "<p class='error-message'>$error_message</p>";
        } elseif (isset($success_message)) {
            echo "<p class='success-message'>$success_message</p>";
        }
        ?>

    </div>

</body>
</html>
