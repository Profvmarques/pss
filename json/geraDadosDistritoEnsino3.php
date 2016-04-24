 <?php
 ini_set('memory_limit', '500M');
            ini_set('max_execution_time', 600);
            require_once('../classes/util.php');
            require_once('../classes/candidatos.php');

            $candidatos = new Candidatos();
            $util = new Util();
            //$util->Seguranca($_SESSION['idusuarios'], '../index.php');
            global $linha;
            global $rs;
            global $array;
            global $jsonTable;

         
//Pr�-inscri��o : Infantil(15 at� 19), Fundamental (7 at� 14) e EJA (2 at� 5)
            $candidatos->consultar("select d.descricao as distrito, ts.descricao as ensino,COUNT(*) as total from inscricao i inner join candidatos c on(i.idcandidatos = c.idcandidatos) 
right join unidade_escolar ue on(i.idunidade_escolar = ue.idunidade_escolar) 
inner join segmentoescolar se on(i.idsegmento_escolar = se.idsegmento_escolar) 
inner join distrito d on(ue.iddistrito = d.iddistrito) inner join tiposegmento ts on(se.idtipo_segmento = ts.idtipo_segmento)
where i.idunidade_escolar NOT IN(66,164,1,2,67,125,180) and i.fase='SEGUNDA' and d.iddistrito=3 
and i.idsegmento_escolar in(2,3,4,5,7,8,9,10,11,12,13,14,15,16,17,18,19)
 group by ts.descricao,d.descricao order by ts.descricao,d.descricao;");
            $linha = $candidatos->Linha;
            $rs = $candidatos->Result;

            $table = array();
            $rows = array();
            $flag = true;

//Criando as colunas dentro do array
            $table['cols'] = array(
                array('label' => 'Ensino', 'type' => 'string'),
                array('label' => 'Total de Inscritos', 'type' => 'number')
            );

//Preenchendo as linhas do array auxiliar "$row" com os dados do banco 
            for ($i = 0; $i < $linha; $i++) {
                $array[$i]['ensino'] = @mysql_result($rs, $i, 'ensino');
                $array[$i]['total'] = @mysql_result($rs, $i, 'total');
                $temp = array();
                $temp[] = array('v' => (string) utf8_encode(@mysql_result($rs, $i, 'ensino')));
                $temp[] = array('v' => (int) @mysql_result($rs, $i, 'total'));

                $rows[] = array('c' => $temp);
            }

//Adiciona o array auxiliar "$row" como um array dentro da variavel tabela.
            $table['rows'] = $rows;

//"json_encode" � uma fun��o do pr�prio php que ir� transformar o array em JSON
            $jsonTable = json_encode($table);
            echo $jsonTable;
			?>