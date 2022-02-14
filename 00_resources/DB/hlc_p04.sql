-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql:3306
-- Tiempo de generación: 14-02-2022 a las 10:02:45
-- Versión del servidor: 5.7.37
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hlc_p04`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `test` int(4) NOT NULL,
  `num_quest` int(4) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer1` varchar(400) NOT NULL,
  `answer2` varchar(400) NOT NULL,
  `answer3` varchar(400) NOT NULL,
  `answer4` varchar(400) NOT NULL,
  `correct` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`test`, `num_quest`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `correct`) VALUES
(1, 1, '&iquest;Qu&eacute; formato tienen las p&aacute;ginas HTML?', 'Son ficheros de texto especiales. Solo pueden leerlos los navegadores, un editor de texto normal no podr&iacute;a abrirlo.', 'Son ficheros de texto. Podemos leer su contenido con cualquier procesador de texto.', 'Son ficheros binarios compilados. No se pueden leer, solo ejecutar en un navegador.', 'Son ficheros de de texto que no pueden contener ning&uacute;n otro lenguaje distinto a html.', 'answer2'),
(1, 2, '&iquest;Cu&aacute;l es la versi&oacute;n actualmente vigente del est&aacute;ndar HTML?', 'HTML 3', 'HTML 4', 'HTML 6', 'HTML 5', 'answer4'),
(1, 3, '&iquest;Cu&aacute;l es la estructura de una p&aacute;gina Web? Elige de las siguientes cu&aacute;l es el que muestra las secciones correctas.', '&lt;!DOCTYPE html&gt; &lt;html&gt; &lt;head&gt;.....&lt;/head&gt; &lt;body&gt;.....&lt;/body&gt; &lt;/html&gt;', '&lt;!DOCTYPE html&gt; &lt;html&gt; &lt;head&gt;.....&lt;/head&gt; &lt;body&gt;.....&lt;/body&gt; &lt;footer&gt;....&lt;/footer&gt; &lt;/html&gt;', '&lt;!DOCTYPE html&gt; &lt;body&gt; &lt;head&gt;.....&lt;/head&gt; &lt;html&gt;.....&lt;/html&gt; &lt;/body&gt;', '&lt;!DOCTYPE html&gt; &lt;head&gt;.....&lt;/head&gt; &lt;body&gt;....&lt;/body&gt; &lt;footer&gt;.....&lt;/footer&gt;', 'answer2'),
(1, 4, '&iquest;Cu&aacute;l de estas etiquetas ayudar&iacute;a a que los acentos se vieran bien en una p&aacute;gina web?', '&lt;meta charset=\"UTF-8\"&gt;', '&lt;language=\"es\"&gt;', '&lt;meta ASCII=\"yes\"&gt;', '&lt;accentuation=\"on\"&gt;', 'answer2'),
(1, 5, '&iquest;C&oacute;mo se etiqueta un p&aacute;rrafo en HTML?', '(p)Esto es un p&aacute;rrafo.(p)', '&lt;p=\"Esto es un p&aacute;rrafo\"&gt;', '&lt;p&gt;Esto es un p&aacute;rrafo.&lt;/p&gt;', '&lt;p&gt;Esto es un p&aacute;rrafo.&lt;p&gt;', 'answer3'),
(2, 1, '&iquest;Cu&aacute;l es el lenguaje est&aacute;ndar espec&iacute;fico para aplicar estilos de presentaci&oacute;n a nuestras p&aacute;ginas web?', 'Javascript.', 'Flash.', 'CSS', 'PHP', 'answer3'),
(2, 2, '&iquest;Cu&aacute;l crees que es la mejor manera de aplicar estilos a una p&aacute;gina web?', 'Incluir los estilos en las etiquetas HTML para que se carguen y ejecuten antes.', 'Incluirlos en un fichero externo vinculado a ese fichero HTML.', 'Incluirlos en la secci&oacute;n cabecera (head) para agruparlos en un mismo sitio en la misma p&aacute;gina.', 'Incluirlos en un fichero php externo.', 'answer2'),
(2, 3, '&iquest;Para que sirve el atributo class?', 'Para clasificar el tipo de enlace (a) que estamos definiendo: salto interno, v&iacute;nculo interno o externo.', 'Es espec&iacute;fico para indicar el color de la fuente que queremos aplicar, Por ejemplo: p class=\"red\".', 'Para aplicar unos determinados estilos a los elementos que tenga la misma clase.', 'Para llamar a un fichero php.', 'answer3'),
(2, 4, '&iquest;Qu&eacute; est&aacute; mal en esta regla de estilo?: .cuadro { border: 1px blue dotted padding: 10px 5px; }', 'Falta un ; (punto y coma) al final de la declaraci&oacute;n del estilo border.', 'Falta una , (coma) entre los dos valores de la propiedad padding (10px 5px).', 'No se puede poner un . (punto) al inicio de una declaraci&oacute;n (antes de la palabra cuadro).', 'No falta nada.', 'answer1'),
(2, 5, '&iquest;C&oacute;mo se define un color de fondo para todas las etiquetas \"p\" en CSS?', 'p.all {background-color:red;}', 'p {background-color:red;}', '#p {background-color:red;}', '.p {background-color:red;}', 'answer2'),
(3, 1, '&iquest;En qu&eacute; lugar se ejecuta generalmente el c&oacute;digo JavaScript?', 'Servidor.', 'Cliente (ordenador propio).', 'Servidor cloud &uacute;nicamente.', 'Cliente con servicios especiales.', 'answer2'),
(3, 2, '¿Cu&aacute;les de estas son marcas para la inserci&oacute;n del c&oacute;digo JavaScript en las p&aacute;ginas HTML?', '&lt;javascript _code&gt; y &lt;/javascript_code&gt;', '&lt;script&gt; y &lt;/script&gt;', '&lt;?script&gt; y &lt;script?&gt;', '&lt;? y ?&gt;', 'answer2'),
(3, 3, 'La llamada al c&oacute;digo Javascript debe colocarse en:', 'La secci&oacute;n Body de la p&aacute;gina.', 'Antes de la etiqueta HTML.', 'Puede colocarse en la secci&oacute;n Head o en Body.', 'Debe colocarse en el Footer.', 'answer3'),
(3, 4, 'Para terminar las instrucciones en Javascript se utiliza:', 'Un punto y coma.', 'Un punto y coma o un salto de &iacute;.', 'La sentencia End.', 'Nada.', 'answer1'),
(3, 5, 'Para concatenar cadenas de caracteres en Javascript se usa el car&aacute;cter:', '&amp; (ampersand)', '+ (m&aacute;s)', '. (punto)', '* (por)', 'answer2'),
(4, 1, '&iquest;En qu&eacute; lugar se ejecuta el c&oacute;digo PHP?', 'Servidor.', 'Cliente (ordenador propio).', 'Servidor cloud &uacute;nicamente.', 'Cliente con servicios especiales.', 'answer1'),
(4, 2, '&iquest;Cu&aacute;les de estas son marcas para la inserci&oacute;n del c&oacute;digo PHP en las p&aacute;ginas HTML?', '&lt; ? y ? &gt;', '&lt; php &gt;&lt; /php &gt;', '&lt;# y #&gt;', '&lt;?php&gt;&lt;/?php&gt;', 'answer1'),
(4, 3, '&iquest;En qu&eacute; atributo de un formulario especificamos la p&aacute;gina a la que se van a enviar los datos del mismo?', 'name.', 'file.', 'action.', 'description.', 'answer3'),
(4, 4, '&iquest;Cu&aacute;l de estas instrucciones est&aacute; correctamente escrita en PHP?', 'if (a=0) print a', 'if (a==0) echo &quot;hola mundo&quot;;', 'if (a==0) { echo ok }', 'if (a==0): print a;', 'answer2'),
(4, 5, 'Dos de las formas de pasar los par&aacute;metros entre p&aacute;ginas PHP son:', 'Require e Include.', 'Get y Put.', 'Post y Get.', 'Into e Include.', 'answer3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `email` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `a_bad` int(11) DEFAULT NULL,
  `a_good` int(11) DEFAULT NULL,
  `course1` int(1) NOT NULL DEFAULT '0',
  `course2` int(1) NOT NULL DEFAULT '0',
  `course3` int(1) NOT NULL DEFAULT '0',
  `course4` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`email`, `nombre`, `fecha_nac`, `a_bad`, `a_good`, `course1`, `course2`, `course3`, `course4`) VALUES
('migvazmar@gmail.com', 'Miguel Vazquez', '1991-03-28', 1, 8, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test`,`num_quest`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
