<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div style="margin-top: 50px;" class="container">
        <form action="cad.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome (obrigatório)<sup>*</sup></label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email (obrigatório)<sup>*</sup></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="passw" class="form-label">Senha (obrigatório)<sup>*</sup></label>
                <input type="password" class="form-control" name="passw" id="passw" placeholder="**********" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
</body>

</html>