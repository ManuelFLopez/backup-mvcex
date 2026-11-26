<?php
require_once __DIR__ . '/../model/banco.php';
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getLivro();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['autor'] ."</td>";
            echo "<td>".$value['quantidade'] ."</td>";
            echo "<td> R$:".$value['preco'] ."</td>";
            echo "<td>".$value['data'] ."</td>";
            echo "<td>".$value['flag'] = ($value['flag'] == "0") ? "Desativado":"Ativado" ."</td>";
            $id = rawurlencode($value['nome']);
            echo "<td><a class='btn btn-warning' href='".APP_URL."/view/editar.php?id=".$id."'>Editar</a><a class='btn btn-danger' href='".APP_URL."/controller/ControllerDeletar.php?id=".$id."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

