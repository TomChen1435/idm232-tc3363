<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wooden Ladle Recipes</title>
    <link rel="stylesheet" href="/css/general.css">
</head>
<body class="no-result">

    <?php include './php/header.php' ?>

    <main class="menu hide"><?php include './php/home.php' ?></main>
    <main class="recipe hide"><?php include './php/recipe.php' ?></main>
    <main class="filter hide"><?php include './php/filter_results.php' ?></main>
    <main class="no-result"><?php include './php/no_result.php' ?></main>
    
    <footer>
        <p>&copy; 2025 Wooden Ladle Recipes, for educational use only.</p>
    </footer>

    <style>
        footer {
            align-items: center;
            background-color: var(--bg-black);
            display: flex;
            flex-flow: row nowrap;
            justify-content: flex-end;
            padding: var(--gap16) var(--gap24);

            p {
                color: var(--txt-white);
                font-size: 1rem;
            }
        }
    </style>

    <script src="./postload.js"></script>

</body>
</html>
