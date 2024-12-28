<?php

require 'dbconn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $name_error = "Name is empty";
        echo "<script>alert('$name_error');</script>";
        exit;
    } else {
        $name = $conn->real_escape_string($_POST["name"]); 
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is empty";
        echo "<script>alert('$email_error');</script>";
        exit;
    } else {
        $email = $conn->real_escape_string($_POST["email"]); 
    }

    if (empty($_POST["password"])) {
        $password_error = "Password is empty";
        echo "<script>alert('$password_error');</script>";
        exit;
    } else {
        $password = $_POST["password"]; 
        if (strlen($password) < 2)
        {
            $password_error = "Password must be at least 8 characters.";
            echo "<script>alert('$password_error');</script>";
            exit;
        }
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    }

    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!');</script>";
        header("Location: login.php");
        exit;
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
        }
        a{
            text-decoration:none;
            align-items: center;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>User Registration</h1>
        <form action="" method="POST">
           
            <label for="full-name">User Name</label>
            <input type="text" id="full-name" name="name" placeholder="Enter your user name" >

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" >

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter a secure password" >

            <button type="submit">Register</button>
        </form>
        <a href="login.php">Login</a>

    </div>
</body>
</html>
