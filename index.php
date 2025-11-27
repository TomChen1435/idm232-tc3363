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
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/card_grid.css">
    <link rel="stylesheet" href="css/cards.css">
</head>
<body>

    <?php include("components/header.php"); ?>

    <main>
        <?php 
            while ($row = $result->fetch_assoc()) {
                $sequence = $row["id"] - 1;
                $banner = "images/" . $sequence . "/banner."; 
                $title = $row["title"];
                $subtitle = $row["subtitle"];
        ?>

        <div class="wrapper">
            <a href="" class="card">
                <picture>
                    <source srcset="<?php echo $banner . "avif" ?>" type="image/avif">
                    <img src="<?php echo $banner . "jpg" ?>" alt="<?php echo $title . " " . $subtitle ?>">
                </picture>
                <section>
                    <h1><?php echo $title ?></h1>
                    <h2><?php echo $subtitle ?></h2>
                </section>
            </a>
        </div>

        <?php 
            }
        ?>
    </main>

    <?php include("components/footer.php"); ?>
    
</body>
</html>
