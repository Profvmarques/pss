<?php

require_once('conexao.php');

require_once('logs.php');



class Titulacao {



    //Atributos da classe

    private $idtitulacao;

    private $descricao;

    private $pontos;

    private $dtreg;

    //Método

    public function incluir($descricao,$pontos) {

        $insert = 'insert into titulacao(descricao,pontos,dtreg) values("'.$descricao.'","'.$pontos.'","'.date('Y-m-d H:i:s').'")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);



        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'titulacao', 'Inserir');

    }



    

 

    //consultar

    public function consultar($sql) {

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($sql);

        $this->Linha = @mysql_num_rows($Acesso->result);

        $this->Result = $Acesso->result;

    }



    

       //Editar

    public function alterar($idtitulacao,$descricao,$pontos){

        $update = 'update titulacao set descricao="'.$descricao.'",pontos="'.$pontos.'" where idtitulacao="'.$idtitulacao.'"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $update, 'titulacao', 'Alterar');

    }

public function obterPontos($idtitulacao) {

       $sql = "select * from titulacao where idtitulacao='".$idtitulacao."'";

        $this->consultar($sql);

        if ($this->Linha > 0) {

            $util = new Util();
            $rs=$this->Result;
            $pontos= @mysql_result($rs,0,'pontos');
        } 

        return $pontos;
    }



}



?>