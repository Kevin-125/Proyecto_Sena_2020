

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `numero_cotizacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_cliente` varchar(40) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nit_empresa` int(9) DEFAULT NULL,
  `nombre_empresa` varchar(40) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `persona_resp` varchar(40) DEFAULT NULL,
  `producto_cot` int(11) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_cotizacion`),
  KEY `fk_productoencot` (`producto_cot`),
  CONSTRAINT `fk_productoencot` FOREIGN KEY (`producto_cot`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `codigo` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `referencia` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  UNIQUE KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO productos VALUES("1","foto","1","-108","1000","34","producto");





CREATE TABLE `recibos` (
  `id_recibo` int(11) NOT NULL AUTO_INCREMENT,
  `cajero` varchar(30) DEFAULT NULL,
  `nombre_cliente` varchar(40) DEFAULT NULL,
  `producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `valor_total` decimal(10,0) DEFAULT NULL,
  `cantidad_pagada` decimal(10,0) DEFAULT NULL,
  `cantidad_debida` decimal(10,0) DEFAULT NULL,
  `fecha_reg` date NOT NULL,
  PRIMARY KEY (`id_recibo`),
  KEY `fk_idproductorecibo` (`producto`),
  CONSTRAINT `fk_idproductorecibo` FOREIGN KEY (`producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4;

INSERT INTO recibos VALUES("63","kevin","xiomara","1","2","100000","200000","38000","238000","50000","188000","2020-11-25");
INSERT INTO recibos VALUES("66","kevin","alejandro","1","2","40000","80000","15200","95200","50000","45200","2020-12-09");





CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO roles VALUES("1","admin");
INSERT INTO roles VALUES("2","auxiliar");





CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(20) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `usuarios_ibfk_1` (`rol_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios VALUES("6","kevin","56822b2d74","1","kevinandres1250987@gmail.com");
INSERT INTO usuarios VALUES("7","andres","1234","2","cristian.2604@hotmail.com");



