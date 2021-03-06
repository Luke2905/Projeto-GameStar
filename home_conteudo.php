<style>
        .card-img-top{
        border-radius: 200px;
        max-width: 250px;
        max-height: 250px;

    }
    .card{
        background-color: #3f0385;
        border-style: solid;
        border-width: 3px;
        color: white;
        border-radius: 20px 0px 20px 0px;
    }
</style>
<h1>Games Star</h1>

<h2>Jogos</h2>

<section class="py-5" action="jgs_conteudo.php" method="GET">   
<div class='container px-4 px-lg-5 mt-5'>
<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'> 
<?php

include 'classes/Jgs_DB.php';

$Jgs_DB = new Jgs_DB();
if($Jgs_DB->buscarJogoHome() == 0){
    echo "<p style='color: white';>Nenhum Jogo em promoção.</p> ";
} else {
 foreach ($Jgs_DB->buscarJogoHome() as $resultado){
        echo " <div class='col mb-5' >";
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
        echo " <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>";
        echo "<div class='text-center'><a class='btn btn-outline-light mt-auto' href='jgs.php'>Ver Jogos</a></div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}

?>

</div>
</div>
</section>
<span class="placeholder col-12"></span>

<h2 >Consoles</h2>

<section class="py-5" action="consoles_conteudo.php" method="GET">   
<div class='container px-4 px-lg-5 mt-5'>
<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'> 
<?php

include 'classes/Consoles_DB.php';

$Consoles_DB = new Consoles_DB();
if($Consoles_DB->buscarConsolesHome() == 0){
    echo "<p style='color: white';>Nenhum Console cadastrado.</p> ";
} else {
 foreach ($Consoles_DB->buscarConsolesHome() as $resultado){
        echo " <div class='col mb-5'>";
        echo "<div class='card h-100'>";
        echo "<img class='card-img-top ' src=".$resultado['url']." alt='...' />";
        echo "<div class='card-body p-4'>";
        echo "<div class='text-center'>";
        echo "<h5 class='fw-bolder'>".$resultado['nome']."</h5>";
        echo "Marca: ".$resultado['marca']."<br>";
        echo "R$".$resultado['preco'];
        echo "</div>";
        echo "</div>";
        echo " <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>";
        echo "<div class='text-center'><a class='btn btn-outline-light mt-auto' href='consoles.php'>Ver Consoles</a></div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}

?>
</div>
</div>
</section>