<?php
// dados do formulário
require_once '../functions/functionsMysql.php';
// dados formulário
$user_email = $_POST['email'];
$pass_word = $_POST['pass'];

if (authenticUser($pass_word)) {
    session_start();
    $_SESSION['user_name'] = nameVerified($user_email);
    header('Location: ../pagesUser/libraryy/products.php');
    exit();
} 
?>
<meta http-equiv="refresh" content="0; url=logForm.php">
<script>
    alert('Erro ao fazer login. Verifique os dados e tente novamente.')
</script>