<!DOCTYPE html>
<html>
<head>
    <title>Students Details</title>
</head>
<body>

    <h1>Students Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "your_mysql_username";
        $password_db = "your_mysql_password";
        $database = "university";

        $conn = new mysqli($servername, $username, $password_db, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "</tr>";
            }
        }

        $conn->close();
        ?>
    </table>

</body>
</html>
