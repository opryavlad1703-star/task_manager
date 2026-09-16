<?php
    $schedule = [
        4 => [2, "Програмування", "Surkov KU"],
        5 => [20, "Бази даних", "Knuschyk AV"],
    ];

    $appName = "Рядок з назвою застосунку Вивчити основи PHP5";
    $taskTitle = "Вивчити основи PHP5";
    $taskTimeEstimate = 5;
    $isCompleted = true; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .task-done {
            color: green;
            font-weight: bold;
        }
        .task-pending {
            color: gray;
        }
    </style>
</head>
<body>
    <h1><?=$appName?></h1>
    
    <ul>
        <li class="<?=$isCompleted ? 'task-done' : 'task-pending'?>">
            тем: <?=$taskTitle?> 
            <?php if ($isCompleted): ?>
                ✔️ Виконано
            <?php else: ?>
                ⏳ В процесі
            <?php endif; ?>
        </li>
        <li>години на вивчення: <?=$taskTimeEstimate?></li>
    </ul>

<?php
    foreach ($schedule as $key => $value) {
        $text = implode("|", $value);
        echo "<p>$key.$text</p>";
    }
?>
    <header>
        <h1><?=$taskTitle?></h1>
        <p><?=$taskTimeEstimate?> години</p>
    </header>
</body>
</html>