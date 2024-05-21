<?php
include('conexao.php');

$fornecedor = $_POST['fornecedor'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$check_sql = "SELECT * FROM fornecedores WHERE cnpj = '$cnpj'";
$result = $mysqli->query($check_sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Erro: CNPJ já cadastrado.'); window.location.href = 'form.php';</script>";
} else {
    $sql = "INSERT INTO fornecedores (fornecedor, cnpj, telefone, email) VALUES ('$fornecedor', '$cnpj', '$telefone', '$email')";

    if ($mysqli->query($sql) === TRUE) {
        echo "<script>alert('Dados salvos com sucesso!'); window.location.href = 'form.php';</script>";
    } else {
        echo "<script>alert('Erro ao salvar os dados: " . $mysqli->error . "'); window.location.href = 'form.php';</script>";
    }
}

$mysqli->close();
?>
