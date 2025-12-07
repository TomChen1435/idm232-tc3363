<?php
    $ingredients_list = explode("_LINE_BREAK_", $ingredients_string);
    $kitchen_tools_list = explode("_LINE_BREAK_", $kitchen_tools_string);
    
    $steps_list = explode("_STEP_BREAK_", $steps_string);
    foreach ($steps_list as $i => $step) {
        $steps_list[$i] = explode("_LINE_BREAK_", $step);
    };
    $num_steps = count($steps_list);

    $steps_final = [];
    for ($i = 0; $i < $num_steps; $i++) {
        if ($steps_list[$i][0] != "_BLANK_") {
            $title = $steps_list[$i][0];
        } else {
            $title = "";
        }

        $description = $steps_list[$i][1];

        $step = [
            "title" => $title,
            "description" => $description
        ];

        $steps_final[] = $step;
    };
?>
