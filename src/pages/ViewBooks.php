<html>
    <head>
        <title> View Books</title>
        <p><a href="../index.php"> Return to the homepage </a></p>
    </head>
    <body>
        <table border="1">
            <tr>
                <th> ID Book </th>
                <th> Title </th>
                <th> Price </th>
                <th> ID Author </th>

                <?php
                    require "../actions/connection.php";
                    $sql_book = "SELECT * FROM Book";
                    $result = $conn->query($sql_book);

                    while ($row = $result->fetch_assoc()){
                        echo "<tr>";
                            echo "<td>" . $row["idBook"]    . "</td>";
                            echo "<td>" . $row["title"]     . "</td>";
                            echo "<td>" . $row["price"]     . "</td>";
                            echo "<td>" . $row["idAuthor"]  . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>