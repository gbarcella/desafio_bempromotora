<?php

use App\Core\Model;

class Questao extends Model {

    public $questao1;
    public $questao2;
    public $questao3;
    public $questao4;

    public function listarTodos() {
        $sql = "SELECT * FROM questoes";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function criar() {
        $sql = "INSERT INTO questoes (questao1, questao2, questao3, questao4) VALUES (?,?,?,?)";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->questao1);
        $stmt->bindValue(2, $this->questao2);
        $stmt->bindValue(3, $this->questao3);
        $stmt->bindValue(4, $this->questao4);

        if($stmt->execute()){
            return "Cadastrado com sucesso, muito obrigado!";
        } else {
            return "Erro ao cadastrar!";
        }
    }
}