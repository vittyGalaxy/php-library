<?php
    require "connection.php";

    $title      = $_POST["title"];
    $price      = $_POST["price"];
    $idAuthor   = $_POST["idAuthor"];

    $sql_book = "INSERT INTO Book (title, price, idAuthor) VALUES (?, ?, ?)";
    $statemant = mysqli_prepare($conn, $sql_book);
    mysqli_stmt_bind_param($statemant, 'sdi', $title, $price, $idAuthor);
    mysqli_stmt_execute($statemant);

    echo "Book inserted correctly";
    echo "<p><a href=" . "../index.php" . "> Return to the homepage </a></p>";
?>