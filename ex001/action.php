<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $result = '<p>Oi ' . htmlspecialchars($_POST['name']) . '.<br/> Você tem ' . (int)$_POST['age'] . ' anos de idade.';

    echo $result;
    ?>
</body>

</html>