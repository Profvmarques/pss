<?php

class Acesso {
    /* +-------------------------------------------------------------------------------------------------------+|
      Este metodo que vai conecta ao banco de dados
      |+-------------------------------------------------------------------------------------------------------+ */

    public function Conexao() {
		
		//$this->cnx= mysql_connect('192.95.8.216','pmdcsmen_cdse','qwe123@#$%') or print ("Falha de Conectividade");
       //mysql_select_db('pmdcsmen_sgm2016', $this->cnx);
	   
	   $this->cnx= mysql_connect('mysql.fundec.rj.gov.br','fundec17','pss20161') or print ("Falha de Conectividade");
       mysql_select_db('fundec17', $this->cnx);
	   

        //$this->cnx= mysql_connect('faeterj-caxias.net','fcaxias_sgm','!@fcaxias_sgm$') or print ("Falha de Conectividade");
        //mysql_select_db('fcaxias_sgm', $this->cnx);

	  //$this->cnx= mysql_connect('cdsesgm.cyqzmrzakx2i.us-west-2.rds.amazonaws.com','cdsesgm','cdsek8r8s8n8a8') or print ("Falha de Conectividade");
       // mysql_select_db('sgm', $this->cnx);
        
       //$this->cnx= mysql_connect('localhost','root','') or print (mysql_error("FALHA NA CONEXÃO"));
       //mysql_select_db('sgm2016', $this->cnx);
    }

    public function Query($sql) {
        $this->result = mysql_query($sql) or die(mysql_error());
    }

    public function __destruct() {
        @mysqli_close($this->cnx);
    }

}

?> 