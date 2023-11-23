<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name = "description" content = "CWA lab 9" />
    <meta name = "keywords" content = "PHP, Mysql" />
    <title>Retrieving records to HTML</title>
</head>
<body>
    <h1>CWA lab 9</h1>
    <?php
        require_once ("settings.php");

        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

        if (!$conn) {
            echo "<p>Database connection failure</p>";
        } else {
            $make = trim($_POST["carmake"]);
            $model = trim($_POST["carmodel"]);
            $price = trim($_POST["price"]);
            $yom = trim($_POST["yom"]);
            
            $sql_table = "cars";

            $query = "insert into $sql_table (make, model, price, yom) values ('$make', '$model', '$price', '$yom')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                // Check your input
                echo "<h2> Car record confirmation </h2>";
                echo "Make: $make<br>";
                echo "Model: $model<br>";
                echo "Price: $price<br>";
                echo "YOM: $yom<br>";

                // Print success message
                echo "<p class=\"ok\">Successfully added new car record</p>";
            } else {
                echo "<p> Something is wrong with ", $query, "</p>";
            }

        mysqli_close($conn);
        }
    ?>
</body>
</html>