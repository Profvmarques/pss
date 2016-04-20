<?php

require_once('conexao.php');
require_once('logs.php');


class Cargos {


    //Atributos da classe

    private $idcargos;
    private $descricao;
    private $ch;
    private $dtreg;

    //Método

    public function incluir($descricao,$ch) {

        $insert = 'insert into cargos(descricao,ch,dtreg) values("'.$descricao.'","'.$ch.'","'.date('Y-m-d H:i:s').'")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);



        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'eventos', 'Inserir');

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

    public function alterar($idcargos,$descricao,$ch){

        $update = 'update cargos set descricao="'.$descricao.'",ch="'.$ch.'" where idcargos="'.$idcargos.'"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $update, 'eventos', 'Alterar');

    }





}



?>