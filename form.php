<!-- PHP -->
<?php

$parolaCensurata = str_replace($_GET['parola'], '***', $_GET['parola']);

$frase = $_GET['frase'];

$parola = $_GET['parola'];

?>
<!-- HTML -->
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
        <h2>La tua frase è:
            <?php echo $frase ?>

        </h2>
        <h2>
            La tua frase ha una lunghezza di:
            <?php echo strlen($frase) ?>
        </h2>
        <h2>
            La tua parola censurata è:
            <?php echo $parolaCensurata ?>

        </h2>
        <h2>
            La tua parola ha una lunghezza di:
            <?php echo strlen($parola) ?>
        </h2>
    </div>

</body>

</html>