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

 Date: 03/08/2024 10:36:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articulos
-- ----------------------------
DROP TABLE IF EXISTS `articulos`;
CREATE TABLE `articulos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `idCategoria` int NOT NULL,
  `estado` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idCategoria`(`idCategoria`) USING BTREE,
  CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articulos
-- ----------------------------
INSERT INTO `articulos` VALUES (1, 'Maki', 25, 1, 1, NULL);
INSERT INTO `articulos` VALUES (2, '20 Cortes', 46, 2, 1, NULL);
INSERT INTO `articulos` VALUES (3, '30 Cortes', 68, 2, 1, NULL);
INSERT INTO `articulos` VALUES (4, '50 Cortes', 100, 2, 1, NULL);
INSERT INTO `articulos` VALUES (5, '60 Cortes', 115, 2, 1, NULL);
INSERT INTO `articulos` VALUES (6, 'Poke', 28, 3, 1, NULL);
INSERT INTO `articulos` VALUES (7, 'Poke + Gaseosa', 30, 3, 1, NULL);
INSERT INTO `articulos` VALUES (8, 'Promo Poke x2', 50, 3, 1, NULL);
INSERT INTO `articulos` VALUES (9, 'Promo Poke x 2 + Gaseosa', 55, 3, 1, NULL);
INSERT INTO `articulos` VALUES (10, 'Sashimi', 18, 4, 1, NULL);
INSERT INTO `articulos` VALUES (11, 'Nigiri', 18, 4, 1, NULL);
INSERT INTO `articulos` VALUES (12, 'Tiradito', 35, 4, 1, NULL);
INSERT INTO `articulos` VALUES (13, 'Taquitos Nikkei', 25, 4, 1, NULL);
INSERT INTO `articulos` VALUES (14, 'Ebi Furai x6', 18, 4, 1, NULL);
INSERT INTO `articulos` VALUES (15, 'Ebi Furai x12', 30, 4, 1, NULL);
INSERT INTO `articulos` VALUES (16, 'Bebidas', 5, 5, 1, NULL);
INSERT INTO `articulos` VALUES (17, 'Pilsen', 7, 6, 1, NULL);
INSERT INTO `articulos` VALUES (18, 'Heineken', 8, 6, 1, NULL);
INSERT INTO `articulos` VALUES (19, 'Cremas', 3, 6, 1, NULL);

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
INSERT INTO `categorias` VALUES (2, 'Promo');
INSERT INTO `categorias` VALUES (3, 'Pokes');
INSERT INTO `categorias` VALUES (4, 'Cortes');
INSERT INTO `categorias` VALUES (5, 'Bebidas');
INSERT INTO `categorias` VALUES (6, 'Adicionales');

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
-- Table structure for poke
-- ----------------------------
DROP TABLE IF EXISTS `poke`;
CREATE TABLE `poke`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of poke
-- ----------------------------
INSERT INTO `poke` VALUES (1, 'Arroz Maki', 'Base');
INSERT INTO `poke` VALUES (2, 'Mix Lechugas', 'Base');
INSERT INTO `poke` VALUES (3, 'Bonito', 'Proteina');
INSERT INTO `poke` VALUES (4, 'Trucha', 'Proteina');
INSERT INTO `poke` VALUES (5, 'Pescado de Temporada', 'Proteina');
INSERT INTO `poke` VALUES (6, 'Chicken Katsu', 'Proteina');
INSERT INTO `poke` VALUES (7, 'Pollo Karage', 'Proteina');
INSERT INTO `poke` VALUES (8, 'Palta', 'Toppin');
INSERT INTO `poke` VALUES (9, 'Kiuri', 'Toppin');
INSERT INTO `poke` VALUES (10, 'Zanahorita', 'Toppin');
INSERT INTO `poke` VALUES (11, 'Hojuelas de Camaron', 'Toppin');
INSERT INTO `poke` VALUES (12, 'Col con tartara', 'Toppin');
INSERT INTO `poke` VALUES (13, 'Holantao', 'Toppin');
INSERT INTO `poke` VALUES (14, 'Tomate Picado', 'Toppin');
INSERT INTO `poke` VALUES (15, 'Cebolla China', 'Add On');
INSERT INTO `poke` VALUES (16, 'Ajonjoli', 'Add On');
INSERT INTO `poke` VALUES (17, 'Nori', 'Add On');
INSERT INTO `poke` VALUES (18, 'Togarashi', 'Add On');

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
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `productos` VALUES (15, '20 Cortes', 46, 2, 1, 'Assets\\img\\default\\noimage.jpg');
INSERT INTO `productos` VALUES (16, '30 Cortes', 68, 2, 1, 'Assets\\img\\default\\noimage.jpg');
INSERT INTO `productos` VALUES (17, '50 Cortes', 100, 2, 1, 'Assets\\img\\default\\noimage.jpg');
INSERT INTO `productos` VALUES (18, '60 Cortes', 115, 2, 1, 'Assets\\img\\default\\noimage.jpg');

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
  `nTransaccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `FechaHora` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ventas
-- ----------------------------
INSERT INTO `ventas` VALUES (1, 1, 50, 0, '12345', '2024-08-02 11:55:41');

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
