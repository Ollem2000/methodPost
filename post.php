<?php
// Conexão com o banco de dados
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe o texto do formulário
$texto = $_POST["texto"];

// Insere o texto no banco de dados
$sql = "INSERT INTO tabela (coluna_texto) VALUES ('$texto')";

if ($conn->query($sql) === TRUE) {
    echo "Texto enviado com sucesso!";
} else {
    echo "Erro ao enviar o texto: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>