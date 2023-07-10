<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>
    <h2>Registration Details</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $country = $_POST["country"];
        $interests = $_POST["interests"];
        $bio = $_POST["bio"];

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Password:</strong> $password</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Country:</strong> $country</p>";
        
        echo "<p><strong>Interests:</strong></p>";
        echo "<ul>";
        foreach ($interests as $interest) {
            echo "<li>$interest</li>";
        }
        echo "</ul>";

        echo "<p><strong>Bio:</strong> $bio</p>";
    }
    ?>
</body>
</html>
