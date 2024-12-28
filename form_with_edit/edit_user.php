<?php
require 'dbconn.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id, name, email FROM user WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } else {
        echo "<script>alert('User not found'); window.location.href = 'users.php';</script>";
        exit;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id']; 
    $name = $_POST['name'];
    $email = $_POST['email'];

    $updateSql = "UPDATE user SET name = '$name', email = '$email' WHERE id = '$id'";
    if ($conn->query($updateSql) === TRUE) {
        header("Location: users.php"); 
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        .form-container {
            max-width: 400px;
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
        input, button {
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
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit User</h1>
        <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

            <label for="name">Username</label>
            <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
            
            <button type="submit">Update</button>
        </form>
    </div>
    
</body>
</html>
