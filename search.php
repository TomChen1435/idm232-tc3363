<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for Recipes</title>
    <link rel="stylesheet" href="css/search.css">
</head>
<body>

    <?php include("components/header.php"); ?>

    <main>
        <h1>What are we craving today&#63;</h1>

        <search>
            <form action="search_result.php" method="get">
                <label for="search-bar">Search for Recipes</label>
                <input id="search-bar" type="search" name="q" placeholder="Search for Recipes">
                <?php include("components/search_bar_btn.php"); ?>
            </form>
        </search>
    </main>

    <?php include("components/footer.php"); ?>
    
</body>
</html>
