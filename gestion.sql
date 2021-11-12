/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.13-MariaDB : Database - gestionprofesores
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gestionprofesores` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `gestionprofesores`;

/*Table structure for table `carrera` */

DROP TABLE IF EXISTS `carrera`;

CREATE TABLE `carrera` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `resolucion` varchar(45) DEFAULT NULL,
  `horaCatedras` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `carrera` */

insert  into `carrera`(`codigo`,`nombre`,`resolucion`,`horaCatedras`) values 
(1000,'Tecnicatura Superior en Desarrollo de Software',NULL,NULL),
(2000,'Tecnicatura Superior en Computacion y Redes',NULL,NULL),
(3000,'Tecnicatura Superior en Diseño Grafico',NULL,NULL),
(4000,'Tecnicatura Superior en Diseño Multimedial',NULL,NULL),
(5000,'Tecnicatura Superior en Fotografia Creativa y Diseño Fotografico',NULL,NULL),
(6000,'Tecnicatura Superior en Indumentaria, Textil y Accesorios',NULL,NULL);

/*Table structure for table `documentacion` */

DROP TABLE IF EXISTS `documentacion`;

CREATE TABLE `documentacion` (
  `dni` bigint(20) NOT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `certBuenaConducta` mediumblob DEFAULT NULL,
  `aptitudPsicoFisica` mediumblob DEFAULT NULL,
  `tituloBase` mediumblob DEFAULT NULL,
  `decJuradaCargos` mediumblob DEFAULT NULL,
  `postulantes_dni6` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`dni`),
  KEY `fk_postulantes_dni2_idx` (`postulantes_dni6`),
  CONSTRAINT `fk_postulantes_dni2` FOREIGN KEY (`postulantes_dni6`) REFERENCES `postulantes` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `documentacion` */

/*Table structure for table `localidades` */

DROP TABLE IF EXISTS `localidades`;

CREATE TABLE `localidades` (
  `codPostal` int(11) NOT NULL,
  `localidad` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codPostal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `localidades` */

insert  into `localidades`(`codPostal`,`localidad`) values 
(5500,'CAPITAL\r'),
(5501,'GODOY CRUZ\r'),
(5507,'LUJAN DE CUYO\r'),
(5511,'MAIPU\r'),
(5519,'GUAYMALLEN\r'),
(5533,'LAVALLE\r'),
(5539,'LAS HERAS\r'),
(5560,'TUNUYAN\r'),
(5561,'TUPUNGATO\r'),
(5569,'SAN CARLOS\r'),
(5570,'SAN MARTIN\r'),
(5577,'RIVADAVIA\r'),
(5582,'JUNIN\r'),
(5590,'LA PAZ\r'),
(5596,'SANTA ROSA\r'),
(5600,'SAN RAFAEL\r'),
(5613,'MALARGUE\r'),
(5620,'GRAL. ALVEAR\r');

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `anual` varchar(45) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `materia` */

insert  into `materia`(`codigo`,`nombre`,`anual`,`anio`) values 
(1100,'Programacion I','Anual',1),
(1101,'Arquitectura de Computadoras','Anual',1),
(1102,'Requerimientos de Software','Cuatrimestral',1),
(1103,'Algebra','Cuatrimestral',1),
(1104,'Ingles Tecnico I','Anual',1),
(1105,'Comprension y Produccion de Textos','Anual',1),
(1106,'Logica Computacional','Anual',1),
(1107,'Problematica Sociocultural y del Trabajo','Anual',1),
(1108,'Sistemas Administrativos Aplicados','Anual',1),
(1109,'Practica Profesionalizante I','Anual',1),
(1200,'Programacion II','Anual',2),
(1201,'Comunicaciones y Redes','Anual',2),
(1202,'Analisis Matematico','Cuatrimestral',2),
(1203,'Ingles Tecnico II','Anual',2),
(1204,'Modelado De Software','Anual',2),
(1205,'Sistemas Operativos','Anual',2),
(1206,'Matematica Discreta','Cuatrimestral',2),
(1207,'Practica Profesionalizante II','Anual',2),
(1208,'Bases de Datos I','Anual',2),
(1300,'Programacion III','Anual',3),
(1301,'Arquitectura y Diseño de Interfaces','Anual',3),
(1302,'Auditoria y Calidad de Sistemas','Anual',3),
(1303,'Legislacion Informatica','Cuatrimestral',3),
(1304,'Ingles Tecnico III','Anual',3),
(1305,'Bases de Datos II','Anual',3),
(1306,'Practica Profesionalizante III','Anual',3),
(1307,'Etica Profesional','Anual',3),
(1308,'Seguridad Informatica','Cuatrimestral',3),
(1309,'Probabilidad y Estadistica','Cuatrimestral',3),
(1310,'Gestion de Proyectos de Software','Anual',3),
(2100,'Ingles Tecnico I','',1),
(2101,'Matematica I','',1),
(2102,'Logica Computacional','',1),
(2103,'Arquitectura de Computadoras','',1),
(2104,'Comprension y Produccion de Textos','',1),
(2105,'Problematica Sociocultural y del Trabajo','',1),
(2106,'Sistemas Operativos I','',1),
(2107,'Fundamentos de Electronica','',1),
(2108,'Electronica Aplicada','',1),
(2109,'Tecnologia de la Informacion','',1),
(2200,'Ingles Tecnico II','',2),
(2201,'Soporte de Infraestructura I','',2),
(2202,'Sistemas Administrativos Aplicados','',2),
(2203,'Sistemas Operativos II','',2),
(2204,'Comunicaciones y Redes','',2),
(2205,'Redes Aplicadas I','',2),
(2206,'Matematica II','',2),
(2207,'Etica Profesional','',2),
(2208,'Fundamentos de Programacion','',2),
(2300,'Gestion de Bases de Datos','',3),
(2301,'Programacion de Scripts y Embebidos','',3),
(2302,'Legislacion Informatica','',3),
(2303,'Gestion de Emprendimientos','',3),
(2304,'Seguridad en Redes','',3),
(2305,'Redes Aplicadas II','',3),
(2306,'Estadistica Aplicada','',3),
(2307,'Soporte de Infraestructura II','',3),
(2308,'Sistemas de Telefonia y Video Seguridad','',3);

/*Table structure for table `materia_carrera` */

DROP TABLE IF EXISTS `materia_carrera`;

CREATE TABLE `materia_carrera` (
  `codigo` int(11) NOT NULL,
  `carrera_codigo3` int(11) NOT NULL,
  `materia_codigo3` int(11) NOT NULL,
  PRIMARY KEY (`codigo`,`carrera_codigo3`,`materia_codigo3`),
  KEY `fk_materia_carrera_carrera1_idx` (`carrera_codigo3`),
  KEY `fk_materia_carrera_materia1_idx` (`materia_codigo3`),
  CONSTRAINT `fk_materia_carrera_carrera1` FOREIGN KEY (`carrera_codigo3`) REFERENCES `carrera` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_materia_carrera_materia1` FOREIGN KEY (`materia_codigo3`) REFERENCES `materia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `materia_carrera` */

insert  into `materia_carrera`(`codigo`,`carrera_codigo3`,`materia_codigo3`) values 
(0,1000,1100),
(0,1000,1101),
(0,1000,1102),
(0,1000,1103),
(0,1000,1104),
(0,1000,1105),
(0,1000,1106),
(0,1000,1107),
(0,1000,1108),
(0,1000,1109),
(0,1000,1200),
(0,1000,1201),
(0,1000,1202),
(0,1000,1203),
(0,1000,1204),
(0,1000,1205),
(0,1000,1207),
(0,1000,1300),
(0,1000,1301),
(0,1000,1302),
(0,1000,1303),
(0,1000,1304),
(0,1000,1305),
(0,1000,1306),
(0,1000,1307),
(0,1000,1308),
(0,1000,1309),
(0,1000,1310),
(0,2000,2100),
(0,2000,2101),
(0,2000,2102),
(0,2000,2103),
(0,2000,2104),
(0,2000,2105),
(0,2000,2106),
(0,2000,2107),
(0,2000,2108),
(0,2000,2109),
(0,2000,2200),
(0,2000,2201),
(0,2000,2202),
(0,2000,2203),
(0,2000,2204),
(0,2000,2205),
(0,2000,2206),
(0,2000,2207),
(0,2000,2208),
(0,2000,2300),
(0,2000,2301),
(0,2000,2302),
(0,2000,2303),
(0,2000,2304),
(0,2000,2305),
(0,2000,2306),
(0,2000,2307),
(0,2000,2308);

/*Table structure for table `odmd` */

DROP TABLE IF EXISTS `odmd`;

CREATE TABLE `odmd` (
  `codigo` int(11) NOT NULL,
  `fechaModificacion` date DEFAULT NULL,
  `jurado` varchar(80) DEFAULT NULL,
  `odmp_codigo` int(11) NOT NULL,
  `odmp_postulantes_dni4` bigint(20) NOT NULL,
  `odmp_carrera_codigo6` int(11) NOT NULL,
  `odmp_materia_codigo6` int(11) NOT NULL,
  `odmp_ofrecimientos_nroOfrecimiento` int(11) NOT NULL,
  `odmp_ofrecimientos_sede_codigo4` int(11) NOT NULL,
  `odmp_ofrecimientos_carrera_codigo5` int(11) NOT NULL,
  `odmp_ofrecimientos_materia_codigo5` int(11) NOT NULL,
  PRIMARY KEY (`codigo`,`odmp_codigo`,`odmp_postulantes_dni4`,`odmp_carrera_codigo6`,`odmp_materia_codigo6`,`odmp_ofrecimientos_nroOfrecimiento`,`odmp_ofrecimientos_sede_codigo4`,`odmp_ofrecimientos_carrera_codigo5`,`odmp_ofrecimientos_materia_codigo5`),
  KEY `fk_odmd_odmp1_idx` (`odmp_codigo`,`odmp_postulantes_dni4`,`odmp_carrera_codigo6`,`odmp_materia_codigo6`,`odmp_ofrecimientos_nroOfrecimiento`,`odmp_ofrecimientos_sede_codigo4`,`odmp_ofrecimientos_carrera_codigo5`,`odmp_ofrecimientos_materia_codigo5`),
  CONSTRAINT `fk_odmd_odmp1` FOREIGN KEY (`odmp_codigo`, `odmp_postulantes_dni4`, `odmp_carrera_codigo6`, `odmp_materia_codigo6`, `odmp_ofrecimientos_nroOfrecimiento`, `odmp_ofrecimientos_sede_codigo4`, `odmp_ofrecimientos_carrera_codigo5`, `odmp_ofrecimientos_materia_codigo5`) REFERENCES `odmp` (`codigo`, `postulantes_dni4`, `carrera_codigo6`, `materia_codigo6`, `ofrecimientos_nroOfrecimiento`, `ofrecimientos_sede_codigo4`, `ofrecimientos_carrera_codigo5`, `ofrecimientos_materia_codigo5`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `odmd` */

/*Table structure for table `odmp` */

DROP TABLE IF EXISTS `odmp`;

CREATE TABLE `odmp` (
  `codigo` int(11) NOT NULL,
  `postulantes_dni4` bigint(20) NOT NULL,
  `carrera_codigo6` int(11) NOT NULL,
  `materia_codigo6` int(11) NOT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `ofrecimientos_nroOfrecimiento` int(11) NOT NULL,
  `ofrecimientos_sede_codigo4` int(11) NOT NULL,
  `ofrecimientos_carrera_codigo5` int(11) NOT NULL,
  `ofrecimientos_materia_codigo5` int(11) NOT NULL,
  PRIMARY KEY (`codigo`,`postulantes_dni4`,`carrera_codigo6`,`materia_codigo6`,`ofrecimientos_nroOfrecimiento`,`ofrecimientos_sede_codigo4`,`ofrecimientos_carrera_codigo5`,`ofrecimientos_materia_codigo5`),
  KEY `fk_odmp_postulantes1_idx` (`postulantes_dni4`),
  KEY `fk_odmp_carrera1_idx` (`carrera_codigo6`),
  KEY `fk_odmp_materia1_idx` (`materia_codigo6`),
  KEY `fk_odmp_ofrecimientos1_idx` (`ofrecimientos_nroOfrecimiento`,`ofrecimientos_sede_codigo4`,`ofrecimientos_carrera_codigo5`,`ofrecimientos_materia_codigo5`),
  CONSTRAINT `fk_odmp_carrera1` FOREIGN KEY (`carrera_codigo6`) REFERENCES `carrera` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_odmp_materia1` FOREIGN KEY (`materia_codigo6`) REFERENCES `materia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_odmp_ofrecimientos1` FOREIGN KEY (`ofrecimientos_nroOfrecimiento`, `ofrecimientos_sede_codigo4`, `ofrecimientos_carrera_codigo5`, `ofrecimientos_materia_codigo5`) REFERENCES `ofrecimientos` (`nroOfrecimiento`, `sede_codigo4`, `carrera_codigo5`, `materia_codigo5`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_odmp_postulantes1` FOREIGN KEY (`postulantes_dni4`) REFERENCES `postulantes` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `odmp` */

/*Table structure for table `ofrecimientos` */

DROP TABLE IF EXISTS `ofrecimientos`;

CREATE TABLE `ofrecimientos` (
  `nroOfrecimiento` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `dni` bigint(20) DEFAULT NULL,
  `aceptado` varchar(45) DEFAULT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  `postulantes_dni3` bigint(20) NOT NULL,
  `sede_codigo4` int(11) NOT NULL,
  `carrera_codigo5` int(11) NOT NULL,
  `materia_codigo5` int(11) NOT NULL,
  PRIMARY KEY (`nroOfrecimiento`,`sede_codigo4`,`carrera_codigo5`,`materia_codigo5`,`postulantes_dni3`),
  KEY `fk_postulantes_dni_idx` (`postulantes_dni3`),
  KEY `fk_ofrecimientos_sede1_idx` (`sede_codigo4`),
  KEY `fk_ofrecimientos_carrera1_idx` (`carrera_codigo5`),
  KEY `fk_ofrecimientos_materia1_idx` (`materia_codigo5`),
  CONSTRAINT `fk_ofrecimientos_carrera1` FOREIGN KEY (`carrera_codigo5`) REFERENCES `carrera` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ofrecimientos_materia1` FOREIGN KEY (`materia_codigo5`) REFERENCES `materia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ofrecimientos_sede1` FOREIGN KEY (`sede_codigo4`) REFERENCES `sede` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_postulantes_dni1` FOREIGN KEY (`postulantes_dni3`) REFERENCES `postulantes` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ofrecimientos` */

/*Table structure for table `postulantes` */

DROP TABLE IF EXISTS `postulantes`;

CREATE TABLE `postulantes` (
  `dni` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `tel_fijo` varchar(20) DEFAULT NULL,
  `fechaInscripcion` date DEFAULT NULL,
  `nroInscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `materia_codigo4` int(11) NOT NULL,
  `carrera_codigo4` int(11) NOT NULL,
  PRIMARY KEY (`dni`,`materia_codigo4`,`carrera_codigo4`),
  KEY `fk_postulantes_materia1_idx` (`materia_codigo4`),
  KEY `fk_postulantes_carrera1_idx` (`carrera_codigo4`),
  KEY `nroInscripcion` (`nroInscripcion`),
  CONSTRAINT `fk_postulantes_carrera1` FOREIGN KEY (`carrera_codigo4`) REFERENCES `carrera` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_postulantes_materia1` FOREIGN KEY (`materia_codigo4`) REFERENCES `materia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

/*Data for the table `postulantes` */

insert  into `postulantes`(`dni`,`nombre`,`apellido`,`email`,`celular`,`tel_fijo`,`fechaInscripcion`,`nroInscripcion`,`materia_codigo4`,`carrera_codigo4`) values 
(42913695,'Agustin','Videla','agustinvidela835@gmail.com','2612634082','No especificado','2021-11-09',72,1200,1000);

/*Table structure for table `profesores` */

DROP TABLE IF EXISTS `profesores`;

CREATE TABLE `profesores` (
  `dni` bigint(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `tel_fijo` varchar(45) DEFAULT NULL,
  `domicilio` varchar(80) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `estadoCivil` varchar(45) DEFAULT NULL,
  `hijos` varchar(45) DEFAULT NULL,
  `fechaIngreso` date DEFAULT NULL,
  `activo(si-no)` varchar(45) DEFAULT NULL,
  `postulantes_dni2` bigint(20) DEFAULT NULL,
  `titulo_dni` bigint(20) NOT NULL,
  `localidades_codPostal2` int(11) NOT NULL,
  PRIMARY KEY (`dni`,`titulo_dni`,`localidades_codPostal2`),
  KEY `fk_postulantes_dni_idx` (`postulantes_dni2`),
  KEY `fk_profesores_titulo1_idx` (`titulo_dni`),
  KEY `fk_profesores_localidades1_idx` (`localidades_codPostal2`),
  CONSTRAINT `fk_postulantes_dni` FOREIGN KEY (`postulantes_dni2`) REFERENCES `postulantes` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesores_localidades1` FOREIGN KEY (`localidades_codPostal2`) REFERENCES `localidades` (`codPostal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesores_titulo1` FOREIGN KEY (`titulo_dni`) REFERENCES `titulo` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profesores` */

insert  into `profesores`(`dni`,`nombre`,`apellido`,`email`,`celular`,`tel_fijo`,`domicilio`,`fechaNacimiento`,`estadoCivil`,`hijos`,`fechaIngreso`,`activo(si-no)`,`postulantes_dni2`,`titulo_dni`,`localidades_codPostal2`) values 
(42913695,'Agustin','Videla','agustinvidela835@gmail.com','2612634082','No especificado','Fray Luis Beltran','2000-09-24','Soltero','No','2021-11-09',NULL,42913695,42913695,5511);

/*Table structure for table `profesores_carrera` */

DROP TABLE IF EXISTS `profesores_carrera`;

CREATE TABLE `profesores_carrera` (
  `codigo` int(11) NOT NULL,
  `profesores_dni3` bigint(20) NOT NULL,
  `carrera_codigo2` int(11) NOT NULL,
  PRIMARY KEY (`codigo`,`profesores_dni3`,`carrera_codigo2`),
  KEY `fk_profesores_carrera_profesores1_idx` (`profesores_dni3`),
  KEY `fk_profesores_carrera_carrera1_idx` (`carrera_codigo2`),
  CONSTRAINT `fk_profesores_carrera_carrera1` FOREIGN KEY (`carrera_codigo2`) REFERENCES `carrera` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesores_carrera_profesores1` FOREIGN KEY (`profesores_dni3`) REFERENCES `profesores` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profesores_carrera` */

insert  into `profesores_carrera`(`codigo`,`profesores_dni3`,`carrera_codigo2`) values 
(0,42913695,1000);

/*Table structure for table `profesores_materia` */

DROP TABLE IF EXISTS `profesores_materia`;

CREATE TABLE `profesores_materia` (
  `codigo` int(11) NOT NULL,
  `profesores_dni2` bigint(20) NOT NULL,
  `materia_codigo2` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`,`profesores_dni2`,`materia_codigo2`),
  KEY `fk_profesores_materia_profesores_idx` (`profesores_dni2`),
  KEY `fk_profesores_materia_materia1_idx` (`materia_codigo2`),
  CONSTRAINT `fk_profesores_materia_materia1` FOREIGN KEY (`materia_codigo2`) REFERENCES `materia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesores_materia_profesores` FOREIGN KEY (`profesores_dni2`) REFERENCES `profesores` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profesores_materia` */

insert  into `profesores_materia`(`codigo`,`profesores_dni2`,`materia_codigo2`,`estado`) values 
(0,42913695,1100,'Titular');

/*Table structure for table `profesores_sede` */

DROP TABLE IF EXISTS `profesores_sede`;

CREATE TABLE `profesores_sede` (
  `codigo` int(11) NOT NULL,
  `sede_codigo3` int(11) NOT NULL,
  `profesores_dni4` bigint(20) NOT NULL,
  PRIMARY KEY (`codigo`,`sede_codigo3`,`profesores_dni4`),
  KEY `fk_profesores_sede_sede1_idx` (`sede_codigo3`),
  KEY `fk_profesores_sede_profesores1_idx` (`profesores_dni4`),
  CONSTRAINT `fk_profesores_sede_profesores1` FOREIGN KEY (`profesores_dni4`) REFERENCES `profesores` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesores_sede_sede1` FOREIGN KEY (`sede_codigo3`) REFERENCES `sede` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profesores_sede` */

insert  into `profesores_sede`(`codigo`,`sede_codigo3`,`profesores_dni4`) values 
(0,4000,42913695);

/*Table structure for table `sede` */

DROP TABLE IF EXISTS `sede`;

CREATE TABLE `sede` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `domicilio` varchar(80) DEFAULT NULL,
  `localidades_codPostal` int(11) NOT NULL,
  PRIMARY KEY (`codigo`,`localidades_codPostal`),
  KEY `fk_sede_localidades1_idx` (`localidades_codPostal`),
  CONSTRAINT `fk_sede_localidades1` FOREIGN KEY (`localidades_codPostal`) REFERENCES `localidades` (`codPostal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sede` */

insert  into `sede`(`codigo`,`nombre`,`domicilio`,`localidades_codPostal`) values 
(1000,'Esc. Químicos Argentinos ','Rodríguez y Lamadrid',5500),
(2000,'Esc. Manuel Belgrano','Roque Sáenz Peña 1271',5501),
(3000,'Esc. Mario Casale','Dr. Moreno y Roca',5539),
(4000,'Esc. Isidro Maza','Ruta Provincial 50',5511);

/*Table structure for table `sede_carreras` */

DROP TABLE IF EXISTS `sede_carreras`;

CREATE TABLE `sede_carreras` (
  `codigo` int(11) NOT NULL,
  `sede_codigo2` int(11) NOT NULL,
  `carrera_codigo7` int(11) NOT NULL,
  PRIMARY KEY (`codigo`,`sede_codigo2`,`carrera_codigo7`),
  KEY `fk_sede_carreras_Sede1_idx` (`sede_codigo2`),
  KEY `fk_sede_carreras_Carrera1_idx` (`carrera_codigo7`),
  CONSTRAINT `fk_sede_carreras_Carrera1` FOREIGN KEY (`carrera_codigo7`) REFERENCES `carrera` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sede_carreras_Sede1` FOREIGN KEY (`sede_codigo2`) REFERENCES `sede` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sede_carreras` */

insert  into `sede_carreras`(`codigo`,`sede_codigo2`,`carrera_codigo7`) values 
(0,1000,2000),
(0,1000,5000),
(0,2000,4000),
(0,2000,6000),
(0,3000,1000),
(0,3000,2000),
(0,3000,5000),
(0,3000,6000),
(0,4000,1000),
(0,4000,2000),
(1001,1000,1000),
(1004,2000,3000);

/*Table structure for table `tabulaciones` */

DROP TABLE IF EXISTS `tabulaciones`;

CREATE TABLE `tabulaciones` (
  `codigo` varchar(5) NOT NULL,
  `items` varchar(150) DEFAULT NULL,
  `puntos` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `asignado` int(11) DEFAULT NULL,
  `observaciones` varchar(300) DEFAULT NULL,
  `fechaModificacion` date DEFAULT NULL,
  `memo` varchar(200) DEFAULT NULL,
  `operadorMod` varchar(45) DEFAULT NULL,
  `campo` varchar(100) DEFAULT NULL,
  `postulantes_dni5` bigint(20) NOT NULL,
  `carrera_codigo8` int(11) NOT NULL,
  `materia_codigo7` int(11) NOT NULL,
  PRIMARY KEY (`codigo`,`postulantes_dni5`,`carrera_codigo8`,`materia_codigo7`),
  KEY `fk_tabulaciones_postulantes1_idx` (`postulantes_dni5`),
  KEY `fk_tabulaciones_carrera1_idx` (`carrera_codigo8`),
  KEY `fk_tabulaciones_materia1_idx` (`materia_codigo7`),
  CONSTRAINT `fk_tabulaciones_carrera1` FOREIGN KEY (`carrera_codigo8`) REFERENCES `carrera` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabulaciones_materia1` FOREIGN KEY (`materia_codigo7`) REFERENCES `materia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabulaciones_postulantes1` FOREIGN KEY (`postulantes_dni5`) REFERENCES `postulantes` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tabulaciones` */

/*Table structure for table `titulo` */

DROP TABLE IF EXISTS `titulo`;

CREATE TABLE `titulo` (
  `dni` bigint(20) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `tit_otorgado` varchar(100) DEFAULT NULL,
  `posgrado` varchar(200) DEFAULT NULL,
  `pos_otorgado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `titulo` */

insert  into `titulo`(`dni`,`titulo`,`tit_otorgado`,`posgrado`,`pos_otorgado`) values 
(42913695,'Tecnico','UNC','Licenciado','Aconcagua');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
