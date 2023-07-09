<?php
require_once '../functions/functionsMysql.php';

// dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$pass_one = $_POST['passw'];
$hash = password_hash($pass_one, PASSWORD_DEFAULT);

recData($nome,$email,$pass_one,$hash);

?>
<meta http-equiv="refresh" content="0; url=../index.php">
<script>
    alert('dados gravados com sucesso.')
</script>