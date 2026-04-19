<html>
    <head>
        <title>Search Book</title>
        <p><a href="../index.php"> Return to the homepage </a></p>
    </head>
    <body>
        <!-- title -->
        <form action="../actions/searchWithTitle.php" method="post">
            <p>
                Title:<br>
                <input type="text" name="title">
            </p>

            <p>
                <input type="submit" value="Search">
            </p>
        </form>

        <!-- prices -->
        <form action="../actions/searchWithPrices.php" method="post">
            <p>
                Min Range:<br>
                <input type="text" name="min">
            </p>

            <p>
                Max Range:<br>
                <input type="text" name="max">
            </p>

            <p>
                <input type="submit" value="Search">
            </p>
        </form>

        <!-- author -->
        <form action="../actions/searchWithAuthor.php" method="post">
            <p>
                Author:<br>
                <input type="text" name="author">
            </p>

            <p>
                <input type="submit" value="Search">
            </p>
        </form>
    </body>
</html>