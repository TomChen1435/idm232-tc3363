<?php
    include("include/database.php");

    $stmt = $connection->prepare("SELECT category FROM idm232");

    $stmt->execute();
    $result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
    <link rel="stylesheet" href="css/card_grid.css">
</head>
<body>

    <?php include("components/header.php"); ?>

    <main>
        <h1>What type of cuisine do you want today&#63;</h1>

        <section class="filter_btns">
            <?php 
                $raw_category_array = [];
                
                while ($row = $result->fetch_assoc()) {
                    $category = $row["category"];
                    $new_category_array[] = $category;
                }

                $sorted_category_array = array_unique($new_category_array);
                sort($sorted_category_array);

                foreach ($sorted_category_array as $category) {
            ?>

                <a href="<?php echo "filter_result.php?category=" . $category?>" class="category long"><h1><?php echo $category ?></h1></a>

            <?php 
                }
            ?>
        </section>
    </main>

    <?php include("components/footer.php"); ?>
    
</body>
</html>
