<?php
// Recebendo os dados do formulário
$id = $_POST['id'];
$fornecedor = $_POST['fornecedor'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// Preparando a consulta SQL para inserir os dados na tabela
$sql = "INSERT INTO fornecedores (id, fornecedor, cnpj, telefone, email)
        VALUES ('$id', '$fornecedor', '$cnpj', '$telefone', '$email')";

// Executando a consulta SQL
if ($mysqli->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar os dados: " . $mysqli->error;
}

// Fechando a conexão com o banco de dados
$mysqli->close();

?>