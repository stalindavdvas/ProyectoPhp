<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PruebaPhp</title>
    <style>
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            text-align: center;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Count number of words in
            <img src="php.png">
        </h1>

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

    </div>
</body>

</html>