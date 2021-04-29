<!DOCTYPE html>
<html>
    <head>
        <title>Insert Table</title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydatabase";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $description = $_POST["description"];
        $weight = $_POST["weight"];
        $cost = $_POST["cost"];
        $count = $_POST["count"];
        $sql = "INSERT INTO products (Product_desc, Weight, Cost, Numb)
                VALUES ('$description', $weight, $cost, $count)";

        if (mysqli_query($conn, $sql)) {
            echo "The Query is " . $sql;
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </body>
</html>