# MySQL-Front 3.2  (Build 7.19)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES 'latin1' */;

DROP DATABASE IF EXISTS `fundec17`;
CREATE DATABASE `fundec17` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fundec17`;
CREATE TABLE `cargos` (
  `idcargos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(70) DEFAULT NULL,
  `ch` varchar(11) DEFAULT NULL,
  `remuneracao` varchar(50) DEFAULT NULL,
  `requisito` longtext,
  `dtreg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcargos`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO `cargos` VALUES (1,'ANALISTA DE SUPORTE DE REDES','44 h','2.600,00','','2016-04-24 13:37:25');
INSERT INTO `cargos` VALUES (2,'ANALISTA CONT¡BIL','44h','5800','Ensino Superior Completo em Contabilidade','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (3,'ANALISTA DE CONTRATOS','44h','5800','Ensino Superior Completo em Direito, com inscriÁ„o na OAB','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (4,'ANALISTA FINANCEIRO','44h','5800','Ensino Superior Completo em AdministraÁ„o ou Economia','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (5,'ANALISTA JURÕDICO','44h','5800','Ensino Superior Completo em Direito, com inscriÁ„o na OAB','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (6,'ASSESSOR I','44h','4000','Ensino Superior Completo','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (7,'ASSESSOR II','44h','2500','Diploma ou certificado de nÌvel mÈdio e/ou tÈcnico.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (8,'AGENTE PATRIMONIAL','44h','2500','Diploma ou certificado de nÌvel mÈdio e/ou tÈcnico. Com experiÍncia comprovada.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (9,'GUARDI√O DE PISCINA','10h','953,47','Ensino MÈdio Completo com curso de Guardi„o de Piscina - GMAR','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (10,'T…CNICO DE INFORM¡TICA','44h','1265,5','Ensino MÈdio TÈcnico Completo em Inform·tica','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (11,'INSTRUTOR DOCENTE I BIOLOGIA','h/a','14,89','Possuir curso superior e ter experiÍncia comprovada na disciplina em que ir· ministrar instruÁ„o.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (12,'INSTRUTOR DOCENTE I DE EDUCA«√O FÕSICA','h/a','14,89','Possuir curso superior e ter experiÍncia comprovada na disciplina em que ir· ministrar instruÁ„o.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (13,'INSTRUTOR DOCENTE I DE INFORM¡TICA','h/a','14,89','Possuir curso superior e ter experiÍncia comprovada na disciplina em que ir· ministrar instruÁ„o.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (14,'INSTRUTOR DOCENTE I EDUCA«√O FÕSICA PCD','h/a','14,89','Possuir diploma obtido em curso de EducaÁ„o FÌsica, oficialmente autorizado e reconhecido; ser regularmente registrado no Conselho Regional de EducaÁ„o FÌsica (Conforme termo das Lei 9696/98 ñAnexo II), e ter experiÍncia comprovada com atividades com crianÁas, jovens e adultos com deficiÍncia intelectual ou intelectual e fÌsica.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (15,'INSTRUTOR DOCENTE I FÕSICA','h/a','14,89','Possuir curso superior e ter experiÍncia comprovada na disciplina em que ir· ministrar instruÁ„o.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (16,'INSTRUTOR DOCENTE I TEORIA MUSICAL','h/a','14,89','Possuir curso superior e ter experiÍncia comprovada na disciplina em que ir· ministrar instruÁ„o.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (17,'INSTRUTOR ESPECIALISTA CONFEITEIRO','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (18,'INSTRUTOR ESPECIALISTA SISTEMAS ELETR‘NICOS DE SEGURAN«A','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (19,'INSTRUTOR ESPECIALISTA ALMOXARIFE','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (20,'INSTRUTOR ESPECIALISTA AUTOCAD','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (21,'INSTRUTOR ESPECIALISTA AUXILIAR ADMINISTRATIVO','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (22,'INSTRUTOR ESPECIALISTA BANDA E FANFARRA: GUITARRA','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (23,'INSTRUTOR ESPECIALISTA BANDA E FANFARRA: TECLADO','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (24,'INSTRUTOR ESPECIALISTA BANDA E FANFARRA: TUBA','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (25,'INSTRUTOR ESPECIALISTA BANDA E FANFARRA: VIOL√O','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (26,'INSTRUTOR ESPECIALISTA BARMAN','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (27,'INSTRUTOR ESPECIALISTA CANTO E CORAL','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (28,'INSTRUTOR ESPECIALISTA CFTV E AUTOMA«√O','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (29,'INSTRUTOR ESPECIALISTA CONTROLE DE ARMAZENAMENTO E EXPEDI«√O','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (30,'INSTRUTOR ESPECIALISTA COPA','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (31,'INSTRUTOR ESPECIALISTA CUTELARIA/CHAVEIRO','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (32,'INSTRUTOR ESPECIALISTA DAN«A','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (33,'INSTRUTOR ESPECIALISTA DESIGNER DE CÕLIOS E SOBRANCELHAS','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (34,'INSTRUTOR ESPECIALISTA DESIGNER DE M”VEIS / DESENHO DE M”VEIS','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (35,'INSTRUTOR ESPECIALISTA EST…TICA','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (36,'INSTRUTOR ESPECIALISTA GAR«OM/CUMIN','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (37,'INSTRUTOR ESPECIALISTA INSTALA«√O DE DIVIS”RIA EM EUCATEX, MADEIRA PVC','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (38,'INSTRUTOR ESPECIALISTA LOCUTOR','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (39,'INSTRUTOR ESPECIALISTA MEC¬NICA DE REFRIGERA«√O E CLIMATIZA«√O','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (40,'INSTRUTOR ESPECIALISTA MONTAGEM DE M”VEIS','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (41,'INSTRUTOR ESPECIALISTA PINTOR DE OBRAS','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (42,'INSTRUTOR ESPECIALISTA PROMO«√O DE VENDAS E VENDAS POR TELEMARKETING','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (43,'INSTRUTOR ESPECIALISTA REFORMADOR DE M”VEIS','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (44,'INSTRUTOR ESPECIALISTA REVESTIMENTO CER¬MICO','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (45,'INSTRUTOR ESPECIALISTA SERVI«OS, ASSIST NCIA E AUXILIAR ADMINISTRATIVO','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (46,'INSTRUTOR ESPECIALISTA TEATRO','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (47,'INSTRUTOR ESPECIALISTA TELECOMUNICA«√O IRLA E CABISTA ORA','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (48,'INSTRUTOR ESPECIALISTA TELEMARKETING / TELEATENDIMENTO','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (49,'INSTRUTOR ESPECIALISTA TEORIA MUSICAL','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (50,'INSTRUTOR ESPECIALISTA WEB DESIGNER','h/a','11,9','Possuir o ensino mÈdio, preferencialmente tÈcnico ou superior e ter experiÍncia comprovada na ·rea, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');

CREATE TABLE `experiencia` (
  `idexperiencia` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) DEFAULT NULL,
  `pontos` double(10,2) DEFAULT NULL,
  `dtreg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idexperiencia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `experiencia` VALUES (1,'1 ANO',1,'2016-04-18 19:41:24');
INSERT INTO `experiencia` VALUES (2,'2 ANOS',2,'2016-04-18 19:41:46');
INSERT INTO `experiencia` VALUES (3,'3 ANOS',3,'2016-04-18 19:41:49');
INSERT INTO `experiencia` VALUES (4,'4 ANOS',4,'2016-04-18 19:41:58');
INSERT INTO `experiencia` VALUES (5,'5 ANOS OU MAIS',5,'2016-04-18 19:42:12');

CREATE TABLE `inscricao` (
  `idinscricao` int(11) NOT NULL AUTO_INCREMENT,
  `rg` varchar(20) DEFAULT NULL,
  `data_expedicao` date DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sexo` varchar(5) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `celular` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `idcargos` int(11) DEFAULT NULL,
  `idexperiencia` int(11) DEFAULT NULL,
  `idusuarios` int(11) DEFAULT NULL,
  `experiencia_adm_publica` int(11) DEFAULT NULL,
  `participacao_projetos` int(11) DEFAULT NULL,
  `curso_extensao` int(11) DEFAULT NULL,
  `curso_aperfeicoamento` int(11) DEFAULT NULL,
  `inf_basica` int(11) DEFAULT NULL,
  `pontos` double(10,2) DEFAULT NULL,
  `dtreg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idinscricao`),
  KEY `idcargos` (`idcargos`),
  KEY `idexperiencia` (`idexperiencia`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `inscricao` VALUES (1,'02043206007','2008-10-15','VINÕCIUS MARQUES DA SILVA FERREIRA','M','1983-01-02','RUA DOUTOR ',3411,'casa 015','VILA MERITI','DUQUE DE CAXIAS ','RJ','25025010','(21) 2673-15970','(21) 96694-0000','vinimars1@gmail.com',1,5,17,NULL,NULL,NULL,NULL,NULL,5.25,'2016-04-19 12:11:17');
INSERT INTO `inscricao` VALUES (2,'3454555','2008-10-15','FABIANA VASCONCELOS DE FARIAS BREVILATO','M','1984-01-02','RUA DOUTOR ',434,'casa 01','VILA MERITI','DUQUE DE CAXIAS','RJ','25025-01','(21) 3777-7638','(21) 964734249','fbrevilato@gmail.com',5,5,21,1,1,1,1,1,8,'2016-04-24 15:32:37');
INSERT INTO `inscricao` VALUES (3,'247268436','2016-02-16','ADRIANO DA SILVA CUNHA','M','1988-10-12','RUA FREI FIDELIS',26,'CASA 01','JARDIM 25 DE AGOSTO','DUQUE DE CAXIAS','RJ','25011060','(21) 2674-0745','(21) 96694-9491','ADRIX21RJ@YAHOO.COM.BR',6,1,23,1,1,1,1,1,4,'2016-04-25 10:01:28');
INSERT INTO `inscricao` VALUES (4,'475553','2012-04-12','CRISTINA REIS','F','1966-03-06','RUA S√ÉO JOAQUIM',17,'CASA 1','VILA S√ÉO LUIS','DUQUE DE CAXIAS','RJ','25086070','(21) 9640-86414','(21) 96408-6414','CRISREISEDUCACAO@GMAIL.COM',6,5,24,1,1,1,1,1,8,'2016-04-25 10:13:53');
INSERT INTO `inscricao` VALUES (5,'1990104775','1991-01-25','MONIQUE DORNELLES','F','1970-07-08','RUA SIRACUSA',179,'AP 302','IRAJ√Å','RIO DE JANEIRO','RJ','21361460','(21) 9997-76000','(21) 99977-6000','M.DORNELLES@YAHOO.COM.BR',6,4,25,1,1,0,1,0,6.5,'2016-04-25 14:55:12');

CREATE TABLE `logs` (
  `idlogs` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idusuarios` int(11) DEFAULT NULL,
  `queryexecutada` longtext NOT NULL,
  `dtreg` timestamp NULL DEFAULT NULL,
  `nome_tabela` varchar(50) DEFAULT NULL,
  `acao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlogs`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO `logs` VALUES (1,17,'insert into inscricao(rg, data_expedicao,nome,sexo,nascimento,endereco,complemento, bairro, municipio, uf, cep,telefone,celular,email,idcargos, idexperiencia, idtitulacao,idusuarios, pontos,dtreg) values(\"0204320600\",\"2008-10-15\",\"VINICIUS MARQUES DA SILVA FERREIRA\",\"M\",\"1983-01-02\",\"rua doutor\",\"casa 01\",\"vila meriti\",\"DUQUE DE CAXIAS\",\"RJ\",\"25025010\",\"(21) 2673-1597\",\"(21) 96694-9491\",\"vinimars1@gmail.com\",\"1\",\"5\",\"3\",\"17\",\"5.5\",\"2016-04-19 12:11:17\")','2016-04-19 12:11:17','inscricao','Inserir');
INSERT INTO `logs` VALUES (2,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADO CADASTRO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B></B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-19 12:11:18\",\"A VALIDAR\")','2016-04-19 12:11:18','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (3,17,'update usuarios set senha=\"MTIzNDU2Nw==\" where idusuarios=\"17\"','2016-04-19 16:23:41','usuarios','alterar senha');
INSERT INTO `logs` VALUES (4,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"ATUALIZA«√O DOS DADOS DO USU¡RIO  PELO USU¡RIO <B></B>\",\"ATUALIZA«√O DE SENHA\",\"2016-04-19 16:23:41\",\"A VALIDAR\")','2016-04-19 16:23:41','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (5,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRAA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",municipio=\"DUQUE DE CAXIAS X\",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-1597\",celular=\"(21) 96694-9491\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 10:52:42','inscricao','Alterar');
INSERT INTO `logs` VALUES (6,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRAA</B> PELO USU¡RIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 10:52:42\",\"A VALIDAR\")','2016-04-20 10:52:42','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (7,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 10:53:53','inscricao','Alterar');
INSERT INTO `logs` VALUES (8,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 10:53:53\",\"A VALIDAR\")','2016-04-20 10:53:53','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (9,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"qq\",municipio=\"DUQUE DE CAXIAS a\",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 11:01:41','inscricao','Alterar');
INSERT INTO `logs` VALUES (10,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 11:01:41\",\"A VALIDAR\")','2016-04-20 11:01:41','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (11,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 11:02:06','inscricao','Alterar');
INSERT INTO `logs` VALUES (12,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 11:02:06\",\"A VALIDAR\")','2016-04-20 11:02:06','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (13,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 11:03:48','inscricao','Alterar');
INSERT INTO `logs` VALUES (14,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 11:03:48\",\"A VALIDAR\")','2016-04-20 11:03:48','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (15,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\",pontos=\"5.25\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 11:06:44','inscricao','Alterar');
INSERT INTO `logs` VALUES (16,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 11:06:44\",\"A VALIDAR\")','2016-04-20 11:06:44','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (17,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\",pontos=\"5.25\" \n\t\t\twhere idinscricao=\"1\"','2016-04-20 13:55:36','inscricao','Alterar');
INSERT INTO `logs` VALUES (18,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"17\",\"REALIZADA A ATUALIZAÁ„O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU·RIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 13:55:36\",\"A VALIDAR\")','2016-04-20 13:55:36','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (19,1,'insert into cargos(descricao,ch,dtreg) values(\"teste\",\"40h\",\"2016-04-20 14:52:20\")','2016-04-20 14:52:20','eventos','Inserir');
INSERT INTO `logs` VALUES (20,1,'insert into titulacao(descricao,pontos,dtreg) values(\"teste\",\"\",\"2016-04-20 15:03:23\")','2016-04-20 15:03:23','titulacao','Inserir');
INSERT INTO `logs` VALUES (21,21,'insert into inscricao(rg, data_expedicao,nome,sexo,nascimento,endereco,numero,complemento, bairro, municipio, uf, cep,telefone,celular,email,idcargos, idexperiencia, idusuarios, experiencia_adm_publica,participacao_projetos,curso_extensao,curso_aperfeicoamento,inf_basica,pontos,dtreg) values(\"3454555\",\"2008-10-15\",\"FABIANA VASCONCELOS DE FARIAS BREVILATO\",\"M\",\"1984-01-02\",\"RUA DOUTOR \",\"434\",\"casa 01\",\"VILA MERITI\",\"DUQUE DE CAXIAS\",\"RJ\",\"25025-01\",\"(21) 3777-7638\",\"(21) 964734249\",\"fbrevilato@gmail.com\",\"5\",\"5\",\"21\",\"1\",\"1\",\"1\",\"1\",\"1\",\"8\",\"2016-04-24 15:32:37\")','2016-04-24 15:32:37','inscricao','Inserir');
INSERT INTO `logs` VALUES (22,21,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"21\",\"REALIZADO CADASTRO DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B></B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-24 15:32:38\",\"A VALIDAR\")','2016-04-24 15:32:38','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (23,21,'update inscricao set rg=\"3454555\",data_expedicao=\"2008-10-15\", nome=\"FABIANA VASCONCELOS DE FARIAS BREVILATO\",sexo=\"M\",\r\n                      nascimento=\"1984-01-02\", endereco=\"RUA DOUTOR \",numero=\"434\",complemento=\"casa 01\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS\",uf=\"RJ\",cep=\"25025-01\",telefone=\"(21) 3777-7638\",celular=\"(21) 964734249\",email=\"fbrevilato@gmail.com\",idcargos=\"5\",idexperiencia=\"5\",idusuarios=\"21\",experiencia_adm_publica=\"1\",participacao_projetos=\"1\",curso_extensao=\"0\",curso_aperfeicoamento=\"1\",inf_basica=\"1\",pontos=\"7.75\" \r\n\t\t\twhere idinscricao=\"2\"','2016-04-24 16:08:15','inscricao','Alterar');
INSERT INTO `logs` VALUES (24,21,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"21\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B>39607208749</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-24 16:08:15\",\"A VALIDAR\")','2016-04-24 16:08:15','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (25,21,'update inscricao set rg=\"3454555\",data_expedicao=\"2008-10-15\", nome=\"FABIANA VASCONCELOS DE FARIAS BREVILATO\",sexo=\"M\",\r\n                      nascimento=\"1984-01-02\", endereco=\"RUA DOUTOR \",numero=\"434\",complemento=\"casa 01\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS\",uf=\"RJ\",cep=\"25025-01\",telefone=\"(21) 3777-7638\",celular=\"(21) 964734249\",email=\"fbrevilato@gmail.com\",idcargos=\"5\",idexperiencia=\"5\",idusuarios=\"21\",experiencia_adm_publica=\"0\",participacao_projetos=\"1\",curso_extensao=\"0\",curso_aperfeicoamento=\"1\",inf_basica=\"1\",pontos=\"5.75\" \r\n\t\t\twhere idinscricao=\"2\"','2016-04-24 16:08:51','inscricao','Alterar');
INSERT INTO `logs` VALUES (26,21,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"21\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B>39607208749</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-24 16:08:51\",\"A VALIDAR\")','2016-04-24 16:08:51','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (27,21,'update inscricao set rg=\"3454555\",data_expedicao=\"2008-10-15\", nome=\"FABIANA VASCONCELOS DE FARIAS BREVILATO\",sexo=\"M\",\r\n                      nascimento=\"1984-01-02\", endereco=\"RUA DOUTOR \",numero=\"434\",complemento=\"casa 01\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS\",uf=\"RJ\",cep=\"25025-01\",telefone=\"(21) 3777-7638\",celular=\"(21) 964734249\",email=\"fbrevilato@gmail.com\",idcargos=\"5\",idexperiencia=\"5\",idusuarios=\"21\",experiencia_adm_publica=\"1\",participacao_projetos=\"1\",curso_extensao=\"1\",curso_aperfeicoamento=\"1\",inf_basica=\"1\",pontos=\"8\" \r\n\t\t\twhere idinscricao=\"2\"','2016-04-24 16:09:14','inscricao','Alterar');
INSERT INTO `logs` VALUES (28,21,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"21\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B>39607208749</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-24 16:09:14\",\"A VALIDAR\")','2016-04-24 16:09:14','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (29,21,'update inscricao set rg=\"3454555\",data_expedicao=\"2008-10-15\", nome=\"FABIANA VASCONCELOS DE FARIAS BREVILATO\",sexo=\"M\",\r\n                      nascimento=\"1984-01-02\", endereco=\"RUA DOUTOR \",numero=\"434\",complemento=\"casa 01\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS\",uf=\"RJ\",cep=\"25025-01\",telefone=\"(21) 3777-7638\",celular=\"(21) 964734249\",email=\"fbrevilato@gmail.com\",idcargos=\"5\",idexperiencia=\"5\",idusuarios=\"21\",experiencia_adm_publica=\"1\",participacao_projetos=\"1\",curso_extensao=\"1\",curso_aperfeicoamento=\"1\",inf_basica=\"1\",pontos=\"8\" \r\n\t\t\twhere idinscricao=\"2\"','2016-04-24 16:09:39','inscricao','Alterar');
INSERT INTO `logs` VALUES (30,21,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"21\",\"REALIZADA A ATUALIZA«√O DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B>39607208749</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-24 16:09:39\",\"A VALIDAR\")','2016-04-24 16:09:40','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (31,23,'insert into inscricao(rg, data_expedicao,nome,sexo,nascimento,endereco,numero,complemento, bairro, municipio, uf, cep,telefone,celular,email,idcargos, idexperiencia, idusuarios, experiencia_adm_publica,participacao_projetos,curso_extensao,curso_aperfeicoamento,inf_basica,pontos,dtreg) values(\"247268436\",\"2016-02-16\",\"ADRIANO DA SILVA CUNHA\",\"M\",\"1988-10-12\",\"RUA FREI FIDELIS\",\"26\",\"CASA 01\",\"JARDIM 25 DE AGOSTO\",\"DUQUE DE CAXIAS\",\"RJ\",\"25011060\",\"(21) 2674-0745\",\"(21) 96694-9491\",\"ADRIX21RJ@YAHOO.COM.BR\",\"6\",\"1\",\"23\",\"1\",\"1\",\"1\",\"1\",\"1\",\"4\",\"2016-04-25 10:01:28\")','2016-04-25 10:01:28','inscricao','Inserir');
INSERT INTO `logs` VALUES (32,23,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \n            values(\"23\",\"REALIZADO CADASTRO DO CANDIDATO <B>ADRIANO DA SILVA CUNHA</B> PELO USU·RIO <B></B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-25 10:01:28\",\"A VALIDAR\")','2016-04-25 10:01:28','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (33,23,'update usuarios set senha=\"MTIzNDU2\" where idusuarios=\"23\"','2016-04-25 10:03:09','usuarios','alterar senha');
INSERT INTO `logs` VALUES (34,23,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \n            values(\"23\",\"ATUALIZAÁ„O DOS DADOS DO USU·RIO  PELO USU·RIO <B></B>\",\"ATUALIZAÁ„O DE SENHA\",\"2016-04-25 10:03:09\",\"A VALIDAR\")','2016-04-25 10:03:09','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (35,23,'update usuarios set senha=\"MTIzNDU2\" where idusuarios=\"23\"','2016-04-25 10:03:39','usuarios','alterar senha');
INSERT INTO `logs` VALUES (36,23,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \n            values(\"23\",\"ATUALIZAÁ„O DOS DADOS DO USU·RIO  PELO USU·RIO <B></B>\",\"ATUALIZAÁ„O DE SENHA\",\"2016-04-25 10:03:39\",\"A VALIDAR\")','2016-04-25 10:03:39','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (37,24,'insert into inscricao(rg, data_expedicao,nome,sexo,nascimento,endereco,numero,complemento, bairro, municipio, uf, cep,telefone,celular,email,idcargos, idexperiencia, idusuarios, experiencia_adm_publica,participacao_projetos,curso_extensao,curso_aperfeicoamento,inf_basica,pontos,dtreg) values(\"475553\",\"2012-04-12\",\"CRISTINA REIS\",\"F\",\"1966-03-06\",\"RUA S√ÉO JOAQUIM\",\"17\",\"CASA 1\",\"VILA S√ÉO LUIS\",\"DUQUE DE CAXIAS\",\"RJ\",\"25086070\",\"(21) 9640-86414\",\"(21) 96408-6414\",\"CRISREISEDUCACAO@GMAIL.COM\",\"6\",\"5\",\"24\",\"1\",\"1\",\"1\",\"1\",\"1\",\"8\",\"2016-04-25 10:13:53\")','2016-04-25 10:13:53','inscricao','Inserir');
INSERT INTO `logs` VALUES (38,24,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \n            values(\"24\",\"REALIZADO CADASTRO DO CANDIDATO <B>CRISTINA REIS</B> PELO USU·RIO <B></B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-25 10:13:53\",\"A VALIDAR\")','2016-04-25 10:13:53','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (39,24,'update inscricao set rg=\"475553\",data_expedicao=\"2012-04-12\", nome=\"CRISTINA REIS\",sexo=\"F\",\n                      nascimento=\"1966-03-06\", endereco=\"RUA S√ÉO JOAQUIM\",numero=\"17\",complemento=\"CASA 1\",bairro=\"VILA S√ÉO LUIS\",municipio=\"DUQUE DE CAXIAS\",uf=\"RJ\",cep=\"25086070\",telefone=\"(21) 9640-86414\",celular=\"(21) 96408-6414\",email=\"CRISREISEDUCACAO@GMAIL.COM\",idcargos=\"6\",idexperiencia=\"5\",idusuarios=\"24\",experiencia_adm_publica=\"1\",participacao_projetos=\"1\",curso_extensao=\"1\",curso_aperfeicoamento=\"1\",inf_basica=\"1\",pontos=\"8\" \n\t\t\twhere idinscricao=\"4\"','2016-04-25 10:23:10','inscricao','Alterar');
INSERT INTO `logs` VALUES (40,24,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \n            values(\"24\",\"REALIZADA A ATUALIZAÁ„O DO CANDIDATO <B>CRISTINA REIS</B> PELO USU·RIO <B>07058525714</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-25 10:23:10\",\"A VALIDAR\")','2016-04-25 10:23:10','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (41,25,'insert into inscricao(rg, data_expedicao,nome,sexo,nascimento,endereco,numero,complemento, bairro, municipio, uf, cep,telefone,celular,email,idcargos, idexperiencia, idusuarios, experiencia_adm_publica,participacao_projetos,curso_extensao,curso_aperfeicoamento,inf_basica,pontos,dtreg) values(\"1990104775\",\"1991-01-25\",\"MONIQUE DORNELLES\",\"F\",\"1970-07-08\",\"RUA SIRACUSA\",\"179\",\"AP 302\",\"IRAJ√Å\",\"RIO DE JANEIRO\",\"RJ\",\"21361460\",\"(21) 9997-76000\",\"(21) 99977-6000\",\"M.DORNELLES@YAHOO.COM.BR\",\"6\",\"4\",\"25\",\"1\",\"1\",\"0\",\"1\",\"0\",\"6.5\",\"2016-04-25 14:55:12\")','2016-04-25 14:55:12','inscricao','Inserir');
INSERT INTO `logs` VALUES (42,25,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \n            values(\"25\",\"REALIZADO CADASTRO DO CANDIDATO <B>MONIQUE DORNELLES</B> PELO USU·RIO <B></B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-25 14:55:12\",\"A VALIDAR\")','2016-04-25 14:55:12','Ocorrencias','Inserir');

CREATE TABLE `ocorrencias` (
  `idocorrencias` int(11) NOT NULL AUTO_INCREMENT,
  `idusuarios` int(11) DEFAULT NULL,
  `descricao` longtext,
  `funcionalidade` varchar(70) DEFAULT NULL,
  `data_hora` timestamp NULL DEFAULT NULL,
  `situacao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idocorrencias`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO `ocorrencias` VALUES (1,17,'REALIZADO CADASTRO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B></B>','CADASTRO DE NOVO CANDIDATO','2016-04-19 12:11:18','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (2,17,'ATUALIZA«√O DOS DADOS DO USU¡RIO  PELO USU¡RIO <B></B>','ATUALIZA«√O DE SENHA','2016-04-19 16:23:41','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (3,17,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRAA</B> PELO USU¡RIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 10:52:42','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (4,17,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 10:53:53','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (5,17,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 11:01:41','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (6,17,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 11:02:06','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (7,17,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 11:03:48','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (8,17,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU¡RIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 11:06:44','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (9,17,'REALIZADA A ATUALIZAÁ„O DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USU·RIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 13:55:36','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (10,21,'REALIZADO CADASTRO DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B></B>','CADASTRO DE NOVO CANDIDATO','2016-04-24 15:32:38','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (11,21,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B>39607208749</B>','CADASTRO DE NOVO CANDIDATO','2016-04-24 16:08:15','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (12,21,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B>39607208749</B>','CADASTRO DE NOVO CANDIDATO','2016-04-24 16:08:51','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (13,21,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B>39607208749</B>','CADASTRO DE NOVO CANDIDATO','2016-04-24 16:09:14','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (14,21,'REALIZADA A ATUALIZA«√O DO CANDIDATO <B>FABIANA VASCONCELOS DE FARIAS BREVILATO</B> PELO USU¡RIO <B>39607208749</B>','CADASTRO DE NOVO CANDIDATO','2016-04-24 16:09:39','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (15,23,'REALIZADO CADASTRO DO CANDIDATO <B>ADRIANO DA SILVA CUNHA</B> PELO USU·RIO <B></B>','CADASTRO DE NOVO CANDIDATO','2016-04-25 10:01:28','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (16,23,'ATUALIZAÁ„O DOS DADOS DO USU·RIO  PELO USU·RIO <B></B>','ATUALIZAÁ„O DE SENHA','2016-04-25 10:03:09','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (17,23,'ATUALIZAÁ„O DOS DADOS DO USU·RIO  PELO USU·RIO <B></B>','ATUALIZAÁ„O DE SENHA','2016-04-25 10:03:39','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (18,24,'REALIZADO CADASTRO DO CANDIDATO <B>CRISTINA REIS</B> PELO USU·RIO <B></B>','CADASTRO DE NOVO CANDIDATO','2016-04-25 10:13:53','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (19,24,'REALIZADA A ATUALIZAÁ„O DO CANDIDATO <B>CRISTINA REIS</B> PELO USU·RIO <B>07058525714</B>','CADASTRO DE NOVO CANDIDATO','2016-04-25 10:23:10','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (20,25,'REALIZADO CADASTRO DO CANDIDATO <B>MONIQUE DORNELLES</B> PELO USU·RIO <B></B>','CADASTRO DE NOVO CANDIDATO','2016-04-25 14:55:12','A VALIDAR');

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) DEFAULT NULL,
  `dtreg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `perfil` VALUES (1,'PUBLICO','0000-00-00 00:00:00');
INSERT INTO `perfil` VALUES (2,'ADMINISTRADOR','2016-04-18 19:26:18');

CREATE TABLE `titulacao` (
  `idtitulacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) DEFAULT NULL,
  `pontos` double(10,2) DEFAULT NULL,
  `dtreg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idtitulacao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `titulacao` VALUES (1,'ESPECIALIZA«√O',0.25,'2016-04-19 16:33:40');
INSERT INTO `titulacao` VALUES (2,'MESTRADO',0.5,'2016-04-19 16:39:59');
INSERT INTO `titulacao` VALUES (3,'DOUTORADO',1,'2016-04-19 16:41:06');
INSERT INTO `titulacao` VALUES (4,'-----',0,'2016-04-19 16:41:32');
INSERT INTO `titulacao` VALUES (5,'teste',0,'2016-04-20 15:03:23');

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `dtreg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idperfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`),
  KEY `idperfil` (`idperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` VALUES (1,'09831133782','ZmFkb3JpYSFA','2016-04-19 09:29:02',2);
INSERT INTO `usuarios` VALUES (17,'09831133781','MTIzNDU2Nw==','2016-04-19 16:23:43',1);
INSERT INTO `usuarios` VALUES (21,'39607208749','MTIzNDU2','2016-04-24 15:32:37',1);
INSERT INTO `usuarios` VALUES (23,'13258785708','MTIzNDU2','2016-04-25 10:01:28',1);
INSERT INTO `usuarios` VALUES (24,'07058525714','MTIzNDU2','2016-04-25 10:13:53',1);
INSERT INTO `usuarios` VALUES (25,'00319564754','MTIzNDU2','2016-04-25 14:55:12',1);


ALTER TABLE `inscricao`
  ADD FOREIGN KEY (`idcargos`) REFERENCES `cargos` (`idcargos`),
  ADD FOREIGN KEY (`idexperiencia`) REFERENCES `experiencia` (`idexperiencia`),
  ADD FOREIGN KEY (`idusuarios`) REFERENCES `usuarios` (`idusuarios`);

ALTER TABLE `logs`
  ADD FOREIGN KEY (`idusuarios`) REFERENCES `usuarios` (`idusuarios`);

ALTER TABLE `ocorrencias`
  ADD FOREIGN KEY (`idusuarios`) REFERENCES `usuarios` (`idusuarios`);

ALTER TABLE `usuarios`
  ADD FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
