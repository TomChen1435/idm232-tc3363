<?php
    include("include/database.php");

    $recipe_id = $_GET['recipe_id'];

    $stmt = $connection->prepare("SELECT * FROM idm232 WHERE id = ?");
    $stmt->bind_param("i", $recipe_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($recipe = $result->fetch_object()) {
        $sequence = $recipe_id;
        $img_string = "images/" . $sequence . "/";

        $title = $recipe->title;
        $subtitle = $recipe->subtitle;
        $full_title = $title . " " . $subtitle;

        $description = $recipe->description;

        $ingredients_string = $recipe->ingredients;
        $ingredients_list = explode("_LINE_BREAK_", $ingredients_string);

        $kitchen_tools_string = $recipe->kitchen_tools;
        $kitchen_tools_list = explode("_LINE_BREAK_", $kitchen_tools_string);

        $steps_string = $recipe->steps;
        $steps_list = explode("_STEP_BREAK_", $steps_string);
        $num_steps = count($steps_list);
        foreach ($steps_list as $i => $step) {
            $steps_list[$i] = explode("_LINE_BREAK_", $step);
        };

    } else {
        header("location: no_result.php");
        exit();
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $full_title ?></title>
    <link rel="stylesheet" href="css/recipe.css">
</head>
<body>

    <?php include("components/header.php"); ?>

    <main>
        <div class="wrapper">
            <a href=<?php echo "recipe.php?recipe_id=" . $recipe_id?> class="card">
                <picture>
                    <source srcset="<?php echo $img_string . "banner.avif" ?>" type="image/avif">
                    <img src="<?php echo $img_string . "banner.jpg" ?>" alt="<?php echo $full_title ?>">
                </picture>
                <section>
                    <h1><?php echo $title ?></h1>
                    <h2><?php echo $subtitle ?></h2>
                </section>
            </a>
        </div>

        <div class="part">
            <section class="recipe">
                <p><?php echo $description ?></p>
            </section>
        </div>

        <div class="part">
            <section class="recipe">
                <h1>Ingredients</h1>

                <picture>
                    <source srcset="<?php echo $img_string . "ingredients.avif" ?>" type="image/avif">
                    <img src="<?php echo $img_string . "ingredients.png" ?>" alt="<?php echo "Ingredients of" . $full_title ?>">
                </picture>

                <ul><?php foreach ($ingredients_list as $ingredient) {
                    echo "<li>" . $ingredient . "</li>";
                } ?></ul>
            </section>
        </div>
        
        <div class="part">
            <section class="recipe">
                <h1>Kitchen Tools</h1>

                <picture>
                    <?php
                        $kt_large = $img_string . "large/kt";
                        $kt_small = $img_string . "small/kt";
                    ?>

                    <source srcset="<?php echo $kt_large . ".avif" ?> 2x, <?php echo $kt_small . ".avif" ?> 1x" type="image/avif">

                    <source srcset="<?php echo $kt_large . ".jpg" ?> 2x, <?php echo $kt_small . ".jpg" ?> 1x" type="image/jpeg">

                    <img src="<?php echo $kt_small . ".jpg" ?>" alt="<?php echo $kitchen_tools_list[0] ?>">
                </picture>

                <h2><?php echo $kitchen_tools_list[0] ?></h2>

                <p><?php echo $kitchen_tools_list[1] ?></p>
            </section>
        </div>

        <?php for ($i = 0; $i < $num_steps; $i++) {
            $step_sequence = $i + 1;

            $img_large = $img_string . "large/step" . $step_sequence;
            $img_small = $img_string . "small/step" . $step_sequence;
        ?>

        <div class="part">
            <section class="recipe">
                <picture>
                    <source srcset="<?php echo $img_large . ".avif" ?> 2x, <?php echo $img_small . ".avif" ?> 1x" type="image/avif">

                    <source srcset="<?php echo $img_large . ".jpg" ?> 2x, <?php echo $img_small . ".jpg" ?> 1x" type="image/jpeg">

                    <img src="<?php echo $img_small . ".jpg" ?>" alt="<?php echo "Step" . $step_sequence ?>">
                </picture>

                <?php if ($steps_list[$i][0] != "_BLANK_") {
                    echo "<h1>" . $steps_list[$i][0] . "</h1>";
                } ?>

                <p><?php echo $steps_list[$i][1] ?></p>
            </section>
        </div>

        <?php } ?>
    </main>

    <?php include("components/footer.php"); ?>

</body>
</html>
