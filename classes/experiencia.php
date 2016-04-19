<?php

require_once('conexao.php');

require_once('logs.php');



class Experiencia {



    //Atributos da classe

    private $idexperiencia;

    private $descricao;

    private $pontos;

    private $dtreg;

    //Método

    public function incluir($descricao,$pontos) {

        $insert = 'insert into experiencia(descricao,pontos,dtreg) values("'.$descricao.'","'.$pontos.'","'.date('Y-m-d H:i:s').'")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);



        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'experiencia', 'Inserir');

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

    public function alterar($idexperiencia,$descricao,$pontos){

        $update = 'update experiencia set descricao="'.$descricao.'",pontos="'.$pontos.'" where idexperiencia="'.$idexperiencia.'"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $update, 'experiencia', 'Alterar');

    }

public function obterPontos($idexperiencia) {

         $sql="select * from experiencia where idexperiencia=".$idexperiencia;

        $this->consultar($sql);

        if ($this->Linha > 0) {

            $util = new Util();
            $rs=$this->Result;
            $pontos= mysql_result($rs,0,'pontos');
        } 

        return $pontos;
    }



}



?>