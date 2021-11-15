<h1 class="h1titulo">Consoles</h1>

<section class="py-5" action="consoles_conteudo.php" method="GET">   
<div class='container px-4 px-lg-5 mt-5'>
<div class='row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center'> 
<?php

include 'classes/Consoles_DB.php';

$Consoles_DB = new Consoles_DB();
if($Consoles_DB->buscarConsoles() == 0){
    echo "<p style='color: white';>Nenhum Console cadastrado.</p> ";
} else {
 foreach ($Consoles_DB->buscarConsoles() as $resultado){
        echo " <div class='col mb-5'>";
        echo "<div class='card h-100'>";
        echo "<img class='card-img-top' src=".$resultado['url']." alt='...' />";
        echo "<div class='card-body p-4'>";
        echo "<div class='text-center'>";
        echo "<h5 class='fw-bolder'>".$resultado['nome']."</h5>";
        echo "Marca: ".$resultado['marca']."<br>";
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