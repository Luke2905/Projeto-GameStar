<?php 
include "Layout.php";
$layout = new Layout();
$layout->conteudo = "formulario";
$layout->index();


include 'classes/Class_jg.php';
include 'classes/Jgs_DB.php';

if (isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $faixa_etaria = $_POST['classificacao'];
    $preco = $_POST['preco'];
    $botao = $_POST['botao'];

$jogo = new Jogos();
$Jgs_DB = new Jgs_DB();

 if($botao=="cadastrar"){

    $Jgs_DB->cadastrarJogo($jogo); 

 }

}