<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Fornecedor</title>
</head>
<body>
    <h2>Formulário de Fornecedor</h2>
    <form method="post" action="inserir.php">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>
        
        <label for="fornecedor">Fornecedor:</label><br>
        <input type="text" id="fornecedor" name="fornecedor"><br>
        
        <label for="cnpj">CNPJ:</label><br>
        <input type="text" id="cnpj" name="cnpj"><br>
        
        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br>
        
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        
        <input type="submit" value="Enviar">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</html>
