<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
    ?>
        <h3>strpos() está retornando <em>true</em></h3>
        <p>Você está usando o Internet Explorer!</p>
    <?php
    } else {
    ?>
        <h3>strpos() está retornando <em>false</em></h3>
        <p>Você não está usando o Internet Explorer!</p>
    <?php
    }
    ?>
</body>

</html>