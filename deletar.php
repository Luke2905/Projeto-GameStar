<?php


include 'classes/Class_jg.php';
include 'classes/Jgs_DB.php';

$jogo = new Jogos();
$Jgs_DB = new Jgs_DB();

if (isset($_POST['id'])){
    $id = $_POST['id'];
    $botao = $_POST['botao'];
    
 if($botao=="deletar"){

  $Jgs_DB->deletarJogo($jogo); 
 }
}
header("url=del_jg.php");


echo "<script>
             setTimeout(
                function() {
                    window.location.href = 'jgs.php';
                }, 1000);
</script>";
?>