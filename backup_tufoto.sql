-- MySQL dump 10.13  Distrib 5.6.19, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tufoto
-- ------------------------------------------------------
-- Server version	5.6.19-1~exp1ubuntu2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_plural` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_singular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Matrimonios','Matrimonio','','Fotografias de Matrimonios realizadas por tufoto.co','matrimonios','2015-06-19 02:37:41','2015-06-19 02:37:41'),(2,'Familias','Familia','','Fotografias de Familias realizadas por tufoto.co','familias','2015-06-19 02:37:41','2015-06-19 02:37:41'),(3,'Mascotas','Mascota','','Fotografias de Mascotas realizadas por tufoto.co','mascotas','2015-06-19 02:37:41','2015-06-19 02:37:41');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `folder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_category_id_foreign` (`category_id`),
  CONSTRAINT `galleries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'Alex y Barbara','<p>Una llanera y un paisa son los protagonistas de esta historia. Una excelente luz natural fue el mejor ingrediente para lograr estas fotografías en la Hacienda Los Gavanes. <a href=\"/galerias/matrimonios/alex-y-barbara\">Aquí podrás ver las fotos de su Matrimonio.</a></p>','2015-01-01','Fotografias de la Preboda de Alex y Barbara en Villavicencio 2015','preboda-alex-y-barbara','Preboda','002-Preboda-Alex-y-Barbara','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(2,'Alex y Barbara','<p>Llegaremos en canoa a la recepción, nos dijo Barbara el día que la conocimos… Todo se realizó en la Finca Los Gavanes, fue un día soleado y tranquilo, los preparativos poco a poco iban tomando forma. Alex estaba pendiente de cada detalle y mientras tanto en el segundo piso estaba Barbara en su preparación. Pasaron algunos minutos, ambos estaban listos y salimos para el lago donde esperaba la canoa que los iba llevar a la ceremonia. Con ustedes el resumen de este matrimonio. <a href=\"/galerias/matrimonios/preboda-alex-y-barbara\">Aquí podrás ver las fotos de su Preboda</a></p>','2015-01-01','Fotografias del Matrimonio de Alex y Barbara en Villavicencio 2015','alex-y-barbara','','007-Alex-y-Barbara','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(3,'Alexis y Maye','<p>Esta pareja no quiere perder un solo detalle, así que optaron por estar al tanto de la decoración de su boda. <a href=\"/galerias/matrimonios/alexis-y-maye\">Aquí podrás ver las fotos de su Matrimonio.</a></p>','2015-01-01','Fotografias de la Preboda de Alexis y Maye en Villavicencio 2015','preboda-alexis-y-maye','Preboda','001-Preboda-Alexis-y-Maye','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(4,'Alexis y Maye','<p>Lluvia, viento, árboles caídos y más obstáculos no lograron impedir la unión de esta gran pareja. Su matrimonio se realizó en la Iglesia de Restrepo y la recepción fue a 5 minutos de la iglesia en un sitio llamado La Talanquera. Hubo opera, música llanera, canto, baile, diversión y muchos amigos. Días atrás habíamos realizado una sesión de preboda.</p>','2015-01-01','Fotografias del Matrimonio de Alexis y Maye en Villavicencio 2015','alexis-y-maye','','006-Alexis-y-Maye','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(5,'Diana se casó de rojo','<p>Diana Marcela se casaba en pocas horas, su vestido era rojo (odia el blanco) y su esposo quien llegaba de Mariachi a la iglesia no creía que realmente llegara de rojo. Así fue su preparación.</p>','2015-01-01','Fotografias del Matrimonio de Diana en Villavicencio 2015','diana-se-caso-de-rojo','','005-Diana-se-caso de-rojo','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(6,'Omar y Edith','<p>Gina, la hija de Joaquín y Myriam nos recomendó con Omar y Edith, nos pusimos cita en el centro de Villavicencio y nos contaron detalles y deseos sobre su matrimonio. La ceremonia fue en la iglesia María Madre Auxiliadora del barrio Villa María y la recepción en la Hacienda El Paraíso. Ambos vienen de familias numerosas y próximamente Tomás hará parte de esta gran familia. A ustedes muchas gracias por confiar en nuestro trabajo y en nuestra forma de contar historias. Así recibieron Omar y Edith los mejores recuerdos de su matrimonio. <a href=\"/producto\">Ver vídeo</a></p>','2015-01-01','Fotografias del Matrimonio de Omar y Edith en Villavicencio 2015','omar-y-edith','','004-Omar-y-Edith','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(7,'Joaquin y Miryam','<p>Don Joaquín está en la iglesia esperando la llegada de su novia y me pregunta: ¿y ahora qué hago?, ¿qué tengo que hacer?, ¡Dígame usted que tiene la experiencia!... Fue su hija Ginna quien nos llamó. Sus padres llevaban juntos 30 años, ya eran abuelos y querían dar ese paso que no habían dado antes por muchas circunstancias. Aprendimos mucho de ellos, de la voz de la experiencia y que “Con amor todo es posible”.</p>','2015-01-01','Fotografias del Matrimonio de Joaquin y Miryam en Villavicencio 2015','joaquin-y-miryam','','003-Joaquin-y-Miryam','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(8,'Alvaro y Lina','<p>Alvaro nos llama y lo primero que nos dice es que les había gustado mucho nuestro trabajo y querían una cita con nosotros. Lina tenía 5 meses de embarazo, nos contaron su historia y sobre el gran amor que sienten por sus 11 mascotas. Alvaro y Lina ahora son nuestros amigos y estamos muy agradecidos por eso.</p>','2015-01-01','Fotografias del Matrimonio de Alvaro y Lina en Villavicencio 2015','alvaro-y-lina','','002-Alvaro-y-Lina','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(9,'Bleimer y Mery','<p>Bleimer era el animador de un concurso de talentos para niños, llamó a Mery a la tarima y de un momento a otro sus amigos se giran y levantan unos letreros con una propuesta de matrimonio… Estuvimos ahí en el momento justo y eso no tiene precio.</p>','2015-01-01','Fotografias de la Propuesta de Bleimer y Mery en Villavicencio 2015','propuesta-bleimer-y-mery','Propuesta','003-Propuesta-Bleimer-y-Mery','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(10,'Oscar y Luti','<p>Esta bella pareja celebró su matrimonio en la Hacienda La Primavera (Vereda al Cairo), todo fue perfecto. Siempre tuvieron la mejor energía y la compartieron con todos y cada uno de los invitados, así se gozaron su matrimonio al máximo.  Gracias por elegirnos y confiar en nuestro trabajo.</p>','2010-11-27','Fotografias del Matrimonio de Oscar y Luti en Villavicencio 2015','matrimonio-de-oscar-y-luti-en-villavicencio','','001-Oscar-y-Luti','2015-06-19 02:37:41','2015-06-19 02:37:41',1),(11,'Esperando a victoria','<p>EAhora el turno es para Ronal y Keily, a quienes acompañamos para su sesión fotográfica en el Eco Hotel La Rosita (Vía Restrepo antes del peaje). En muy pocos días nacerá Victoría y estas fotografías recordarán ese momento.</p>','2015-06-01','Fotografias de Ronal y Keily','fotografias-esperando-a-victoria','','001-Esperando-a-victoria','2015-06-19 02:37:41','2015-06-19 02:37:41',2),(12,'Alan está por nacer','<p>Camilo y Fernanda esperan la llegada de su hijo Alan. Los visitamos a su casa y este fue el resultado de esta sesión</p>','2015-05-18','Fotografias de Camilo y Fernanda a la espera de su hijo Alan','fotografias-alan-esta-por-nacer','','002-Alan-esta-por-nacer','2015-06-19 02:37:41','2015-06-19 02:37:41',2),(13,'Juan José es hijo de Felipe y Leidy','<p>Acompañamos a esta pareja paisa hasta el mirador turístico de Restrepo. Mientras disfrutaban su tiempo en familia y después de tomarnos unas ‘aguapanelas’ con queso, le enseñaban a su hijo Juan José a montar en bicicleta.</p>','2015-05-08','Fotografias de Juan José es hijo de Felipe y Leidy en Villavicencio 2015','fotografias-juan-jose-es-hijo-de-felipe-y-leidy','','003-Juan-Jose-es-hijo-de-Felipe-y-Leidy','2015-06-19 02:37:41','2015-06-19 02:37:41',2),(14,'Juan y Aurora son hijos de Mónica','<p>En sus tiempos libres Mónica y sus hijos se divierten, esa tarde estuvo llena de risas, muecas y juegos en el parque del restaurante Rodizio Brasil de Villavicencio (Vía La Grama).</p>','2015-04-19','Fotografias del Juan y Aurora, hijos de Mónica en Villavicencio 2015','fotografias-juan-y-aurora-son-hijos-de-monica','','004-Juan-y-Aurora-son-hijos-de-Monica','2015-06-19 02:37:41','2015-06-19 02:37:41',2),(15,'Cabrera Espinoza','<p>William y Shirly bautizaron a su hija Aitana. Sus padrinos Ana y Alan, familiares y amigos los esperaban en el club Meta, para celebrar esta gran bendición.</p>','2015-03-14','Fotografias de Cabrera Espinoza en Villavicencio 2015','fotografias-familia-cabrera-espinoza','','005-Familia-Cabrera-espinoza','2015-06-19 02:37:41','2015-06-19 02:37:41',2),(16,'Nicolas es hijo de Islanda y Fredy','<p>Nos encontramos en la Hacienda Gualanday a las 3 de la tarde, conocimos a Nicolás quien se enamoró de mi esposa y no paraba de hacerle ‘ojitos’. Este coquetón y sus padres la pasaron rico en el parque de diversiones del hotel y nosotros hicimos estas bellas fotos.</p>','2015-01-09','Fotografias de Nicolas es hijo de Islanda y Fredy en Villavicencio 2015','fotografias-nicolas-es-hijo-de-islanda-y-fredy','','006-Nicolas-es-hijo-de-Islanda-y-Fredy','2015-06-19 02:37:41','2015-06-19 02:37:41',2),(17,'Salome es hija de Ana Sanchez','<p>Salomé cumplió años y Ana no podía dejar pasar este momento de su vida sin fotografías. Este es un pequeño resumen.</p>','2014-11-01','Fotografias de Salome es hija de Ana Sanchez en Villavicencio 2015','fotografias-salome-es-hija-de-ana-sanchez','','007-Salome-es-hija-de-Ana-Sanchez','2015-06-19 02:37:41','2015-06-19 02:37:41',2),(18,'Mascotas de Alvaro y Lina','<p>Huracán, Samantha, Capitán, Negro, Simón, Chuchi, Manchis, Rayas, Ceci, Luna y Carlota no los podían acompañar en su matrimonio, hicimos estas fotografías e imprimimos unos cuadros de 80x50cm que fueron ubicados en la recepción y que ahora hacen parte de la decoración de su casa.</p>','2014-11-23','Fotografias de Mascotas de Alvaro y Lina en Villavicencio 2014','fotografias-salome-es-hija-de-ana-sanchez','','001-Mascotas-de-Alvaro-y-Lina','2015-06-19 02:37:41','2015-06-19 02:37:41',3),(19,'Andrea y Bruno','<p>Bruno alias “Nunis”, es el compañero y ángel guardián de mi esposa Andrea, lo recibió siendo un cachorro y han pasado 11 años desde aquel entonces. Happy birthday Bruno!!!</p>','2014-12-06','Fotografias de Andrea y Bruno en Villavicencio 2014','fotografias-andrea-y-bruno','','002-Andrea-y-Bruno','2015-06-19 02:37:41','2015-06-19 02:37:41',3),(20,'Andrea y Milo','<p>Milo está recién llegado a la casa Piñeros, ha destruido todo a su paso y su padre está orgulloso… </p>','2015-01-19','Fotografias de Andrea y Milo en Villavicencio 2015','fotografias-andres-y-milo','','003-Andres-y-Milo','2015-06-19 02:37:41','2015-06-19 02:37:41',3);
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_06_02_203346_create_categories_table',1),('2015_06_02_220550_create_galeries_table',1),('2015_06_09_181723_create_messages_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-19  2:37:48
