<?php
    header('Content-Type: application/json');

    include("../include/database.php");

    $recipe_id = $_GET['recipe_id'];

    $stmt = $connection->prepare("SELECT * FROM idm232 WHERE id = ?");
    $stmt->bind_param("i", $recipe_id);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($recipe = $result->fetch_object()) {
        $ingredients_string = $recipe->ingredients;
        $kitchen_tools_string = $recipe->kitchen_tools;
        $steps_string = $recipe->steps;

        include("./get_data.php");

        $data = [
            "id" => $recipe->id,
            "category" => $recipe->category,
            "title" => $recipe->title,
            "subtitle" => $recipe->subtitle,
            "description" => $recipe->description,
            "ingredients" => $ingredients_list,
            "kitchen_tools" => [
                "name" => $kitchen_tools_list[0],
                "description" => $kitchen_tools_list[1]
            ],
            "steps"=> $steps_final
        ];

        $json = json_encode($data);
        echo $json;
    } else {
        echo "No result found. Please try something else.";
        exit();
    } 
?>
