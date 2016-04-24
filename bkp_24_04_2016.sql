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
INSERT INTO `cargos` VALUES (2,'ANALISTA CONTÁBIL','44h','5800','Ensino Superior Completo em Contabilidade','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (3,'ANALISTA DE CONTRATOS','44h','5800','Ensino Superior Completo em Direito, com inscrição na OAB','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (4,'ANALISTA FINANCEIRO','44h','5800','Ensino Superior Completo em Administração ou Economia','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (5,'ANALISTA JURÍDICO','44h','5800','Ensino Superior Completo em Direito, com inscrição na OAB','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (6,'ASSESSOR I','44h','4000','Ensino Superior Completo','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (7,'ASSESSOR II','44h','2500','Diploma ou certificado de nível médio e/ou técnico.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (8,'AGENTE PATRIMONIAL','44h','2500','Diploma ou certificado de nível médio e/ou técnico. Com experiência comprovada.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (9,'GUARDIÃO DE PISCINA','10h','953,47','Ensino Médio Completo com curso de Guardião de Piscina - GMAR','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (10,'TÉCNICO DE INFORMÁTICA','44h','1265,5','Ensino Médio Técnico Completo em Informática','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (11,'INSTRUTOR DOCENTE I BIOLOGIA','h/a','14,89','Possuir curso superior e ter experiência comprovada na disciplina em que irá ministrar instrução.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (12,'INSTRUTOR DOCENTE I DE EDUCAÇÃO FÍSICA','h/a','14,89','Possuir curso superior e ter experiência comprovada na disciplina em que irá ministrar instrução.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (13,'INSTRUTOR DOCENTE I DE INFORMÁTICA','h/a','14,89','Possuir curso superior e ter experiência comprovada na disciplina em que irá ministrar instrução.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (14,'INSTRUTOR DOCENTE I EDUCAÇÃO FÍSICA PCD','h/a','14,89','Possuir diploma obtido em curso de Educação Física, oficialmente autorizado e reconhecido; ser regularmente registrado no Conselho Regional de Educação Física (Conforme termo das Lei 9696/98 –Anexo II), e ter experiência comprovada com atividades com crianças, jovens e adultos com deficiência intelectual ou intelectual e física.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (15,'INSTRUTOR DOCENTE I FÍSICA','h/a','14,89','Possuir curso superior e ter experiência comprovada na disciplina em que irá ministrar instrução.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (16,'INSTRUTOR DOCENTE I TEORIA MUSICAL','h/a','14,89','Possuir curso superior e ter experiência comprovada na disciplina em que irá ministrar instrução.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (17,'INSTRUTOR ESPECIALISTA CONFEITEIRO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (18,'INSTRUTOR ESPECIALISTA SISTEMAS ELETRÔNICOS DE SEGURANÇA','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (19,'INSTRUTOR ESPECIALISTA ALMOXARIFE','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (20,'INSTRUTOR ESPECIALISTA AUTOCAD','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (21,'INSTRUTOR ESPECIALISTA AUXILIAR ADMINISTRATIVO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (22,'INSTRUTOR ESPECIALISTA BANDA E FANFARRA: GUITARRA','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (23,'INSTRUTOR ESPECIALISTA BANDA E FANFARRA: TECLADO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (24,'INSTRUTOR ESPECIALISTA BANDA E FANFARRA: TUBA','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (25,'INSTRUTOR ESPECIALISTA BANDA E FANFARRA: VIOLÃO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (26,'INSTRUTOR ESPECIALISTA BARMAN','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (27,'INSTRUTOR ESPECIALISTA CANTO E CORAL','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (28,'INSTRUTOR ESPECIALISTA CFTV E AUTOMAÇÃO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (29,'INSTRUTOR ESPECIALISTA CONTROLE DE ARMAZENAMENTO E EXPEDIÇÃO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (30,'INSTRUTOR ESPECIALISTA COPA','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (31,'INSTRUTOR ESPECIALISTA CUTELARIA/CHAVEIRO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (32,'INSTRUTOR ESPECIALISTA DANÇA','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (33,'INSTRUTOR ESPECIALISTA DESIGNER DE CÍLIOS E SOBRANCELHAS','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (34,'INSTRUTOR ESPECIALISTA DESIGNER DE MÓVEIS / DESENHO DE MÓVEIS','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (35,'INSTRUTOR ESPECIALISTA ESTÉTICA','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (36,'INSTRUTOR ESPECIALISTA GARÇOM/CUMIN','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (37,'INSTRUTOR ESPECIALISTA INSTALAÇÃO DE DIVISÓRIA EM EUCATEX, MADEIRA PVC','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (38,'INSTRUTOR ESPECIALISTA LOCUTOR','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (39,'INSTRUTOR ESPECIALISTA MECÂNICA DE REFRIGERAÇÃO E CLIMATIZAÇÃO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (40,'INSTRUTOR ESPECIALISTA MONTAGEM DE MÓVEIS','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (41,'INSTRUTOR ESPECIALISTA PINTOR DE OBRAS','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (42,'INSTRUTOR ESPECIALISTA PROMOÇÃO DE VENDAS E VENDAS POR TELEMARKETING','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (43,'INSTRUTOR ESPECIALISTA REFORMADOR DE MÓVEIS','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (44,'INSTRUTOR ESPECIALISTA REVESTIMENTO CERÂMICO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (45,'INSTRUTOR ESPECIALISTA SERVIÇOS, ASSISTÊNCIA E AUXILIAR ADMINISTRATIVO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (46,'INSTRUTOR ESPECIALISTA TEATRO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (47,'INSTRUTOR ESPECIALISTA TELECOMUNICAÇÃO IRLA E CABISTA ORA','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (48,'INSTRUTOR ESPECIALISTA TELEMARKETING / TELEATENDIMENTO','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (49,'INSTRUTOR ESPECIALISTA TEORIA MUSICAL','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');
INSERT INTO `cargos` VALUES (50,'INSTRUTOR ESPECIALISTA WEB DESIGNER','h/a','11,9','Possuir o ensino médio, preferencialmente técnico ou superior e ter experiência comprovada na área, preferencialmente como instrutor ou professor em curso de FIC.','2016-04-24 14:01:29');

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
  `idtitulacao` int(11) DEFAULT NULL,
  `idusuarios` int(11) DEFAULT NULL,
  `participacao_projetos` int(11) DEFAULT NULL,
  `curso_extensao` int(11) DEFAULT NULL,
  `curso_aperfeicoamento` int(11) DEFAULT NULL,
  `inf_basica` int(11) DEFAULT NULL,
  `pontos` double(10,2) DEFAULT NULL,
  `dtreg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idinscricao`),
  KEY `idcargos` (`idcargos`),
  KEY `idexperiencia` (`idexperiencia`),
  KEY `idtitulacao` (`idtitulacao`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `inscricao` VALUES (1,'02043206007','2008-10-15','VINICIUS MARQUES DA SILVA FERREIRA','M','1983-01-02','RUA DOUTOR ',3411,'casa 015','VILA MERITI','DUQUE DE CAXIAS ','RJ','25025010','(21) 2673-15970','(21) 96694-0000','vinimars1@gmail.com',1,5,1,17,NULL,NULL,NULL,NULL,5.25,'2016-04-19 12:11:17');

CREATE TABLE `logs` (
  `idlogs` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idusuarios` int(11) DEFAULT NULL,
  `queryexecutada` longtext NOT NULL,
  `dtreg` timestamp NULL DEFAULT NULL,
  `nome_tabela` varchar(50) DEFAULT NULL,
  `acao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlogs`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO `logs` VALUES (1,17,'insert into inscricao(rg, data_expedicao,nome,sexo,nascimento,endereco,complemento, bairro, municipio, uf, cep,telefone,celular,email,idcargos, idexperiencia, idtitulacao,idusuarios, pontos,dtreg) values(\"0204320600\",\"2008-10-15\",\"VINICIUS MARQUES DA SILVA FERREIRA\",\"M\",\"1983-01-02\",\"rua doutor\",\"casa 01\",\"vila meriti\",\"DUQUE DE CAXIAS\",\"RJ\",\"25025010\",\"(21) 2673-1597\",\"(21) 96694-9491\",\"vinimars1@gmail.com\",\"1\",\"5\",\"3\",\"17\",\"5.5\",\"2016-04-19 12:11:17\")','2016-04-19 12:11:17','inscricao','Inserir');
INSERT INTO `logs` VALUES (2,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADO CADASTRO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B></B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-19 12:11:18\",\"A VALIDAR\")','2016-04-19 12:11:18','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (3,17,'update usuarios set senha=\"MTIzNDU2Nw==\" where idusuarios=\"17\"','2016-04-19 16:23:41','usuarios','alterar senha');
INSERT INTO `logs` VALUES (4,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"ATUALIZAÇÃO DOS DADOS DO USUÁRIO  PELO USUÁRIO <B></B>\",\"ATUALIZAÇÃO DE SENHA\",\"2016-04-19 16:23:41\",\"A VALIDAR\")','2016-04-19 16:23:41','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (5,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRAA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",municipio=\"DUQUE DE CAXIAS X\",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-1597\",celular=\"(21) 96694-9491\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 10:52:42','inscricao','Alterar');
INSERT INTO `logs` VALUES (6,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRAA</B> PELO USUÁRIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 10:52:42\",\"A VALIDAR\")','2016-04-20 10:52:42','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (7,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 10:53:53','inscricao','Alterar');
INSERT INTO `logs` VALUES (8,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 10:53:53\",\"A VALIDAR\")','2016-04-20 10:53:53','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (9,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"qq\",municipio=\"DUQUE DE CAXIAS a\",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 11:01:41','inscricao','Alterar');
INSERT INTO `logs` VALUES (10,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 11:01:41\",\"A VALIDAR\")','2016-04-20 11:01:41','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (11,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 11:02:06','inscricao','Alterar');
INSERT INTO `logs` VALUES (12,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 11:02:06\",\"A VALIDAR\")','2016-04-20 11:02:06','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (13,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 11:03:48','inscricao','Alterar');
INSERT INTO `logs` VALUES (14,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 11:03:48\",\"A VALIDAR\")','2016-04-20 11:03:48','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (15,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\r\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\",pontos=\"5.25\" \r\n\t\t\twhere idinscricao=\"1\"','2016-04-20 11:06:44','inscricao','Alterar');
INSERT INTO `logs` VALUES (16,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\r\n            values(\"17\",\"REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 11:06:44\",\"A VALIDAR\")','2016-04-20 11:06:44','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (17,17,'update inscricao set rg=\"02043206007\",data_expedicao=\"2008-10-15\", nome=\"VINICIUS MARQUES DA SILVA FERREIRA\",sexo=\"M\",\n                      nascimento=\"1983-01-02\", endereco=\"RUA DOUTOR \",numero=\"3411\",complemento=\"casa 015\",bairro=\"VILA MERITI\",municipio=\"DUQUE DE CAXIAS \",uf=\"RJ\",cep=\"25025010\",telefone=\"(21) 2673-15970\",celular=\"(21) 96694-0000\",email=\"vinimars1@gmail.com\",idcargos=\"1\",idexperiencia=\"5\",idtitulacao=\"1\",idusuarios=\"17\",pontos=\"5.25\" \n\t\t\twhere idinscricao=\"1\"','2016-04-20 13:55:36','inscricao','Alterar');
INSERT INTO `logs` VALUES (18,17,'insert into ocorrencias(idusuarios,descricao,funcionalidade,data_hora,situacao) \r\n            values(\"17\",\"REALIZADA A ATUALIZAçãO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUáRIO <B>09831133781</B>\",\"CADASTRO DE NOVO CANDIDATO\",\"2016-04-20 13:55:36\",\"A VALIDAR\")','2016-04-20 13:55:36','Ocorrencias','Inserir');
INSERT INTO `logs` VALUES (19,1,'insert into cargos(descricao,ch,dtreg) values(\"teste\",\"40h\",\"2016-04-20 14:52:20\")','2016-04-20 14:52:20','eventos','Inserir');
INSERT INTO `logs` VALUES (20,1,'insert into titulacao(descricao,pontos,dtreg) values(\"teste\",\"\",\"2016-04-20 15:03:23\")','2016-04-20 15:03:23','titulacao','Inserir');

CREATE TABLE `ocorrencias` (
  `idocorrencias` int(11) NOT NULL AUTO_INCREMENT,
  `idusuarios` int(11) DEFAULT NULL,
  `descricao` longtext,
  `funcionalidade` varchar(70) DEFAULT NULL,
  `data_hora` timestamp NULL DEFAULT NULL,
  `situacao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idocorrencias`),
  KEY `idusuarios` (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `ocorrencias` VALUES (1,17,'REALIZADO CADASTRO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B></B>','CADASTRO DE NOVO CANDIDATO','2016-04-19 12:11:18','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (2,17,'ATUALIZAÇÃO DOS DADOS DO USUÁRIO  PELO USUÁRIO <B></B>','ATUALIZAÇÃO DE SENHA','2016-04-19 16:23:41','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (3,17,'REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRAA</B> PELO USUÁRIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 10:52:42','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (4,17,'REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 10:53:53','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (5,17,'REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 11:01:41','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (6,17,'REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 11:02:06','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (7,17,'REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 11:03:48','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (8,17,'REALIZADA A ATUALIZAÇÃO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUÁRIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 11:06:44','A VALIDAR');
INSERT INTO `ocorrencias` VALUES (9,17,'REALIZADA A ATUALIZAçãO DO CANDIDATO <B>VINICIUS MARQUES DA SILVA FERREIRA</B> PELO USUáRIO <B>09831133781</B>','CADASTRO DE NOVO CANDIDATO','2016-04-20 13:55:36','A VALIDAR');

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

INSERT INTO `titulacao` VALUES (1,'ESPECIALIZAÇÃO',0.25,'2016-04-19 16:33:40');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` VALUES (1,'09831133782','ZmFkb3JpYSFA','2016-04-19 09:29:02',2);
INSERT INTO `usuarios` VALUES (17,'09831133781','MTIzNDU2Nw==','2016-04-19 16:23:43',1);


ALTER TABLE `inscricao`
  ADD FOREIGN KEY (`idcargos`) REFERENCES `cargos` (`idcargos`),
  ADD FOREIGN KEY (`idexperiencia`) REFERENCES `experiencia` (`idexperiencia`),
  ADD FOREIGN KEY (`idtitulacao`) REFERENCES `titulacao` (`idtitulacao`),
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
