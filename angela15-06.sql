/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80015
 Source Host           : localhost:3306
 Source Schema         : angela

 Target Server Type    : MySQL
 Target Server Version : 80015
 File Encoding         : 65001

 Date: 15/06/2019 08:25:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for detalle_asistencia
-- ----------------------------
DROP TABLE IF EXISTS `detalle_asistencia`;
CREATE TABLE `detalle_asistencia`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codPracticante_fk` char(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NULL DEFAULT NULL,
  `horEntrada` time(0) NULL DEFAULT NULL,
  `horSalida` time(0) NULL DEFAULT NULL,
  `horTotales` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `codPracticante_fk`(`codPracticante_fk`) USING BTREE,
  CONSTRAINT `practicantes -> detalle` FOREIGN KEY (`codPracticante_fk`) REFERENCES `practicantes` (`dni`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detalle_asistencia
-- ----------------------------
INSERT INTO `detalle_asistencia` VALUES (38, '74779087', '2019-05-28', '10:11:16', NULL, NULL);
INSERT INTO `detalle_asistencia` VALUES (39, '478956', '2019-06-08', '10:08:23', NULL, NULL);

-- ----------------------------
-- Table structure for practicantes
-- ----------------------------
DROP TABLE IF EXISTS `practicantes`;
CREATE TABLE `practicantes`  (
  `dni` char(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apePaterno` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apeMaterno` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecNacimiento` date NOT NULL,
  `sexo` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codTurno_fk` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`dni`) USING BTREE,
  INDEX `codTurno_fk`(`codTurno_fk`) USING BTREE,
  CONSTRAINT `practicantes -> turnos` FOREIGN KEY (`codTurno_fk`) REFERENCES `turnos` (`codigo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of practicantes
-- ----------------------------
INSERT INTO `practicantes` VALUES ('478956', 'Espinoza', 'Fiestas', 'Jorge', '2019-06-15', 'M', 'T1', 'gaaaaa');
INSERT INTO `practicantes` VALUES ('48472688', 'Lopez', 'Chile', 'Mario Alfredo', '1994-03-04', 'M', 'T1', '');
INSERT INTO `practicantes` VALUES ('545121', 'Arroyo', 'Chavez', 'Libet estrella', '2019-06-08', 'F', 'T1', 'hola');
INSERT INTO `practicantes` VALUES ('5456874', 'Montalvo', 'Quispe', 'Juan Carlos', '2019-06-21', 'M', 'T2', 'galan');
INSERT INTO `practicantes` VALUES ('71061478', 'Trujillo ', 'Ibañez', 'Alexander Piero', '2018-12-02', 'M', 'T1', '');
INSERT INTO `practicantes` VALUES ('74779087', 'Espinoza', 'Correa', 'Bryan Wilder', '1999-04-24', 'M', 'T2', '');
INSERT INTO `practicantes` VALUES ('76180544', 'Montalvo', 'Fiestas', 'Cristhofer', '1999-08-24', 'M', 'T1', '');

-- ----------------------------
-- Table structure for produc
-- ----------------------------
DROP TABLE IF EXISTS `produc`;
CREATE TABLE `produc`  (
  `ID` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `SECCION` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `NOMBRE` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `PRECIO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `FECHA` date NULL DEFAULT NULL,
  `IMPORTADO` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `PAIS` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produc
-- ----------------------------
INSERT INTO `produc` VALUES ('AR70', 'deport', 'balon ', '40', '1992-01-19', 'no', 'españa');
INSERT INTO `produc` VALUES ('AR71', 'deportes', 'balon ', '40', '1992-01-19', 'si', 'españa');
INSERT INTO `produc` VALUES ('AR8', 'deportes', 'balon ', '40', '1992-01-19', 'si', 'españa');
INSERT INTO `produc` VALUES ('AR84', 'deportes', 'balon ', '40', '2019-10-15', 'si', 'españa');
INSERT INTO `produc` VALUES ('AR87', 'deportes', 'balon ', '40', '2019-01-15', 'si', 'españa');
INSERT INTO `produc` VALUES ('AR89', 'deportes', 'balon ', '40', '2020-08-15', 'si', 'españa');

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto`  (
  `ID` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `SECCION` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `NOMBRE` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `PRECIO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `FECHA` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `IMPORTADO` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `PAIS` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('AR88', 'deportes', 'balon ', '40', '', 'si', 'españa');
INSERT INTO `producto` VALUES ('AR89', 'deportes', 'balon ', '40', '20-08-15', 'si', 'españa');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `ID` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `SECCION` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `NOMBRE` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `PRECIO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `FECHA` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `IMPORTADO` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `PAIS` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('AR88', 'deportes', 'balon ', '40', '', 'si', 'españa');

-- ----------------------------
-- Table structure for turnos
-- ----------------------------
DROP TABLE IF EXISTS `turnos`;
CREATE TABLE `turnos`  (
  `codigo` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of turnos
-- ----------------------------
INSERT INTO `turnos` VALUES ('T1', 'Turno Mañana', '');
INSERT INTO `turnos` VALUES ('T2', 'Turno Tarde', '');

-- ----------------------------
-- Procedure structure for horario_dia
-- ----------------------------
DROP PROCEDURE IF EXISTS `horario_dia`;
delimiter ;;
CREATE PROCEDURE `horario_dia`()
BEGIN
SELECT dni,CONCAT(apePaterno,' ',apeMaterno,', ',nombres) as nomCompleto,horEntrada,IFNULL(horSalida,'<i>Aun no Sale</i>') as horSalida 
FROM practicantes p inner join detalle_asistencia d on p.dni=d.codPracticante_fk where fecha=DATE_FORMAT(NOW(), "%Y-%m-%d");
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listaAlumnos
-- ----------------------------
DROP PROCEDURE IF EXISTS `listaAlumnos`;
delimiter ;;
CREATE PROCEDURE `listaAlumnos`()
BEGIN
SELECT dni,CONCAT(codTurno_fk,' - ',apePaterno,' ',apeMaterno,', ',nombres)as nomCompleto,fecha,horEntrada,horSalida FROM practicantes p left join detalle_asistencia d 
on p.dni=d.codPracticante_fk where fecha=DATE_FORMAT(NOW(), "%Y-%m-%d") or fecha<=>null;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listaAlumnos3
-- ----------------------------
DROP PROCEDURE IF EXISTS `listaAlumnos3`;
delimiter ;;
CREATE PROCEDURE `listaAlumnos3`(_fecha date)
BEGIN
SELECT dni,CONCAT(codTurno_fk,' - ',apePaterno,' ',apeMaterno,', ',nombres)as nomCompleto,fecha,horEntrada,horSalida FROM practicantes p left join detalle_asistencia d 
on p.dni=d.codPracticante_fk where fecha= _fecha;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listaAlumnos4
-- ----------------------------
DROP PROCEDURE IF EXISTS `listaAlumnos4`;
delimiter ;;
CREATE PROCEDURE `listaAlumnos4`()
BEGIN
SELECT dni,CONCAT(codTurno_fk,' - ',apePaterno,' ',apeMaterno,', ',nombres)as nomCompleto,fecha,horEntrada,horSalida FROM practicantes p left join detalle_asistencia d 
on p.dni=d.codPracticante_fk where fecha=DATE_FORMAT(NOW(), "%Y-%m-%d") <=>null;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for marcarAsistencia
-- ----------------------------
DROP PROCEDURE IF EXISTS `marcarAsistencia`;
delimiter ;;
CREATE PROCEDURE `marcarAsistencia`(`codigo` CHAR(8), `accion` VARCHAR(100))
BEGIN
if(accion="ingreso") then
insert into detalle_asistencia(codPracticante_fk,fecha,horEntrada) value(codigo,DATE_FORMAT(NOW(), "%Y-%m-%d"),DATE_FORMAT(NOW(), "%h:%i:%s"));
elseif (accion="salida") then
update detalle_asistencia set horSalida=DATE_FORMAT(NOW(), "%h:%i:%s") where codPracticante_fk=codigo;
end if;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registarpracticantes
-- ----------------------------
DROP PROCEDURE IF EXISTS `registarpracticantes`;
delimiter ;;
CREATE PROCEDURE `registarpracticantes`(dni varchar(10), apePaterno varchar(50), apeMaterno varchar(50), nombres varchar(50), fechaNacimiento varchar(12),sexo varchar(2),codTurno_fk varchar(2), descripcion varchar(50))
begin
insert into practicantes values(dni,apePaterno,apeMaterno,nombres,fechaNacimiento,sexo,codTurno_fk,descripcion);
end
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sp_busquita
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_busquita`;
delimiter ;;
CREATE PROCEDURE `sp_busquita`(_dni varchar(10))
begin
select * from practicantes WHERE dni LIKE concat(_dni,'%');
end
;;
delimiter ;

-- ----------------------------
-- Procedure structure for verificar_asistencia
-- ----------------------------
DROP PROCEDURE IF EXISTS `verificar_asistencia`;
delimiter ;;
CREATE PROCEDURE `verificar_asistencia`(`dni2` CHAR(8))
BEGIN
declare btnIngreso varchar(100);
declare btnSalida varchar(100);
declare conIngreso int;
declare conSalida int;
declare count int;
set count =(SELECT count(*) FROM practicantes WHERE dni=dni2);
if(count=0) then
select * from practicantes where 1=0;
else
set conIngreso=(select count(*) from detalle_asistencia where fecha=DATE_FORMAT(NOW(), "%Y-%m-%d") and NOT (horEntrada <=> NULL) and codPracticante_fk=dni2);
set conSalida=(select count(*) from detalle_asistencia where fecha=DATE_FORMAT(NOW(), "%Y-%m-%d") and NOT (horSalida <=> NULL) and codPracticante_fk=dni2);
select DATE_FORMAT(NOW(), "%Y-%m-%d") as fecha,conIngreso,conSalida;
end if;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
