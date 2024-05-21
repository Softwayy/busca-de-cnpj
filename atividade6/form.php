<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Fornecedor</title>
</head>
<body>
<center>
<h1>Cadastro de Fornecedor</h1>
    <form  method="post" action="inserir.php">
        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" required>
        <br><br>
        <label for="fornecedor">Fornecedor:</label>
        <input type="text" id="fornecedor" name="fornecedor" required>
        <br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <button type="submit">Salvar</button>
        <br><br>
        <a href="pesquisa.php"><input type="button" placeholder="listagem"></a>
        </form>
</center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</html>
