<?php
include 'conexao1.php';

class Consoles_DB{
    public function cadastrarConsoles(Consoles $be){
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $url = $_POST['url'];
        $preco = $_POST['preco'];
        $sql = "insert into consoles(nome, marca, preco, url) values('$nome', '$marca', '$preco', '$url')";
        $banco= new Conexao1();
        $con = $banco->getConexao();
        $result = $con->query($sql);

        if($result){
            echo "<span class='help-block' style='color: Blue;'>Cadastro efetuado com sucesso!</span>";
        }else {
            echo "<span class='help-block' style='color: Red;'>Erro no cadastro!</span>";
        }
    }


    public function buscarConsoles(){
		$sql = "select * from consoles";
		
		$banco= new Conexao1();
		$con = $banco->getConexao();
		
		$stm = $con->prepare($sql);
		$stm->execute();

		if($stm->rowCount()>0){
			$result = $stm->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		} else{
            return 0;
        }

	}

    public function buscarConsolesHome(){
		$sql = "select * from consoles where preco < 1000";
		
		$banco= new Conexao1();
		$con = $banco->getConexao();
		
		$stm = $con->prepare($sql);
		$stm->execute();

		if($stm->rowCount()>0){
			$result = $stm->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		} else{
            return 0;
        }

	}
}