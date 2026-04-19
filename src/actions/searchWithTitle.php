<?php
    require "../actions/connection.php";

    $title = "";

    if (!empty($_POST["title"])) {
        $title = $_POST["title"];
        $sql_book = "SELECT * FROM Book WHERE title LIKE '%$title%'";
        $result = $conn->query($sql_book);
    }

    if ($result != null) {
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th> ID Book </th>";
                echo "<th> title </th>";
                echo "<th> price </th>";
                echo "<th> ID author </th>";
            echo "</tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>" . $row["idBook"]    . "</td>";
                    echo "<td>" . $row["title"]     . "</td>";
                    echo "<td>" . $row["price"]     . "</td>";
                    echo "<td>" . $row["idAuthor"]  . "</td>";
                echo "</tr>";
            }

        echo "</table>";
    }
?>