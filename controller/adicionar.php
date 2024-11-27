<?php
if (isset($_POST['nome']) && isset($_POST['valor'])) {
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    
    $carrinho = isset($_COOKIE['carrinho']) ? json_decode($_COOKIE['carrinho'], true) : [];

    $produtoEncontrado = false;
    foreach ($carrinho as &$item) {
        if ($item['Nome'] === $nome) {
            $item['Quantidade'] += 1;
            $produtoEncontrado = true;
            break;
        }
    }

    if (!$produtoEncontrado) {
        $carrinho[] = [
            'Nome' => $nome,
            'Valor' => $valor,
            'Quantidade' => 1
        ];
    }

    setcookie('carrinho', json_encode($carrinho), time() + (7 * 24 * 60 * 60), "/");
}

header("Location: ../view/index.php");
exit;
?>
