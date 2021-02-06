<?php
    session_start();
    include('../php/conexao.php');

    $CNPJ= filter_input(INPUT_POST, 'CNPJ', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $dataEntrega = filter_input(INPUT_POST, 'dataEntrega', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $tipoProduto = filter_input(INPUT_POST, 'tipoProduto', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

    $result_forn = "INSERT INTO fornecedores(CNPJ, nome, dataEntrega, telefone, tipoProduto,endereco) VALUES ('$CNPJ', '$nome', '$dataEntrega', '$telefone','$tipoProduto','$endereco')";
    $resultado_forn = mysqli_query($con, $result_forn);