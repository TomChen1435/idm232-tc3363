<?php
    include("include/database.php");

    $stmt = $connection->prepare("SELECT id, title, subtitle FROM idm232");

    $stmt->execute();
    $result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wooden Ladle Recipes</title>
    <link rel="stylesheet" href="css/card_grid.css">
</head>
<body>

    <?php include("components/header.php"); ?>

    <main>
        <h1>How are we doing today&#63;</h1>
        <?php include("include/card_generator.php"); ?>
    </main>

    <?php include("components/footer.php"); ?>
    
</body>
</html>
