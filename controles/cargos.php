<?phpsession_start();require_once('classes/cargos.php');require_once('classes/util.php');$util = new Util();$util->Seguranca($_SESSION['idusuarios'], '../../index.php');function Processo($Processo) {    $util = new Util();    $cargos = new Cargos();    switch ($Processo) {        /* incluir */        case 'incluir':            if ($_POST['ok'] == 'true') {                try {                    $cargos->consultar("BEGIN");                                        $cargos->incluir(strtoupper($_POST['descricao']), $_POST['ch'],$_POST['remuneracao'],$_POST['requisito']);                    $cargos->consultar("COMMIT");                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');                                        $pg = "default.php?pg=" . base64_encode('view/publico/incluirGestao.php') . "&form=" . base64_encode('Painel');                    $util->redirecionamentopage($pg);                } catch (Exception $ex) {                    $cargos->consultar("ROLLBACK");                    $util->msgbox("Falha de operacao");                }            }            break;        case 'consulta':            global $linha;            global $rs;            global $linha2;            global $rs2;            $cargos->consultar("select *, DATE_FORMAT(e.data_inicio,'%d/%m/%Y') as inicio, DATE_FORMAT(e.data_termino,'%d/%m/%Y') as final from eventos e order by e.data_inicio desc, e.data_termino desc, e.situacao,e.descricao");            $linha = $cargos->Linha;            $rs = $cargos->Result;            if ($_POST['ok'] == 'true') {                $cargos->consultar("select *, DATE_FORMAT(e.data_inicio,'%d/%m/%Y') as inicio, DATE_FORMAT(e.data_termino,'%d/%m/%Y') as final from eventos e order by e.data_inicio desc, e.data_termino desc, e.situacao,e.descricao");                $linha = $cargos->Linha;                $rs = $cargos->Result;            }            break;        /* Edição de dados */        case 'editar':            global $linha8;            global $rs8;            $cargos->consultar("select *,date_format(data_inicio,'%d/%m/%Y') as inicio, date_format(data_termino,'%d/%m/%Y') as final from eventos where ideventos=" . $_GET['id']);            $linha8 = $cargos->Linha;            $rs8 = $cargos->Result;            if ($_POST['ok'] == 'true') {                try {                    //Chamar Incluir                    $cargos->consultar("BEGIN");                    $cargos->alterar($_GET['id'], strtoupper($_POST['descricao']), $util->formatoDataYMD($_POST['data_inicio']), $util->formatoDataYMD($_POST['data_fim']), $_POST['situacao']);                    $cargos->consultar("COMMIT");                    $util->msgbox('REGISTRO SALVO COM SUCESSO!');                    $util->redirecionamentopage('default.php?pg=view/eventos/consulta.php&form=Consulta de Eventos');                } catch (Exception $ex) {                    $cargos->consultar("ROLLBACK");                    $util->msgbox("Falha de operacao");                }            }            break;    }}?>