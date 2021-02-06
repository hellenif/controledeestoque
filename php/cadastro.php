<?php
    session_start();
    include('../php/conexao.php');

    $codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
    $nomeProduto = filter_input(INPUT_POST, 'nomeProduto', FILTER_SANITIZE_STRING);
    $qtdProduto = filter_input(INPUT_POST, 'qtdProduto', FILTER_SANITIZE_STRING);
    $marcaProduto = filter_input(INPUT_POST, 'marcaProduto', FILTER_SANITIZE_STRING);

    $result_cad = "INSERT INTO produtos (codigo, nome_produto, qtd_produto, marca_produto) VALUES ('$codigo', '$nomeProduto', '$qtdProduto', '$marcaProduto')";
    $resultado_cad = mysqli_query($con, $result_cad);