/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL XAMPP
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : kusupos

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 16/06/2024 08:50:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (1, 'Makis');
INSERT INTO `categorias` VALUES (2, 'Pokebowls');
INSERT INTO `categorias` VALUES (3, 'Cortes');
INSERT INTO `categorias` VALUES (4, 'Bebidas');
INSERT INTO `categorias` VALUES (5, 'Adicionales');

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes`  (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `tipodocumento` int NULL DEFAULT NULL,
  `numerodocumento` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clientes
-- ----------------------------

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `idCategoria` int NOT NULL,
  `estado` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idCategoria`(`idCategoria`) USING BTREE,
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (1, 'Acevichado', 25, 1, 1, 'Assets\\img\\productos\\makis\\acevichado.jpeg');
INSERT INTO `productos` VALUES (2, 'Furai', 25, 1, 1, 'Assets\\img\\productos\\makis\\furai.jpg');
INSERT INTO `productos` VALUES (3, 'Parrillero', 25, 1, 1, 'Assets\\img\\productos\\makis\\parrillero.jpg');
INSERT INTO `productos` VALUES (4, 'California', 25, 1, 1, 'Assets\\img\\productos\\makis\\california.jpg');
INSERT INTO `productos` VALUES (5, 'Tartar', 25, 1, 1, 'Assets\\img\\productos\\makis\\tartar.jpg');
INSERT INTO `productos` VALUES (6, 'Tentación', 25, 1, 1, 'Assets\\img\\productos\\makis\\tentacion.jpg');
INSERT INTO `productos` VALUES (7, 'Spicy', 25, 1, 1, 'Assets\\img\\productos\\makis\\spicy.jpeg');
INSERT INTO `productos` VALUES (8, 'Avocado', 25, 1, 1, 'Assets\\img\\productos\\makis\\avocado.jpg');
INSERT INTO `productos` VALUES (9, 'Chicken Brasa', 25, 1, 1, 'Assets\\img\\productos\\makis\\chickenbrasa.jpeg');
INSERT INTO `productos` VALUES (10, 'Lomo Saltado', 25, 1, 1, 'Assets\\img\\productos\\makis\\lomosaltado.jpg');
INSERT INTO `productos` VALUES (11, 'Ostion', 25, 1, 1, 'Assets\\img\\productos\\makis\\ostion.jpeg');
INSERT INTO `productos` VALUES (12, 'Ice Cream', 25, 1, 1, 'Assets\\img\\productos\\makis\\icecream.jpg');
INSERT INTO `productos` VALUES (13, 'Dulce', 25, 1, 1, 'Assets\\img\\productos\\makis\\dulce.jpg');
INSERT INTO `productos` VALUES (14, 'Vegetariano', 25, 1, 1, 'Assets\\img\\productos\\makis\\vegetariano.jpg');

-- ----------------------------
-- Table structure for tipodocumento
-- ----------------------------
DROP TABLE IF EXISTS `tipodocumento`;
CREATE TABLE `tipodocumento`  (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tipodocumento
-- ----------------------------

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idCliente` int NULL DEFAULT NULL,
  `total` float NOT NULL,
  `formaPago` int NOT NULL,
  `nTransacción` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `FechaHora` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ventas
-- ----------------------------

-- ----------------------------
-- Table structure for ventasdetalle
-- ----------------------------
DROP TABLE IF EXISTS `ventasdetalle`;
CREATE TABLE `ventasdetalle`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idVenta` int NOT NULL,
  `idProducto` int NOT NULL,
  `precioUnitario` float NOT NULL,
  `cantidad` int NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idventa`(`idVenta`) USING BTREE,
  INDEX `idproducto`(`idProducto`) USING BTREE,
  CONSTRAINT `idproducto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idventa` FOREIGN KEY (`idVenta`) REFERENCES `ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ventasdetalle
-- ----------------------------

-- ----------------------------
-- Table structure for ventasdetallepromo
-- ----------------------------
DROP TABLE IF EXISTS `ventasdetallepromo`;
CREATE TABLE `ventasdetallepromo`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idVentaDetalle` int NOT NULL,
  `idProducto` int NOT NULL,
  `precioUnitario` float NOT NULL,
  `cantidad` int NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idventa`(`idVentaDetalle`) USING BTREE,
  INDEX `idproducto`(`idProducto`) USING BTREE,
  CONSTRAINT `ventasdetallepromo_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ventasdetallepromo_ibfk_2` FOREIGN KEY (`idVentaDetalle`) REFERENCES `ventasdetalle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ventasdetallepromo
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
