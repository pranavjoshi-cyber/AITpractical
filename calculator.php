<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $result = "";

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Error: Division by zero is not allowed.";
                }
                break;
            default:
                echo "Error: Invalid operator selected.";
                break;
        }

        if ($result !== "") {
            echo "Result: " . $result;
        }
    }
    ?>
</body>
</html>
