<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PruebaPhp</title>
</head>

<body>
    <h1>Count number of words</h1>

    <form method="post" action="">
        <label for="texto">Say something:</label><br>
        <input type="text" id="change" name="change" style="width:300px;"><br><br>
        <input type="submit" name="submit" value="Count">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $change = $_POST['change'];

        function countWords($change)
        {
            $numberWords = str_word_count($change);
            echo "The number of de words in your input is: " . $numberWords;
        }

        countWords($change);
    }
    ?>


</body>

</html>