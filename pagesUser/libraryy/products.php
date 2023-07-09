<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo a livraria</title>
</head>

<body>
    <?php
    session_start();
    echo "bem vindo, " . $_SESSION['user_name'];
    ?>
    <h1></h1>
</body>

</html>