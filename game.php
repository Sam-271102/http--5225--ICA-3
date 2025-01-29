<!DOCTYPE html>
<html>
<head>
    <title>Magic Number Game</title>
</head>
<body>
    <h2>Magic Number Game</h2>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check Magic Number</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["number"]); // Get user input and convert to integer

        function magicNumber($num) {
            if ($num % 3 == 0 && $num % 5 == 0) {
                return "FizzBuzz";
            } elseif ($num % 3 == 0) {
                return "Fizz";
            } elseif ($num % 5 == 0) {
                return "Buzz";
            } else {
                return $num;
            }
        }

        echo "<h3>Magic Number: " . magicNumber($num) . "</h3>";
    }
    ?>
</body>
</html>
