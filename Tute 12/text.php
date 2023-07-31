<?php
    if (isset($_POST['submit'])) {
       
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $gender = $_POST['gender'];
        $ayear = $_POST['ayear'];
        $email = $_POST['email'];
        $pnum = $_POST['pnum'];

        
        echo "<h2>Registration Details:</h2>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><td>First Name</td><td>$fname</td></tr>";
        echo "<tr><td>Last Name</td><td>$lname</td></tr>";
        echo "<tr><td>User Name</td><td>$uname</td></tr>";
        echo "<tr><td>Password</td><td>$pwd</td></tr>";
        echo "<tr><td>Gender</td><td>$gender</td></tr>";
        echo "<tr><td>Academic Year</td><td>$ayear</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Phone Number</td><td>$pnum</td></tr>";
        echo "</table>";
    }
    ?>
