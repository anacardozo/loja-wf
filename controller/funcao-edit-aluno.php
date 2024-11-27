<?php
include("../model/connect-2.php");
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE Aluno_Codigo = ".$_GET["ida"]);
$exibe = mysqli_fetch_array($query);
?>