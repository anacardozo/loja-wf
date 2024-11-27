<?php
session_start();
include("../controller/produto.php"); 
include("./blades/top.php");

$produtos = obterProdutos();

$carrinho = isset($_COOKIE['carrinho']) ? json_decode($_COOKIE['carrinho'], true) : [];
?>
<link rel="stylesheet" href="style.css">
<div class="navbar">
    <div class="">
        <h1 class="titulo">SKIN<span>BEAUTY</span></h1>
        <nav>
            <ul>

            </ul>
        </nav>
        <div style="position: fixed; top: 10px; right: 90px;">
        <a class= "btn btn-light mt-3" href="logout.php">Entrar</a> <!-- Link para fazer login -->
        </div>

        <div style="position: fixed; top: 25px; right: 10px;">
        <div class="nav-icon-container" onclick="mostrarCarrinho()">
            <img src="../imgs/carrinho.png">
        </div>            
        </div>
    </div>

    <div id="modalCarrinho" style="display: none; position: fixed; top: 50px; right: 10px; background: white; border: 1px solid #ccc; padding: 10px;">
    <h3 class="compra">Carrinho de Compras</h3>
    <button onclick="fecharCarrinho()" class="btn btn-success mt-3">Fechar</button>
    <br>
    <br>

    <?php if (!empty($carrinho)) : ?>
        <ul>
            <?php foreach ($carrinho as $index => $item) : ?>
                <li>
                    <?php echo htmlspecialchars($item['Nome']); ?> - R$<?php echo number_format($item['Valor'], 2, ',', '.'); ?>
                    (Quantidade: <?php echo $item['Quantidade']; ?>)

                    <form action="../controller/removerUmaUnidade.php" method="post" style="display:inline;">
                        <input type="hidden" name="produto_nome" value="<?php echo htmlspecialchars($item['Nome']); ?>">
                        <br>
                        <button type="submit" class="btn btn-success mt-3">Remover uma unidade</button>
                        <br>
                    </form>
                </li>   
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Seu carrinho está vazio.</p>
    <?php endif; ?>
</div>
</div>


<header>
    <div class="header-inner-content">
        <div class="header-botton-side">
            <div class="header-botton-side-left">
                <h2>Beauty Inspired </h2>
                <p>
               by Real Life!
                </p>
            </div>
            <div class="header-botton-side-right">
                <img src="../imgs/skin.png" class= "img-skin">
            </div>
        </div>
    </div>
</header>
    
<main>
    <div class="gray-background">
        <div class="page-inner-content">
            <div class="cols cols-3 ">
            <?php if (!empty($produtos)) : ?>
        <ul class="cols cols-3">
            <?php foreach ($produtos as $produto) : ?>
                <li>

                    <form method="post" action="../controller/adicionar.php">

                        

                        <img class="img-loja" src="<?php echo $produto['imagens'];?>" width="390px">
                        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($produto['Nome']); ?>">
                        <input type="hidden" name="valor" value="<?php echo $produto['Valor']; ?>">
                        <?php echo htmlspecialchars($produto['Nome']); ?> 
                        <button type="submit" class="botao-adicionar"><img src="../imgs/more.png" class="img-compra"></button>

                        <br>
                        R$<?php echo number_format($produto['Valor'], 2, ',', '.'); ?>

                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Nenhum produto encontrado.</p>
    <?php endif; ?>
            </div>


        </div>
    </div>

    
        
</main>

<div class="footer">

   <br>

   <div id="footer_copyright">
            <p class="titulo2">&copy; 2024 SKINBEAUTY. Todos os direitos reservados.</p>
        </div>

</div>



<script>
function mostrarCarrinho() {
    document.getElementById("modalCarrinho").style.display = "block";
}

function fecharCarrinho() {
    document.getElementById("modalCarrinho").style.display = "none";
}
</script>

<?php include("blades/footer.php"); ?>