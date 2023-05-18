<?php

$fraseCensurata = str_replace($_GET['frase'], '****', $_GET['frase']);

$parola = $_GET['parola'];
$frase = $_GET['frase'];



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>

<body>

    <div>
        <h2>La tua parola è:
            <?php echo $_GET['parola'] ?>

        </h2>
        <h2>
            La tua parola ha la lunghezza di:
            <?php echo strlen($_GET['parola']) ?>
        </h2>
        <h2>
            La tua frase censurata è:
            <?php echo $fraseCensurata ?>

        </h2>
        <h2>
            La tua frase ha la lunghezza di:
            <?php echo strlen($fraseCensurata) ?>
        </h2>
    </div>

</body>

</html>