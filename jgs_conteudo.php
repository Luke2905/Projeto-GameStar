<h1 class="h1titulo">Jogos</h1>

<section class="py-5" action="jgs_conteudo.php" method="GET">   
<div class='container px-4 px-lg-5 mt-5'>
<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'> 
<?php

include 'classes/Jgs_DB.php';

$Jgs_DB = new Jgs_DB();
if($Jgs_DB->buscarJogo() == 0){
    echo "<p style='color: white';>Nenhum Jogo cadastrado.</p> ";
} else {
 foreach ($Jgs_DB->buscarJogo() as $resultado){
        echo " <div class='col mb-5'>";
        echo "<div class='card h-100'>";
        echo "<img class='card-img-top' src=".$resultado['url']." alt='...' />";
        echo "<div class='card-body p-4'>";
        echo "<div class='text-center'>";
        echo "<h5 class='fw-bolder'>".$resultado['nome']."</h5>";
        echo "Genero: ".$resultado['genero']."<br>";
        echo "Classificação: ".$resultado['classificacao']."<br>";
        echo "R$".$resultado['preco'];
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}

?>
</div>
</div>
</section>