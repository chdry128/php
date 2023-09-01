<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Multiplication Table</h2>
    <form method="post" action="">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        echo "<h3>Multiplication Table for $number:</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number x $i</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
