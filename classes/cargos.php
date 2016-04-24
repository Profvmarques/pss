<?php

require_once('conexao.php');

require_once('logs.php');



class Cargos {



    //Atributos da classe

    private $idcargos;
    private $descricao;
    private $ch;
    private $remuneracao;
    private $requisito;
    private $dtreg;

    //Método

    public function incluir($descricao,$ch,$remuneracao,$requisito) {

        $insert = 'insert into cargos(descricao,ch,remuneracao,requisito,dtreg) values("'.$descricao.'","'.$ch.'","'.$remuneracao.'","'.$requisito.'","'.date('Y-m-d H:i:s').'")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);



        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'cargos', 'Inserir');

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

    public function alterar($idcargos,$descricao,$ch,$remuneracao,$requisito){

        $update = 'update cargos set descricao="'.$descricao.'",ch="'.$ch.'",remuneracao="'.$remuneracao.'",requisito="'.$requisito.'" where idcargos="'.$idcargos.'"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $update, 'cargos', 'Alterar');

    }





}



?>