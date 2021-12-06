<?php


include 'classes/Class_jg.php';
include 'classes/Jgs_DB.php';

$jogo = new Jogos();
$Jgs_DB = new Jgs_DB();

if (isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $botao = $_POST['botao'];
    
 if($botao=="deletar"){

  $Jgs_DB->deletarJogo($jogo); 
 }
}
header("Refresh:1; url=del_jg.php");

