<?php
include 'conexao.php';

class Jgs_DB{
    public function cadastrarJogo(Jogos $be){
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $faixa_etaria = $_POST['classificacao'];
        $preco = $_POST['preco'];
        $url = $_POST['url'];
        $sql = "insert into jogos(nome, genero, classificacao, preco, url) values('$nome', '$genero', '$faixa_etaria', '$preco', '$url')";
        $banco= new Conexao();
        $con = $banco->getConexao();
        $result = $con->query($sql);

        if($result){
            echo "<span class='help-block' style='color: Blue;'>Cadastro efetuado com sucesso!</span>";
        }else {
            echo "<span class='help-block' style='color: Red;'>Erro no cadastro!</span>";
        }
    }


    public function buscarJogo(){
		$sql = "select * from jogos";
		
		$banco= new Conexao();
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

    public function buscarJogoHome(){
		$sql = "select * from jogos where preco < 70";
		
		$banco= new Conexao();
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
    public function deletarJogo(Jogos $be){
        $nome = $_POST['nome'];
        $sql = "delete from jogos where nome ='$nome'";
        $banco= new Conexao();
        $con = $banco->getConexao();
        $result = $con->query($sql);

        if($result){
            echo "<span class='help-block' style='color: green;  margin: 10px;'>Jogo deletado</span>";
        }else {
            echo "<span class='help-block' style='color: Red;'>Erro ao deletar!</span>";
        }
    }
}
