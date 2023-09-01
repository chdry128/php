<!DOCTYPE html>
<html>
<head>
    <title>Add Number to Array</title>
</head>
<body>
    <h1>Add Number to Array</h1>
    <form method="post" action="">
        <label for="userNumber">Enter a Number:</label>
        <input type="number" name="userNumber" id="userNumber" required><br>

        <input type="submit" value="Add to Array">
    </form>

    <?php
    $numberArray = [1, 2, 3, 4, 5];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userNumber = $_POST["userNumber"];

        $numberArray[] = $userNumber;

        echo "<h2>Updated Array:</h2>";
        echo "<pre>";
        print_r($numberArray);
        echo "<br>";
    }
    ?>
</body>
</html>
