<?php
    header('Content-Type: application/json');

    include("../include/database.php");

    $stmt = $connection->prepare("SELECT * FROM idm232");

    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $ingredients_string = $row["ingredients"];
        $kitchen_tools_string = $row["kitchen_tools"];
        $steps_string = $row["steps"];

        include("./get_data.php");

        $data = [
            "id" => $row["id"],
            "category" => $row["category"],
            "title" => $row["title"],
            "subtitle" => $row["subtitle"],
            "description" => $row["description"],
            "ingredients" => $ingredients_list,
            "kitchen_tools" => [
                "name" => $kitchen_tools_list[0],
                "description" => $kitchen_tools_list[1]
            ],
            "steps"=> $steps_final
        ];

        $json = json_encode($data);
        echo $json;
    }
?>
