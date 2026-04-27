<html>
    <head>
        <title> Book Insertion </title>
        <p><a href="../index.php"> Return to the homepage </a></p>
    </head>
    <body>
        <form action="../actions/saveBooksicure.php" method="post">
            <p>
                Title:<br>
                <input type="text" name="title">
            </p>

            <p>
                Price:<br>
                <input type="text" name="price">
            </p>

            <p>
                Author:<br>
                <?php
                    require "../actions/connection.php";
                    $sql_Author = "SELECT * FROM Author";
                    $authors = $conn->query($sql_Author);

                    echo "<select name='idAuthor' id='idAuthors'>";
                    while($row = $authors->fetch_assoc()) {
                        echo "<option value={$row['idAuthor']}> {$row['nameAuthor']} {$row['surnameAuthor']} </option>";
                    }
                    echo "</select>";
                ?>
            </p>

            <p>
                <input type="submit" value="Enter">
            </p>
        </form>
    </body>
</html>