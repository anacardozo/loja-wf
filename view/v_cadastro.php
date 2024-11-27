<?php include("blades/top.php"); ?>

<div class="container mt-5">
<a href="index-login.php" class="btn btn-primary">Voltar</a>
</div>
<div class="container mt-2 bg-white p-3 rounded">
<h1>Cadastrar informações</h1>    
<form action="../controller/funcao-create-aluno.php" method="post" enctype="multipart/form-data">
    <label class="form-label pt-3">Nome</label>
    <input type="text" class="form-control" name="campo_nome">
    <label class="form-label pt-3">Cidade</label>
    <input type="text" class="form-control" name="campo_cidade">
    <label class="form-label pt-3">Curso</label>
    <input type="text" class="form-control" name="campo_curso">
    <label class="form-label pt-3">Foto</label>
    <input type="file" class="form-control" name="arquivo">
<div class="container mt-5 d-flex justify-content-end">    
    <input type="submit" value="Salvar" class="btn btn-primary">
</div>    
</form>
</div>

<?php include("blades/footer.php"); ?>