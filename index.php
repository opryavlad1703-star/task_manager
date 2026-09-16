<?php
    function formatTitle($text, $maxLength = 20) {
        if (strlen($text) > $maxLength) {
            return substr($text, 0, $maxLength) . '...';
        }
        return $text;
    }

    function getCurrentGreeting() {
        $hour = (int)date('H');
        
        if ($hour >= 6 && $hour < 12) {
            return "Доброго ранку";
        } elseif ($hour >= 12 && $hour < 18) {
            return "Добрий день";
        } elseif ($hour >= 18 && $hour <= 23) {
            return "Добрий вечір";
        } else {
            return "Доброї ночі";
        }
    }

    $schedule = [
        4 => [2, "Програмування", "Surkov KU"],
        5 => [20, "Бази даних", "Knuschyk AV"],
    ];

    $appName = "Вивчити основи PHP5";
    $taskTitle = "Комплексне практичне завдання для вивчення базового синтаксису та основ програмування на PHP5";
    $taskTimeEstimate = 5;
    $isCompleted = true;
?>

<!DOCTYPE html>
<html lang="uk">
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
    <header>
        <h2><?= getCurrentGreeting() ?>!</h2>
    </header>

    <h1><?=$appName?></h1>
    <ul>
        <li class="<?=$isCompleted ? 'task-done' : 'task-pending'?>">
            тем: <?= formatTitle($taskTitle) ?>
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
</body>
</html>