<!Doctype>
<?php
if (isset($_POST['id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "business_service";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO Categories (CategoryID, Title, Description)
        VALUES ('$id','$title','$description')";

    mysqli_select_db($conn, $dbname);
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}
?>
<html>
    <head>
        <title>Category Administration</title>
        <style>
            th, td {
                border: 1px solid black;
            }
            td input {
                border: none;
            }
            .input {
                margin: 5px;
                border: 2px solid blue;
            }
        </style>
    </head>
    <body>
        <font size="6" color="blue">Category Administration</font>
        <br>
        <form method="POST">
            <table>
                <tr>
                    <th>Cat ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "business_service";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM Categories";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo
                            "<td>" . $row["CategoryID"] . "</td>" .
                            "<td>" . $row["Title"] . "</td>" .
                            "<td>" . $row["Description"] . "</td>";
                            echo "</tr>";
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </tr>
                <tr>
                    <td class="input">
                        <input type="text" name="id" />
                    </td>
                    <td class="input">
                        <input type="text" name="title" />
                    </td>
                    <td class="input">
                        <input type="text" name="description" />
                    </td>
                </tr>
            </table>
            <input type="submit" value="Add Category">
        </form>
    </body>
</html>

