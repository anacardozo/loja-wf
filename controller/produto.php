<?php
include_once("../model/connect.php");

function obterProdutos() {
    global $conexao;
    $query = "SELECT Nome, Valor, imagens FROM itens";
    $resultado = mysqli_query($conexao, $query);

    $produtos = [];
    if ($resultado) {
        while ($produto = mysqli_fetch_assoc($resultado)) {
            $produtos[] = $produto;
        }
    } else {
        echo "Erro ao buscar produtos: " . mysqli_error($conexao);
    }

    return $produtos;   
}

?>
