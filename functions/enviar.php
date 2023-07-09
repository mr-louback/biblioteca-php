<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// $utf8String = "Nome: $nome \r\n Email: $email \r\n Mensagem: $mensagem";
// $stringISO88591 = mb_convert_encoding($utf8String,'ISO-8859-1','UTF-8');
// $to = "loubacked4work@outlook.com";
// $subject = "Email de login web";
// $headers = "From: $email \r\n";
// $headers .= "Content-Type: text/plain; charset=ISO-8859-1 \r\n";
// mail($to, $subject, $utf8String, $headers);
// var_dump($stringISO88591);
$to = "loubacked4work@outlook.com";
$subject = "Assunto do e-mail";
$message = "Conteúdo em UTF-8 que será enviado por e-mail";

// Converter a mensagem para ISO-8859-1
$message = utf8_decode($message);

// Configurar o cabeçalho do e-mail
$headers = "From: remetente@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
if ($user && $pass) {
    # code...
    
    for ($i=0; $i < 5 ; $i++) { 
        # code...

    }

} else {
    echo "Preencha os campos acima";
}

// Enviar o e-mail
mail($to, $subject, $message, $headers);
?>
<meta http-equiv="refresh" content="0; url=index.php">
<script>
    alert("dados enviados com sucesso")
</script>