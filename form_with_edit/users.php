<a href="login.php"><button>Logout</button></a><br><br>
<a href="db.php"><button>Register</button></a>
<?php

require 'dbconn.php';

    $allUsersSql = "SELECT id, name, email FROM user"; 
    $allUsersResult = $conn->query($allUsersSql);

    if ($allUsersResult->num_rows > 0) {
        echo "<center><table border='1' cellspacing='0' cellpadding='5'>";
        echo "
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
        </tr>";

        while ($row = $allUsersResult->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td><a href='edit_user.php?id={$row['id']}'>Edit</a></td>
            </tr>";
        }

        echo "</table></center>";
        exit;
    } else {
        echo "No other users found.";
    }

?>