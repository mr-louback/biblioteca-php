<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./public/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="background">
        <!-- barra com logo botao de login e de cadastro -->
        <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand">Ler<sup>.Livra</sup></a>
                <form class="d-flex">
                    <div style="margin: 0px 5px;">
                        <a id="cad" class="btn btn-outline-success" type="submit">Cadastre-se</a>
                        <a id="log" class="btn btn-outline-success" type="submit">Login</a>
                    </div>
                </form>
            </div>
        </nav>

        <!-- pagina inicial -->
        <div class="container text-center " style="color: white;">
            <h1>Olá, cadastre-se ou faça login para conferir seus livros preferidos.</h1>
            <div class="row mt-5">
                <div class="col-8 pt-5">
                    <h2>Cadastre-se</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa nisi, error modi voluptates, voluptatem quia velit ad sint repellendus inventore quas voluptas. Blanditiis repudiandae corporis distinctio, doloribus rerum quos nam?</p>
                </div>
                <div class="col-4 pt-5">
                    <h2>Faça login</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa nisi, error modi voluptates, voluptatem quia velit ad sint repellendus inventore quas voluptas. Blanditiis repudiandae corporis distinctio, doloribus rerum quos nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quae deserunt hic nobis voluptatum ducimus vero quidem enim accusantium iusto aut nemo, nesciunt impedit eaque quod fugiat, totam commodi at.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/index.js"></script>
</body>

</html>

<?php
if (!isset($_COOKIE['cookies_accepted'])) {
    // pagina de consentimento
    if (isset($_POST['accept_cookies'])) {
        setcookie('cookies_accepted', 'true', time() + (30 * 24 * 60 * 60), '/');
        header('Location: index.php');
        exit;
    } elseif (isset($_POST['reject_cookies'])) {
        setcookie('cookies_accepted', 'false', time() + (30 * 24 * 60 * 60), '/');
        header('Location: index.php');
        exit;
    } else {
?>
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Consentimento de Cookies</title>
            <!-- Inclua os arquivos CSS do Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <link rel="stylesheet" href="./public/css/main.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        </head>

        <body>
            <div class="modal-cookies">
                <div class="container modal-footer ">

                    <h1>Uso de Cookies</h1>
                    <p>Este site utiliza cookies para melhorar a sua experiência. Por favor, leia nossa <a target="_blank" href="politica_cookies.php">Política de Cookies</a> para obter mais informações.</p>
                    <form method="post" action="">
                        <button type="submit" name="accept_cookies" class="btn btn-primary">Aceitar</button>
                        <button type="submit" name="reject_cookies" class="btn btn-danger">Rejeitar</button>
                    </form>
                </div>
            </div>
            <!-- Inclua os arquivos JavaScript do Bootstrap -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        </body>

        </html>

<?php
        exit;
    }
}
?>