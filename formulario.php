<?php
// Configuração do banco de dados
$servername = "localhost";  
$username = "root";  
$password = "12345678";  
$dbname = "dbFormulario";   

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário e aplicando sanitização
    $nome = $conn->real_escape_string(strip_tags($_POST['nome']));
    $email = $conn->real_escape_string(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $mensagem = $conn->real_escape_string(strip_tags($_POST['mensagem']));

    // Validando os campos (se necessário)
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Preparando o SQL para inserção
    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    // Executando a query
    if ($conn->query($sql) === TRUE) {
        echo "javascript: alert('Mensagem enviada com sucesso!'); window.location.href = 'index.php'; ";
    } else {
        echo "javascript: alert('Erro ao mandar a mensagem ') " . $conn->error;
    }
}
// Fechar a conexão com o banco
$conn->close();
?>