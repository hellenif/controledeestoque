<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
	</head>

	<body>
        <form method="POST" action="../php/fornecer.php">
            <label for="CNPJ">CNPJ:</label>
             <input name="CNPJ" type="text">
             <br> <br>
            <label for="nome">Nome:</label>
            <input name="nome" type="text">
            <br> <br>
            <label for="dataEntrega">Data de Entrega:</label>
            <input name="dataEntrega" type="date">
            <br> <br>
            <label for="telefone">Tefone:</label>
            <input name="telefone" type="text">
            <br> <br>
            <label for="tipoProduto">Tipo do Produto:</label>
            <input name="tipoProduto" type="text">
            <br> <br>
            <label for="endereco">Endereço:</label>
            <input name="endereco" type="text">
            <br> <br>
            <input type="submit" value="cadastrar"/>  
        </form>
        <script src="../php/conexao.php"></script>
    </body>
</html>