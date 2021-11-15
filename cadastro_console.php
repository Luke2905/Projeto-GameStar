<?php 
include "Layout.php";
$layout = new Layout();
$layout->conteudo = "formulario_console";
$layout->index();


include 'classes/Class_consoles.php';
include 'classes/Consoles_DB.php';

if (isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $url = $_POST['url'];
    $botao = $_POST['botao'];

$console = new Consoles();
$Console_DB = new Consoles_DB();

 if($botao=="cadastrar"){

    $Console_DB->cadastrarConsoles($console); 

 }


}