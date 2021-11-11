<h1 class="h1titulo">Jogos</h1>
<form action="jgs_conteudo.php" method="GET">

 <div class="card-group">
     
<?php

include 'classes/Jgs_DB.php';

$Jgs_DB = new Jgs_DB();
if($Jgs_DB->buscarJogo() == 0){
    echo "<p style='color: white';>Nenhum Jogo cadastrado.</p> ";
} else {
 foreach ($Jgs_DB->buscarJogo() as $resultado){
        echo "<div class='card' style='max-width: 400px';>";
        echo "<div class='card-body'>";
        echo "<h4 class='card-title'>".$resultado['nome']."</h4>";
        echo "<p class='card-text'>Genero:".$resultado['genero']."</p>";
        echo "<p class='card-text'>Classificação:".$resultado['classificacao']."</p>";
        echo "<p class='card-text'>R$".$resultado['preco']."</p>";
        echo "</div>";
        echo "</div>";
    }
}

?>
  
 </div>
</form>