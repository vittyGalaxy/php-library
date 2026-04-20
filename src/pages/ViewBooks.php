<html>
    <head>
        <title> View Books</title>
        <p><a href="../index.php"> Return to the homepage </a></p>
    </head>
    <body>
        <table border="1">
            <tr>
                <th> Title </th>
                <th> Price </th>
                <th> Author Name </th>
                <th> Author Surname </th>

                <?php
                    require "../actions/connection.php";
                    $sql_book = "SELECT title, price, nameAuthor, surnameAuthor FROM Book JOIN Author ON (Book.idAuthor = Author.idAuthor)";
                    $result = $conn->query($sql_book);

                    while ($row = $result->fetch_assoc()){
                        echo "<tr>";
                            echo "<td>" . $row["title"]    . "</td>";
                            echo "<td>" . $row["price"]     . "</td>";
                            echo "<td>" . $row["nameAuthor"]     . "</td>";
                            echo "<td>" . $row["surnameAuthor"]  . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>