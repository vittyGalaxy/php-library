<?php
    require "../actions/connection.php";

    $authorName = "";
    $authorSurname = "";

    $result = null;

    // passa nome e cognome
    if (!empty($_POST["authorSurname"]) && !empty($_POST["authorName"])) {
        $authorName = $_POST["authorName"];
        $authorSurname = $_POST["authorSurname"];
        $sql_book = "SELECT title, price, nameAuthor, surnameAuthor FROM Book JOIN Author ON Book.idAuthor = Author.idAuthor WHERE Author.nameAuthor LIKE '%$authorName%' AND Author.surnameAuthor LIKE '%$authorSurname%'";
        $result = $conn->query($sql_book);
    }

    if ($result != null) {
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th> title </th>";
                echo "<th> price </th>";
                echo "<th> name author </th>";
                echo "<th> surname author </th>";
            echo "</tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>" . $row["title"]     . "</td>";
                    echo "<td>" . $row["price"]     . "</td>";
                    echo "<td>" . $row["nameAuthor"]  . "</td>";
                    echo "<td>" . $row["surnameAuthor"]  . "</td>";
                echo "</tr>";
            }

        echo "</table>";
    }
?>