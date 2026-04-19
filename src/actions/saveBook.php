<?php
    require "connection.php";

    $title      = $_POST["title"];
    $price      = $_POST["price"];
    $idAuthor   = $_POST["idAuthor"];

    $sql_book = "INSERT INTO Book (title, price, idAuthor) VALUES ('$title', '$price', '$idAuthor')";

    if ($conn->query($sql_book) === TRUE){
        echo "Book inserted correctly";
        echo "<p><a href=" . "../index.php" . "> Return to the homepage </a></p>";
    } else {
        echo "Error saving";
    }

    $conn->close();
?>