-- Eliminar la base de datos 'crud_w' si existe
DROP DATABASE IF EXISTS `crud_w`;

-- Crear la base de datos 'crud_w'
CREATE DATABASE `crud_w`;

-- Usar la base de datos 'crud_w'
USE `crud_w`;

-- Eliminar la tabla 'curso' si existe
DROP TABLE IF EXISTS `curso`;

-- Crear la tabla 'curso'
CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(100) NOT NULL,
  `visible` varchar(2) NOT NULL DEFAULT 'Si',
  `fecha_ingreso` datetime DEFAULT current_timestamp(),
  `descripcion` varchar(1000) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_cuestionario` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`) USING BTREE
) ENGINE=InnoDB ;

-- Insertar 20 datos en la tabla 'curso'
INSERT INTO `curso` VALUES
(1,'Matemáticas','Si','2023-06-14 00:00:00','Este curso se centra en los conceptos y operaciones matemáticas básicas.',3,2,1),
(2,'Español','Si','2023-01-06 00:00:00','En este curso se estudia la gramática, la literatura y la comunicación escrita en español.',4,1,7),
(3,'Ciencias Naturales','No','2023-03-22 00:00:00','Este curso abarca temas relacionados con la biología, química y física.',5,2,8),
(4,'Historia','Si','2023-06-14 00:00:00','En este curso se analizan los eventos y procesos históricos que han marcado nuestra sociedad.',2,2,12),
(5,'Geografía','No','2023-04-04 00:00:00','Este curso explora la geografía física y humana de diferentes regiones del mundo.',4,1,15),
(6,'Inglés','Si','2023-01-22 00:00:00','En este curso se aprende a comunicarse en inglés y se estudia la cultura de países angloparlantes.',2,3,11),
(7,'Arte','Si','2023-06-14 00:00:00','Este curso explora la creatividad y las diferentes formas de expresión artística.',2,3,8),
(8,'Educación Física','Si','2023-03-22 00:00:00','En este curso se promueve la actividad física y se enseñan habilidades deportivas.',5,3,9),
(9,'Ciencias Sociales','No','2023-02-26 00:00:00','Este curso estudia las interacciones humanas, las instituciones sociales y los problemas contemporáneos.',2,2,18),
(10,'Informática','Si','2023-06-14 00:00:00','En este curso se adquieren habilidades en el manejo de la tecnología y el uso de programas informáticos.',3,1,3),
(11,'Música','No','2023-04-18 00:00:00','Este curso explora la teoría musical y se aprende a tocar instrumentos y apreciar diferentes estilos musicales.',4,2,7),
(12,'Economía','Si','2023-06-14 00:00:00','En este curso se estudian los principios de la economía, el comercio y las finanzas.',5,3,5),
(13,'Psicología','No','2023-05-02 00:00:00','Este curso analiza el comportamiento humano, los procesos mentales y las teorías psicológicas.',2,1,14),
(14,'Biología','Si','2023-06-14 00:00:00','En este curso se estudia la vida y los organismos vivos, desde las células hasta los ecosistemas.',3,2,6),
(15,'Filosofía','Si','2023-04-12 00:00:00','Este curso explora las ideas y los argumentos que han influido en la forma de pensar de la humanidad.',4,1,9),
(16,'Física','Si','2023-06-14 00:00:00','En este curso se estudian las leyes y los fenómenos físicos que rigen nuestro entorno.',2,3,10),
(17,'Química','Si','2023-05-09 00:00:00','Este curso se centra en los elementos, las sustancias químicas y las reacciones químicas.',5,1,13),
(18,'Literatura','Si','2023-06-14 00:00:00','En este curso se estudian las obras literarias y se analizan los estilos y géneros literarios.',2,2,11),
(19,'Sociología','No','2023-04-28 00:00:00','Este curso explora las interacciones humanas, las estructuras sociales y los problemas de la sociedad.',4,2,17),
(20,'Cálculo','Si','2023-06-14 00:00:00','En este curso se estudian los conceptos y técnicas del cálculo diferencial e integral.',3,1,9);
