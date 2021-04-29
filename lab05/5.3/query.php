<style>
    h1 {
        color:blue;
    }
    table, th, td {
        border: 1px solid black;
    }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
    echo "<h1>Products Data</h1>";
    echo "The Query is ". $sql;
    echo "<br>";
    echo "<br>";
    echo "<table>";
    echo "<tr>"
            . "<th>Num</th>"
            . "<th>Product</th>"
            . "<th>Weight</th>"
            . "<th>Cost</th>"
            . "<th>Count</th>"
        . "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo 
                "<td>" . $row["ProductID"]. "</td>".
                "<td>" . $row["Product_desc"]. "</td>".
                "<td>" . $row["Weight"]. "</td>".
                "<td>" . $row["Cost"]. "</td>".
                "<td>" . $row["Numb"]. "</td>";
        echo "</tr>";
        
    }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
