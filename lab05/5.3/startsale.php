<!Doctype>
<html>
    <head>
        <title>Update Product</title>
        <style>
            h1 {
                color:blue;
            }
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydatabase";
        ?>
        <font size='6' color='blue'>Select Product We Just Sold:</font>
        <form method='POST' action="sale.php">
            <?php
            $conn0 = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn0) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT Product_desc FROM products";
            $result = mysqli_query($conn0, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $des = $row['Product_desc'];
                    echo '<label for=' . $des . '>' . $des . '</label>';
                    echo '<input type="radio" value="' . $des . '" name="Product">';
                }
            }
            mysqli_close($conn0);
            ?>            
            <br>
            <input type="submit" value="Click to Submit">
            <input type="reset" value="Reset" >
        </form>
    </body>
</html>


<?php
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$querySql = "SELECT * FROM products";
$res = mysqli_query($conn, $querySql);

if (mysqli_num_rows($res) > 0) {

    echo "The Query is " . $sql;
    echo "<br>";
    echo "<br>";
    echo "<table style='border: 1px solid black;' >";
    echo "<tr>"
    . "<th>Num</th>"
    . "<th>Product</th>"
    . "<th>Weight</th>"
    . "<th>Cost</th>"
    . "<th>Count</th>"
    . "</tr>";
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo
        "<td>" . $row["ProductID"] . "</td>" .
        "<td>" . $row["Product_desc"] . "</td>" .
        "<td>" . $row["Weight"] . "</td>" .
        "<td>" . $row["Cost"] . "</td>" .
        "<td>" . $row["Numb"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
