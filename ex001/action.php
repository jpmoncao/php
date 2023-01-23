<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hi <?php echo htmlspecialchars($_POST['name']); ?>.
    You are <?php echo (int)$_POST['age']; ?> years old.
</body>

</html>