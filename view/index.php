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
        <form method="POST" action="../php/cadastro.php">

            <label for="codigo">Codigo:</label>
            <input name="codigo" type="text">
            <br> <br>
            <label for="nomeProduto">Nome:</label>
            <br> <br>
            <input name="nomeProduto" type="text">
            <br> <br>
            <label for="qtdProduto">Quantidade:</label>
            <input name="qtdProduto" type="text">
            <label for="marcaProduto">Marca:</label>
            <input name="marcaProduto" type="text">
            
            <input type="submit" value="cadastrar"/>  
        </form>
        <script src="../php/conexao.php"></script>
    </body>
</html>