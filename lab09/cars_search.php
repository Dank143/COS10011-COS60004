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
        require_once("settings.php");

        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

        if (!$conn) {
            echo "<p>Database connection failure</p>";
        } else {
            if (isset($_POST["carmake"])) {
                $searchTerm = trim($_POST["carmake"]);

                $sql_table = "cars";

                $query = "SELECT * FROM $sql_table WHERE make LIKE '%$searchTerm%'";
                $result = mysqli_query($conn, $query);

                if (!$result) {
                    echo "<p>Something is wrong with ", $query, "</p>";
                } else {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table border=\"1\">\n";
                        echo "<tr>\n"
                            . "<th scope=\"col\">Make</th>\n"
                            . "<th scope=\"col\">Model</th>\n"
                            . "<th scope=\"col\">Price</th>\n"
                            . "<th scope=\"col\">YoM</th>\n"
                            . "</tr>\n";
                
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>\n";
                            echo "<td>", $row["make"], "</td>\n ";
                            echo "<td>", $row["model"], "</td>\n";
                            echo "<td>", $row["price"], "</td>\n ";
                            echo "<td>", $row["yom"], "</td>\n ";
                            echo "</tr>\n";
                        }
                        echo "</table>\n";
                    } else {
                        echo "<p>No matching records found.</p>";
                    }
                    mysqli_free_result($result);
                }   
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>

