<?php
function recData($userName, $userEmail, $userPassword, $userHash)
{
    require_once 'connection.php';
    $valor = connection();
    // conexao mysql
    $conn = new mysqli($valor[0], $valor[1], $valor[2], $valor[3]);
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
    // inserindo no banco de dados
    $sql = "INSERT INTO tbl_users (user_name, user_email, user_password, user_hash) VALUES('$userName','$userEmail', '$userPassword','$userHash');";
    $resultado = mysqli_query($conn, $sql);
    // verificando erros
    if (!$resultado) {
        echo "Falha ao fazer registro:"  . mysqli_connect_error();
    }
    mysqli_close($conn);
}
function authenticUser($password)
{
    require_once 'connection.php';
    $valor = connection();
    // conexao mysql
    $conn = new mysqli($valor[0], $valor[1], $valor[2], $valor[3]);
    if ($conn->connect_error) {
        die("Falha ao conectar:" . $conn->connect_error);
    }
    // consulta ao banco
    $sql = "SELECT user_hash FROM tbl_users WHERE user_password = ?";
    $result = paramSearch($conn, $sql, $password);
    return $result;
    mysqli_close($conn);
}
function nameVerified($user_email)
{
    require_once 'connection.php';
    $valor = connection();
    // conexao mysql
    $conn = new mysqli($valor[0], $valor[1], $valor[2], $valor[3]);
    if ($conn->connect_error) {
        die("Falha ao conectar:" . $conn->connect_error);
    }
    // consulta ao banco
    $sql = "SELECT user_name FROM tbl_users WHERE user_email = ?";
    $resultado = paramSearch($conn, $sql, $user_email);
    return $resultado;
    mysqli_close($conn);
}
function paramSearch($connMysql, $sqlQuery, $paramBusca)
{
    $stored_value = null;
    $stmt = $connMysql->prepare($sqlQuery);
    $stmt->bind_param("s", $paramBusca);
    $stmt->execute();
    $stmt->bind_result($stored_value);
    $stmt->fetch();
    if ($stored_value !== null) {
        if (password_verify($paramBusca, $stored_value)) {
            return true;
        }else{
            return $stored_value;
        }
        mysqli_close($stmt);
    } else {
        echo "Erro $stored_value";
        return false;
        mysqli_close($stmt);
    }
}
