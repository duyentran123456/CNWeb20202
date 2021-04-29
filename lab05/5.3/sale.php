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
$description = $_POST['Product'];
$sql0 = "UPDATE Products SET Numb=Numb-1 WHERE (Product_desc='$description' )";
$result = mysqli_query($conn, $sql0);
$sql = "SELECT * FROM products";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    echo "<font size='5' color='blue'>Update Results for Table Products <br></font>";
    echo "The Query is ". $sql0;
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
    while($row = mysqli_fetch_assoc($res)) {
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