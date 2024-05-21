<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Gerenciamento de Fornecedores</title>
</head>
<body>
    <div class="contariner">          
        <h1>Lista de Fornecedores</h1>
        <table>
                <tr>
                    <th>Fornecedor</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
                <?php
                include('conexao.php');
                $sql = "SELECT * FROM fornecedores";
                $result = mysqli_query($mysqli, $sql);
        
                if (mysqli_num_rows($result) > 0) {
        
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['fornecedor'] . "</td>";
                        echo "<td>" . $row['cnpj'] . "</td>";
                        echo "<td>" . $row['telefone'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Nenhum usuário encontrado.";
                }

                $mysqli->close();
                ?>
        </table>
    </div>
</body>
</html>
