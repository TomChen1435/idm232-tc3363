<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wooden Ladle Recipes</title>
    <link rel="stylesheet" href="/css/general.css">
</head>
<body>

    <?php include './php/header.php' ?>

    <main class="menu display"><?php include './php/home.php' ?></main>
    <main class="search"><?php include './php/search.php' ?></main>
    <main class="recipe"><?php include './php/recipe.php' ?></main>
    <main class="filter"><?php include './php/filter_results.php' ?></main>
    <main class="no-result"><?php include './php/no_result.php' ?></main>

    <script>
        const htmlBody = document.querySelector('body');

        const mainMenu = document.querySelector('main.menu');
        const mainSearch = document.querySelector('main.search');
        const mainRecipe = document.querySelector('main.recipe');
        const mainFilter = document.querySelector('main.filter');
        const mainNoResult = document.querySelector('main.no-result');

        const mains = [mainMenu, mainSearch, mainRecipe, mainFilter, mainNoResult];
    </script>
    
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

    <script src="./javascript/functions.js"></script>
    <script src="./javascript/switches.js"></script>

</body>
</html>
