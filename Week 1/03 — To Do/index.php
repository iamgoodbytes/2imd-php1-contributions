<?php
    $toDo = [
        [
            "description" => "Meeting klant",
            "time" => "2",
            "category" => "Werk"
        ],
        [
            "description" => "PHP oefeningen afwerken",
            "time" => "2",
            "category" => "School"
        ],
        [
            "description" => "Huishoudelijke taken",
            "time" => "1",
            "category" => "Thuis"
        ],
        [
            "description" => "Website klant ontwerpen",
            "time" => "6",
            "category" => "Werk"
        ],
        [
            "description" => "Winkelen",
            "time" => "1",
            "category" => "Thuis"
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>To Do</title>
</head>
<body>
    <header>
        <h1>To Do App</h1>
    </header>
    <main>
        <div class="post__toDo">
        <ul>
            <?php include_once("list.inc.php"); ?>
        </ul>
        </div>
    </main>
</body>
</html>