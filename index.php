<?php
    $schedule = [
        4=>[2,"Програмування", "Surkov KU"],
        5=>[20,"Бази даних", "Knuschyk AV"],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?=$appName?>
    </h1>
    <ul>
        <li> тем: Вивчити основи PHP</li>
        <li> години на вивчення: 5</li>
        </li>
    </ul>
<?php
    foreach ($schedule as $key => $value) {

        $text = implode("|", $value);
            echo "<p>$key.$text</p>";
    }
?>
    <header>
        <h1>
            <?=$taskTitle?> </li>
            <li><?=$taskTimeEstimate?>години</li>
        </h1>
    </header>
</body>
</html>