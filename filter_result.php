<?php
    include("include/database.php");

    $input = $_GET['category'];
    $input_converted = htmlspecialchars($input);

    if (isset($input) && !empty($input)) {
        $stmt = $connection->prepare("SELECT id, category, title, subtitle FROM idm232 WHERE category = ?");
        $stmt->bind_param("s", $input);
        $stmt->execute();
        $result = $stmt->get_result();

        $count = $result->num_rows;

        if ($count === 0) {
            header("location: no_result.php");
            exit();
        } elseif ($count === 1) {
            $heading = "1 result";
        } else {
            $heading = $count . " results";
        }

        $stmt->close();

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
    <title>Filter Result</title>
    <link rel="stylesheet" href="css/card_grid.css">
</head>
<body>

    <?php include("components/header.php"); ?>

    <main>
        <h1>We&#39;ve found <?php echo $heading ?> for the category of&#58; <?php echo $input_converted ?>&#46;</h1>
        <?php include("include/card_generator.php"); ?>
    </main>

    <?php include("components/footer.php"); ?>

</body>
</html>
