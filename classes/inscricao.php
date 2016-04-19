<?php

require_once('conexao.php');

require_once('logs.php');



//Sempre primeira letra maiúscula

class Inscricao {



    //Atributos da classe

    private $idinscricao;
    private $rg;
    private $data_expedicao;
    private $cpf;
    private $nome;
    private $sexo;
    private $nascimento;
    private $endereco;
    private $bairro;
    private $municipio;
    private $uf;
    private $cep;
    private $telefone;
    private $celular;
    private $email;
    private $idcargos;
    private $idexperencia;
    private $idtitulacao;
    private $idusuarios;
    private $pontos;

   //Método

    public function Incluir($rg,$data_expedicao,$nome,$sexo,$nascimento,$endereco,$complemento, $bairro, $municipio, $uf, $cep,$telefone,$celular,$email,$idcargos, $idexperiencia, $idtitulacao,$idusuarios,$pontos) {

       $insert = 'insert into inscricao(rg, data_expedicao,nome,sexo,nascimento,endereco,complemento, bairro, municipio, uf, cep,telefone,celular,email,idcargos, idexperiencia, idtitulacao,idusuarios, pontos,dtreg) values("'.$rg.'","'.$data_expedicao.'","'.$nome.'","'.$sexo.'","'.$nascimento.'","'.$endereco.'","'.$complemento.'","'.$bairro.'","'.$municipio.'","'.$uf.'","'.$cep.'","'.$telefone.'","'.$celular.'","'.$email.'","'.$idcargos.'","'.$idexperiencia.'","'.$idtitulacao.'","'.$idusuarios.'","'.$pontos.'","'.date('Y-m-d H:i:s').'")';

        $Acesso = new Acesso();
        $Acesso->Conexao();
        $Acesso->Query($insert);
        
        $Logs = new Logs();
        $Logs->Incluir($_SESSION['idusuarios'], $insert, 'inscricao', 'Inserir');
        
        $this->consultar("select max(idinscricao) as idI from inscricao where idusuarios=".$idusuarios);
        $rs=$this->Result;
        $idinscricao=mysql_result($rs,0,'idI');

        return $idinscricao;

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

    public function Alterar($idinscricao, $cpf, $nome,$sexo,$nascimento,$endereco, $bairro, $municipio, $uf, $cep,$idcargos, $idexperiencia, $idtitulacao,$idusuarios){

      $update = 'update inscricao set cpf="'.$cpf.'", nome="'.$nome.'",sexo="'.$sexo.'",

            nascimento="'.$nascimento.'", endereco="'.$endereco.'",municipio="'.$municipio.'",uf="'.$uf.'",cep="'.$cep.'",idcargos="'.$idcargos.'",idexperiencia="'.$idexperiencia.'",idtitulacao="'.$idtitulacao.'",idusuarios="'.$idusuarios.'" 
			where idinscricao="'.$idinscricao.'"'; 

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $Logs = new Logs();

        $Logs->Incluir($_SESSION['idusuarios'], $update, 'inscricao', 'Alterar');

    }

	
}



?>