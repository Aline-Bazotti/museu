<?php

require 'Base.php';

class Metodo extends Base
{

    public function NomeFuncion($variavel, $outravariavel)
    {
        try {
            $sql = $this->conexao->prepare("SELECT * FROM tabela WHERE coluna = :parametro");
            $sql->execute(array(
                ':parametro' => $variavel,
                ':outroparametro' => $outravariavel
            ));
            $dados = $sql->fetchAll(); //fetch quando é só uma linha de dados
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}