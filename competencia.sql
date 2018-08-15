/*
Navicat MySQL Data Transfer

Source Server         : local competencia
Source Server Version : 50723
Source Host           : localhost:3306
Source Database       : competencia

Target Server Type    : MYSQL
Target Server Version : 50723
File Encoding         : 65001

Date: 2018-08-15 07:48:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `carrusels`
-- ----------------------------
DROP TABLE IF EXISTS `carrusels`;
CREATE TABLE `carrusels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `autor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of carrusels
-- ----------------------------

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', null, '1', 'Category 1', 'category-1', '2018-08-13 10:41:53', '2018-08-13 10:41:53');
INSERT INTO `categories` VALUES ('2', null, '1', 'Category 2', 'category-2', '2018-08-13 10:41:53', '2018-08-13 10:41:53');

-- ----------------------------
-- Table structure for `compvideos`
-- ----------------------------
DROP TABLE IF EXISTS `compvideos`;
CREATE TABLE `compvideos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_competidor` int(10) unsigned NOT NULL,
  `videourl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tcompetencia` int(10) unsigned NOT NULL,
  `tiempo` time DEFAULT NULL,
  `repeticiones` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `comentario` text COLLATE utf8mb4_unicode_ci,
  `clasifica` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `compvideos_id_competidor_foreign` (`id_competidor`),
  KEY `compvideos_id_tcompetencia_foreign` (`id_tcompetencia`),
  CONSTRAINT `compvideos_id_competidor_foreign` FOREIGN KEY (`id_competidor`) REFERENCES `suscriptores` (`id`),
  CONSTRAINT `compvideos_id_tcompetencia_foreign` FOREIGN KEY (`id_tcompetencia`) REFERENCES `tcompetencias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of compvideos
-- ----------------------------
INSERT INTO `compvideos` VALUES ('1', '1', 'https://www.youtube.com/watch?v=jTc3ShyuDV0', '1', null, null, null, 'prueba de video', 'Amrar', null, '2018-08-15 05:14:42', '2018-08-15 05:14:42');
INSERT INTO `compvideos` VALUES ('2', '1', 'https://www.youtube.com/watch?v=vCIfIDjV1r4', '1', null, null, null, 'video subido', 'Amrar', null, '2018-08-15 05:15:10', '2018-08-15 05:15:10');
INSERT INTO `compvideos` VALUES ('3', '2', 'https://www.youtube.com/watch?v=uoaC5n1r3Ys', '4', null, null, null, 'mi mejor video', 'Amrar', null, '2018-08-15 05:18:12', '2018-08-15 05:18:12');
INSERT INTO `compvideos` VALUES ('4', '2', 'https://www.youtube.com/watch?v=ND4wqSiALwU', '4', null, null, null, 'prueba de carreras', 'Amrar', null, '2018-08-15 05:18:35', '2018-08-15 05:18:35');
INSERT INTO `compvideos` VALUES ('5', '2', 'https://www.youtube.com/watch?v=i7hx9foPQgE', '4', null, null, null, 'otro video', 'Fortime', null, '2018-08-15 05:19:17', '2018-08-15 05:19:17');
INSERT INTO `compvideos` VALUES ('6', '1', 'https://vimeo.com/208403145', '1', null, null, null, 'Video de Panda', 'Amrar', null, '2018-08-15 07:31:56', '2018-08-15 07:31:56');
INSERT INTO `compvideos` VALUES ('7', '1', 'https://vimeo.com/27154156', '1', null, null, null, null, 'Amrar', null, '2018-08-15 07:32:56', '2018-08-15 07:32:56');
INSERT INTO `compvideos` VALUES ('8', '1', 'https://www.dailymotion.com/video/x6rzxj3', '1', null, null, null, null, 'Amrar', null, '2018-08-15 07:34:18', '2018-08-15 07:34:18');
INSERT INTO `compvideos` VALUES ('9', '1', 'https://www.dailymotion.com/video/x6r1x0f', '1', null, null, null, 'creo que no esta soportada', 'Amrar', null, '2018-08-15 07:35:10', '2018-08-15 07:35:10');

-- ----------------------------
-- Table structure for `data_rows`
-- ----------------------------
DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of data_rows
-- ----------------------------
INSERT INTO `data_rows` VALUES ('1', '1', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', '', '1');
INSERT INTO `data_rows` VALUES ('2', '1', 'name', 'text', 'Name', '1', '1', '1', '1', '1', '1', '', '2');
INSERT INTO `data_rows` VALUES ('3', '1', 'email', 'text', 'Email', '1', '1', '1', '1', '1', '1', '', '3');
INSERT INTO `data_rows` VALUES ('4', '1', 'password', 'password', 'Password', '1', '0', '0', '1', '1', '0', '', '4');
INSERT INTO `data_rows` VALUES ('5', '1', 'remember_token', 'text', 'Remember Token', '0', '0', '0', '0', '0', '0', '', '5');
INSERT INTO `data_rows` VALUES ('6', '1', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '0', '0', '0', '', '6');
INSERT INTO `data_rows` VALUES ('7', '1', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '', '7');
INSERT INTO `data_rows` VALUES ('8', '1', 'avatar', 'image', 'Avatar', '0', '1', '1', '1', '1', '1', '', '8');
INSERT INTO `data_rows` VALUES ('9', '1', 'user_belongsto_role_relationship', 'relationship', 'Role', '0', '1', '1', '1', '1', '0', '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', '10');
INSERT INTO `data_rows` VALUES ('10', '1', 'user_belongstomany_role_relationship', 'relationship', 'Roles', '0', '1', '1', '1', '1', '0', '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', '11');
INSERT INTO `data_rows` VALUES ('11', '1', 'locale', 'text', 'Locale', '0', '1', '1', '1', '1', '0', '', '12');
INSERT INTO `data_rows` VALUES ('12', '1', 'settings', 'hidden', 'Settings', '0', '0', '0', '0', '0', '0', '', '12');
INSERT INTO `data_rows` VALUES ('13', '2', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', '', '1');
INSERT INTO `data_rows` VALUES ('14', '2', 'name', 'text', 'Name', '1', '1', '1', '1', '1', '1', '', '2');
INSERT INTO `data_rows` VALUES ('15', '2', 'created_at', 'timestamp', 'Created At', '0', '0', '0', '0', '0', '0', '', '3');
INSERT INTO `data_rows` VALUES ('16', '2', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '', '4');
INSERT INTO `data_rows` VALUES ('17', '3', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', '', '1');
INSERT INTO `data_rows` VALUES ('18', '3', 'name', 'text', 'Name', '1', '1', '1', '1', '1', '1', '', '2');
INSERT INTO `data_rows` VALUES ('19', '3', 'created_at', 'timestamp', 'Created At', '0', '0', '0', '0', '0', '0', '', '3');
INSERT INTO `data_rows` VALUES ('20', '3', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '', '4');
INSERT INTO `data_rows` VALUES ('21', '3', 'display_name', 'text', 'Display Name', '1', '1', '1', '1', '1', '1', '', '5');
INSERT INTO `data_rows` VALUES ('22', '1', 'role_id', 'text', 'Role', '1', '1', '1', '1', '1', '1', '', '9');
INSERT INTO `data_rows` VALUES ('23', '4', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', '', '1');
INSERT INTO `data_rows` VALUES ('24', '4', 'parent_id', 'select_dropdown', 'Parent', '0', '0', '1', '1', '1', '1', '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', '2');
INSERT INTO `data_rows` VALUES ('25', '4', 'order', 'text', 'Order', '1', '1', '1', '1', '1', '1', '{\"default\":1}', '3');
INSERT INTO `data_rows` VALUES ('26', '4', 'name', 'text', 'Name', '1', '1', '1', '1', '1', '1', '', '4');
INSERT INTO `data_rows` VALUES ('27', '4', 'slug', 'text', 'Slug', '1', '1', '1', '1', '1', '1', '{\"slugify\":{\"origin\":\"name\"}}', '5');
INSERT INTO `data_rows` VALUES ('28', '4', 'created_at', 'timestamp', 'Created At', '0', '0', '1', '0', '0', '0', '', '6');
INSERT INTO `data_rows` VALUES ('29', '4', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '', '7');
INSERT INTO `data_rows` VALUES ('30', '5', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', '', '1');
INSERT INTO `data_rows` VALUES ('31', '5', 'author_id', 'text', 'Author', '1', '0', '1', '1', '0', '1', '', '2');
INSERT INTO `data_rows` VALUES ('32', '5', 'category_id', 'text', 'Category', '1', '0', '1', '1', '1', '0', '', '3');
INSERT INTO `data_rows` VALUES ('33', '5', 'title', 'text', 'Title', '1', '1', '1', '1', '1', '1', '', '4');
INSERT INTO `data_rows` VALUES ('34', '5', 'excerpt', 'text_area', 'Excerpt', '1', '0', '1', '1', '1', '1', '', '5');
INSERT INTO `data_rows` VALUES ('35', '5', 'body', 'rich_text_box', 'Body', '1', '0', '1', '1', '1', '1', '', '6');
INSERT INTO `data_rows` VALUES ('36', '5', 'image', 'image', 'Post Image', '0', '1', '1', '1', '1', '1', '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', '7');
INSERT INTO `data_rows` VALUES ('37', '5', 'slug', 'text', 'Slug', '1', '0', '1', '1', '1', '1', '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', '8');
INSERT INTO `data_rows` VALUES ('38', '5', 'meta_description', 'text_area', 'Meta Description', '1', '0', '1', '1', '1', '1', '', '9');
INSERT INTO `data_rows` VALUES ('39', '5', 'meta_keywords', 'text_area', 'Meta Keywords', '1', '0', '1', '1', '1', '1', '', '10');
INSERT INTO `data_rows` VALUES ('40', '5', 'status', 'select_dropdown', 'Status', '1', '1', '1', '1', '1', '1', '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', '11');
INSERT INTO `data_rows` VALUES ('41', '5', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '0', '0', '0', '', '12');
INSERT INTO `data_rows` VALUES ('42', '5', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', '', '13');
INSERT INTO `data_rows` VALUES ('43', '5', 'seo_title', 'text', 'SEO Title', '0', '1', '1', '1', '1', '1', '', '14');
INSERT INTO `data_rows` VALUES ('44', '5', 'featured', 'checkbox', 'Featured', '1', '1', '1', '1', '1', '1', '', '15');
INSERT INTO `data_rows` VALUES ('45', '6', 'id', 'number', 'ID', '1', '0', '0', '0', '0', '0', '', '1');
INSERT INTO `data_rows` VALUES ('46', '6', 'author_id', 'text', 'Author', '1', '0', '0', '0', '0', '0', '', '2');
INSERT INTO `data_rows` VALUES ('47', '6', 'title', 'text', 'Title', '1', '1', '1', '1', '1', '1', '', '3');
INSERT INTO `data_rows` VALUES ('48', '6', 'excerpt', 'text_area', 'Excerpt', '1', '0', '1', '1', '1', '1', '', '4');
INSERT INTO `data_rows` VALUES ('49', '6', 'body', 'rich_text_box', 'Body', '1', '0', '1', '1', '1', '1', '', '5');
INSERT INTO `data_rows` VALUES ('50', '6', 'slug', 'text', 'Slug', '1', '0', '1', '1', '1', '1', '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', '6');
INSERT INTO `data_rows` VALUES ('51', '6', 'meta_description', 'text', 'Meta Description', '1', '0', '1', '1', '1', '1', '', '7');
INSERT INTO `data_rows` VALUES ('52', '6', 'meta_keywords', 'text', 'Meta Keywords', '1', '0', '1', '1', '1', '1', '', '8');
INSERT INTO `data_rows` VALUES ('53', '6', 'status', 'select_dropdown', 'Status', '1', '1', '1', '1', '1', '1', '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', '9');
INSERT INTO `data_rows` VALUES ('54', '6', 'created_at', 'timestamp', 'Created At', '1', '1', '1', '0', '0', '0', '', '10');
INSERT INTO `data_rows` VALUES ('55', '6', 'updated_at', 'timestamp', 'Updated At', '1', '0', '0', '0', '0', '0', '', '11');
INSERT INTO `data_rows` VALUES ('56', '6', 'image', 'image', 'Page Image', '0', '1', '1', '1', '1', '1', '', '12');
INSERT INTO `data_rows` VALUES ('57', '8', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', null, '1');
INSERT INTO `data_rows` VALUES ('58', '8', 'autor', 'text', 'Autor', '1', '1', '1', '1', '1', '1', null, '2');
INSERT INTO `data_rows` VALUES ('59', '8', 'descripcion', 'text', 'Descripcion', '1', '1', '1', '1', '1', '1', null, '3');
INSERT INTO `data_rows` VALUES ('60', '8', 'imagen', 'image', 'Imagen', '1', '1', '1', '1', '1', '1', null, '4');
INSERT INTO `data_rows` VALUES ('61', '8', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '1', '0', '1', null, '5');
INSERT INTO `data_rows` VALUES ('62', '8', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', null, '6');
INSERT INTO `data_rows` VALUES ('63', '9', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', null, '1');
INSERT INTO `data_rows` VALUES ('64', '9', 'autor', 'text', 'Autor', '1', '1', '1', '1', '1', '1', null, '2');
INSERT INTO `data_rows` VALUES ('65', '9', 'frase', 'text', 'Frase', '1', '1', '1', '1', '1', '1', null, '3');
INSERT INTO `data_rows` VALUES ('66', '9', 'imagen', 'text', 'Imagen', '0', '1', '1', '1', '1', '1', null, '4');
INSERT INTO `data_rows` VALUES ('67', '9', 'deleted_at', 'timestamp', 'Deleted At', '0', '1', '1', '1', '1', '1', null, '5');
INSERT INTO `data_rows` VALUES ('68', '9', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '1', '0', '1', null, '6');
INSERT INTO `data_rows` VALUES ('69', '9', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', null, '7');
INSERT INTO `data_rows` VALUES ('70', '11', 'id', 'text', 'Id', '1', '0', '0', '0', '0', '0', null, '1');
INSERT INTO `data_rows` VALUES ('71', '11', 'competidor', 'text', 'Competidor', '1', '1', '1', '1', '1', '1', null, '2');
INSERT INTO `data_rows` VALUES ('72', '11', 'videourl', 'text', 'Videourl', '1', '1', '1', '1', '1', '1', null, '3');
INSERT INTO `data_rows` VALUES ('73', '11', 'tcompetencia', 'text', 'Tcompetencia', '1', '1', '1', '1', '1', '1', null, '4');
INSERT INTO `data_rows` VALUES ('74', '11', 'tiempo', 'text', 'Tiempo', '0', '1', '1', '1', '1', '1', null, '5');
INSERT INTO `data_rows` VALUES ('75', '11', 'repeticiones', 'text', 'Repeticiones', '0', '1', '1', '1', '1', '1', null, '6');
INSERT INTO `data_rows` VALUES ('76', '11', 'peso', 'text', 'Peso', '0', '1', '1', '1', '1', '1', null, '7');
INSERT INTO `data_rows` VALUES ('77', '11', 'comentario', 'text', 'Comentario', '0', '1', '1', '1', '1', '1', null, '8');
INSERT INTO `data_rows` VALUES ('78', '11', 'clasifica', 'text', 'Clasifica', '0', '1', '1', '1', '1', '1', null, '9');
INSERT INTO `data_rows` VALUES ('79', '11', 'deleted_at', 'timestamp', 'Deleted At', '0', '1', '1', '1', '1', '1', null, '10');
INSERT INTO `data_rows` VALUES ('80', '11', 'created_at', 'timestamp', 'Created At', '0', '1', '1', '1', '0', '1', null, '11');
INSERT INTO `data_rows` VALUES ('81', '11', 'updated_at', 'timestamp', 'Updated At', '0', '0', '0', '0', '0', '0', null, '12');

-- ----------------------------
-- Table structure for `data_types`
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of data_types
-- ----------------------------
INSERT INTO `data_types` VALUES ('1', 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', '1', '0', null, '2018-08-13 10:41:48', '2018-08-13 10:41:48');
INSERT INTO `data_types` VALUES ('2', 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', null, '', '', '1', '0', null, '2018-08-13 10:41:48', '2018-08-13 10:41:48');
INSERT INTO `data_types` VALUES ('3', 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', null, '', '', '1', '0', null, '2018-08-13 10:41:49', '2018-08-13 10:41:49');
INSERT INTO `data_types` VALUES ('4', 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', null, '', '', '1', '0', null, '2018-08-13 10:41:53', '2018-08-13 10:41:53');
INSERT INTO `data_types` VALUES ('5', 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', '1', '0', null, '2018-08-13 10:41:54', '2018-08-13 10:41:54');
INSERT INTO `data_types` VALUES ('6', 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', null, '', '', '1', '0', null, '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `data_types` VALUES ('8', 'carrusels', 'carrusels', 'Carrusel', 'Carrusels', null, 'App\\carrusel', null, null, null, '1', '0', '{\"order_column\":null,\"order_display_column\":null}', '2018-08-13 12:26:58', '2018-08-13 12:26:58');
INSERT INTO `data_types` VALUES ('9', 'motivadoras', 'motivadoras', 'Motivadora', 'Motivadoras', null, 'App\\motivadora', null, null, null, '1', '0', '{\"order_column\":null,\"order_display_column\":null}', '2018-08-13 12:31:37', '2018-08-13 12:31:37');
INSERT INTO `data_types` VALUES ('11', 'compvideos', 'compvideos', 'Compvideo', 'Compvideos', 'voyager-power', 'App\\compvideos', null, '\\App\\Http\\Controllers\\Voyager\\CalifvideosController', null, '1', '0', '{\"order_column\":\"competidor\",\"order_display_column\":null}', '2018-08-14 16:16:35', '2018-08-15 01:30:50');

-- ----------------------------
-- Table structure for `menu_items`
-- ----------------------------
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu_items
-- ----------------------------
INSERT INTO `menu_items` VALUES ('1', '1', 'Dashboard', '', '_self', 'voyager-boat', null, null, '1', '2018-08-13 10:41:50', '2018-08-13 10:41:50', 'voyager.dashboard', null);
INSERT INTO `menu_items` VALUES ('2', '1', 'Media', '', '_self', 'voyager-images', null, null, '5', '2018-08-13 10:41:50', '2018-08-14 16:23:33', 'voyager.media.index', null);
INSERT INTO `menu_items` VALUES ('3', '1', 'Users', '', '_self', 'voyager-person', null, null, '4', '2018-08-13 10:41:50', '2018-08-14 16:23:33', 'voyager.users.index', null);
INSERT INTO `menu_items` VALUES ('4', '1', 'Roles', '', '_self', 'voyager-lock', null, null, '3', '2018-08-13 10:41:50', '2018-08-14 16:23:33', 'voyager.roles.index', null);
INSERT INTO `menu_items` VALUES ('5', '1', 'Tools', '', '_self', 'voyager-tools', null, null, '9', '2018-08-13 10:41:50', '2018-08-13 10:41:50', null, null);
INSERT INTO `menu_items` VALUES ('6', '1', 'Menu Builder', '', '_self', 'voyager-list', null, '5', '1', '2018-08-13 10:41:50', '2018-08-14 16:23:29', 'voyager.menus.index', null);
INSERT INTO `menu_items` VALUES ('7', '1', 'Database', '', '_self', 'voyager-data', null, '5', '2', '2018-08-13 10:41:50', '2018-08-14 16:23:29', 'voyager.database.index', null);
INSERT INTO `menu_items` VALUES ('8', '1', 'Compass', '', '_self', 'voyager-compass', null, '5', '3', '2018-08-13 10:41:50', '2018-08-14 16:23:29', 'voyager.compass.index', null);
INSERT INTO `menu_items` VALUES ('9', '1', 'BREAD', '', '_self', 'voyager-bread', null, '5', '4', '2018-08-13 10:41:50', '2018-08-14 16:23:29', 'voyager.bread.index', null);
INSERT INTO `menu_items` VALUES ('10', '1', 'Settings', '', '_self', 'voyager-settings', null, null, '10', '2018-08-13 10:41:50', '2018-08-14 16:23:30', 'voyager.settings.index', null);
INSERT INTO `menu_items` VALUES ('11', '1', 'Categories', '', '_self', 'voyager-categories', null, null, '8', '2018-08-13 10:41:53', '2018-08-13 10:41:53', 'voyager.categories.index', null);
INSERT INTO `menu_items` VALUES ('12', '1', 'Posts', '', '_self', 'voyager-news', null, null, '6', '2018-08-13 10:41:54', '2018-08-14 16:23:33', 'voyager.posts.index', null);
INSERT INTO `menu_items` VALUES ('13', '1', 'Pages', '', '_self', 'voyager-file-text', null, null, '7', '2018-08-13 10:41:55', '2018-08-14 16:23:33', 'voyager.pages.index', null);
INSERT INTO `menu_items` VALUES ('14', '1', 'Hooks', '', '_self', 'voyager-hook', null, '5', '5', '2018-08-13 10:41:57', '2018-08-14 16:23:30', 'voyager.hooks', null);
INSERT INTO `menu_items` VALUES ('15', '1', 'Carrusels', '', '_self', null, null, null, '11', '2018-08-13 12:26:58', '2018-08-14 16:23:30', 'voyager.carrusels.index', null);
INSERT INTO `menu_items` VALUES ('16', '1', 'Motivadoras', '', '_self', null, null, null, '12', '2018-08-13 12:31:38', '2018-08-14 16:23:30', 'voyager.motivadoras.index', null);
INSERT INTO `menu_items` VALUES ('17', '1', 'Videos Competidores', '', '_self', 'voyager-trophy', '#000000', null, '2', '2018-08-14 16:16:35', '2018-08-15 02:19:59', 'voyager.compvideos.index', 'null');

-- ----------------------------
-- Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', 'admin', '2018-08-13 10:41:50', '2018-08-13 10:41:50');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('3', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('4', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('5', '2018_07_30_202454_suscriptores', '1');
INSERT INTO `migrations` VALUES ('6', '2016_01_01_000000_add_voyager_user_fields', '2');
INSERT INTO `migrations` VALUES ('7', '2016_01_01_000000_create_data_types_table', '2');
INSERT INTO `migrations` VALUES ('8', '2016_01_01_000000_create_pages_table', '2');
INSERT INTO `migrations` VALUES ('9', '2016_01_01_000000_create_posts_table', '2');
INSERT INTO `migrations` VALUES ('10', '2016_02_15_204651_create_categories_table', '2');
INSERT INTO `migrations` VALUES ('11', '2016_05_19_173453_create_menu_table', '2');
INSERT INTO `migrations` VALUES ('12', '2016_10_21_190000_create_roles_table', '2');
INSERT INTO `migrations` VALUES ('13', '2016_10_21_190000_create_settings_table', '2');
INSERT INTO `migrations` VALUES ('14', '2016_11_30_135954_create_permission_table', '2');
INSERT INTO `migrations` VALUES ('15', '2016_11_30_141208_create_permission_role_table', '2');
INSERT INTO `migrations` VALUES ('16', '2016_12_26_201236_data_types__add__server_side', '2');
INSERT INTO `migrations` VALUES ('17', '2017_01_13_000000_add_route_to_menu_items_table', '2');
INSERT INTO `migrations` VALUES ('18', '2017_01_14_005015_create_translations_table', '2');
INSERT INTO `migrations` VALUES ('19', '2017_01_15_000000_make_table_name_nullable_in_permissions_table', '2');
INSERT INTO `migrations` VALUES ('20', '2017_03_06_000000_add_controller_to_data_types_table', '2');
INSERT INTO `migrations` VALUES ('21', '2017_04_11_000000_alter_post_nullable_fields_table', '2');
INSERT INTO `migrations` VALUES ('22', '2017_04_21_000000_add_order_to_data_rows_table', '2');
INSERT INTO `migrations` VALUES ('23', '2017_07_05_210000_add_policyname_to_data_types_table', '2');
INSERT INTO `migrations` VALUES ('24', '2017_08_05_000000_add_group_to_settings_table', '2');
INSERT INTO `migrations` VALUES ('25', '2017_11_26_013050_add_user_role_relationship', '2');
INSERT INTO `migrations` VALUES ('26', '2017_11_26_015000_create_user_roles_table', '2');
INSERT INTO `migrations` VALUES ('27', '2018_03_11_000000_add_user_settings', '2');
INSERT INTO `migrations` VALUES ('28', '2018_03_14_000000_add_details_to_data_types_table', '2');
INSERT INTO `migrations` VALUES ('29', '2018_03_16_000000_make_settings_value_nullable', '2');
INSERT INTO `migrations` VALUES ('34', '2018_08_06_181338_create_motivadoras_table', '3');
INSERT INTO `migrations` VALUES ('35', '2018_08_08_040429_create_carrusels_table', '3');
INSERT INTO `migrations` VALUES ('36', '2018_08_11_012805_create_tcompetencias_table', '4');
INSERT INTO `migrations` VALUES ('37', '2018_08_12_011839_create_compvideos_table', '5');

-- ----------------------------
-- Table structure for `motivadoras`
-- ----------------------------
DROP TABLE IF EXISTS `motivadoras`;
CREATE TABLE `motivadoras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `autor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frase` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` mediumtext COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of motivadoras
-- ----------------------------
INSERT INTO `motivadoras` VALUES ('1', 'Desconocido', 'Asegúrate de que tu peor enemigo no viva entre tus dos oídos', null, null, '2018-08-15 04:56:30', '2018-08-15 04:56:30');
INSERT INTO `motivadoras` VALUES ('2', 'Desconocido', 'El fracaso es la manera de empezar de nuevo, pero más inteligente', null, null, '2018-08-15 04:56:44', '2018-08-15 04:56:44');
INSERT INTO `motivadoras` VALUES ('3', 'Desconocido', 'El único lugar en que el éxito viene antes que el trabajo es en el diccionario', null, null, '2018-08-15 04:57:02', '2018-08-15 04:57:02');
INSERT INTO `motivadoras` VALUES ('4', 'Desconocido', 'No cuentes los días, haz que los días cuenten', null, null, '2018-08-15 04:57:19', '2018-08-15 04:57:19');

-- ----------------------------
-- Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('1', '0', 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `pages` VALUES ('2', '1', 'Que es Max Effort Challenge', 'Pequeño extracto de nuestra historia.', '<h1><span style=\"background-color: #000000; color: #ffcc00;\">Historia de Max Effort Challenge</span></h1>\r\n<p>Todos en alg&uacute;n momento de nuestra vida hemos competido, desde ni&ntilde;os compet&iacute;amos en quien ten&iacute;a m&aacute;s juguetes, en un partido de f&uacute;tbol, en un partido de boliball en la playa, el mejor castillo, y gracias a eso logramos sacar lo mejor de nosotros, sin la necesidad de ganar un premio, simplemente quer&iacute;amos demostrar que s&iacute; pod&iacute;amos, que no nos rendir&iacute;amos y d&aacute;bamos nuestro mayor esfuerzo.</p>\r\n<p><img src=\"http://127.0.0.1:8000/storage/pages/August2018/imagen11.png\" alt=\"\" width=\"400\" height=\"417\" /></p>\r\n<figure class=\"image\"><img title=\"Nuestra Historia\" src=\"http://127.0.0.1:8000/storage/pages/August2018/imagen 21.png\" alt=\"\" />\r\n<figcaption>Nuestro comienzo fue peque&ntilde;o, conllev&oacute; gran esfuerzo.</figcaption>\r\n</figure>\r\n<p>&nbsp;</p>\r\n<p>Creo que la competencia logra sacar de nosotros a&uacute;n lo que no imagin&aacute;bamos que pod&iacute;amos lograr, es por eso que iniciamos estos retos con el fin de sacar lo mejor de nosotros en cada competencia.</p>\r\n<h2><span style=\"color: #ffcc00; background-color: #000000;\">Motivaci&oacute;n</span></h2>\r\n<p>Una de las razones de que las persona hoy se no permanecen es por falta de motivaci&oacute;n. Algo que debes preguntarte siempre es, cual es</p>\r\n<p>tu motivaci&oacute;n en lo que haces, que es lo que te impulsa, hemos observado gente que va y viene en un gimnasio o box, y sabemos una de las razones, es por que no ten&iacute;an una motivaci&oacute;n clara.</p>\r\n<p>Queremos que cada persona que entrenan ya sea por gusto, por salud, por distracci&oacute;n cual sea su motivo, tengan una motivaci&oacute;n atraves de poner a prueba su estado f&iacute;sico en nuestras competencias, llev&aacute;ndote a dar tu m&aacute;ximo esfuerzo.</p>', 'pages/August2018/GYzw1bcP8OSvo8q2WD1E.png', 'que-es-max-effort-challenge', 'Max Effort Challenge Descripción', 'Qué Es, Quienes somos, información General', 'ACTIVE', '2018-08-14 18:35:14', '2018-08-14 19:02:08');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `permission_role`
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES ('1', '1');
INSERT INTO `permission_role` VALUES ('2', '1');
INSERT INTO `permission_role` VALUES ('3', '1');
INSERT INTO `permission_role` VALUES ('4', '1');
INSERT INTO `permission_role` VALUES ('5', '1');
INSERT INTO `permission_role` VALUES ('6', '1');
INSERT INTO `permission_role` VALUES ('7', '1');
INSERT INTO `permission_role` VALUES ('8', '1');
INSERT INTO `permission_role` VALUES ('9', '1');
INSERT INTO `permission_role` VALUES ('10', '1');
INSERT INTO `permission_role` VALUES ('11', '1');
INSERT INTO `permission_role` VALUES ('12', '1');
INSERT INTO `permission_role` VALUES ('13', '1');
INSERT INTO `permission_role` VALUES ('14', '1');
INSERT INTO `permission_role` VALUES ('15', '1');
INSERT INTO `permission_role` VALUES ('16', '1');
INSERT INTO `permission_role` VALUES ('17', '1');
INSERT INTO `permission_role` VALUES ('18', '1');
INSERT INTO `permission_role` VALUES ('19', '1');
INSERT INTO `permission_role` VALUES ('20', '1');
INSERT INTO `permission_role` VALUES ('21', '1');
INSERT INTO `permission_role` VALUES ('22', '1');
INSERT INTO `permission_role` VALUES ('23', '1');
INSERT INTO `permission_role` VALUES ('24', '1');
INSERT INTO `permission_role` VALUES ('25', '1');
INSERT INTO `permission_role` VALUES ('26', '1');
INSERT INTO `permission_role` VALUES ('27', '1');
INSERT INTO `permission_role` VALUES ('28', '1');
INSERT INTO `permission_role` VALUES ('29', '1');
INSERT INTO `permission_role` VALUES ('30', '1');
INSERT INTO `permission_role` VALUES ('31', '1');
INSERT INTO `permission_role` VALUES ('32', '1');
INSERT INTO `permission_role` VALUES ('33', '1');
INSERT INTO `permission_role` VALUES ('34', '1');
INSERT INTO `permission_role` VALUES ('35', '1');
INSERT INTO `permission_role` VALUES ('36', '1');
INSERT INTO `permission_role` VALUES ('37', '1');
INSERT INTO `permission_role` VALUES ('38', '1');
INSERT INTO `permission_role` VALUES ('39', '1');
INSERT INTO `permission_role` VALUES ('40', '1');
INSERT INTO `permission_role` VALUES ('42', '1');
INSERT INTO `permission_role` VALUES ('43', '1');
INSERT INTO `permission_role` VALUES ('44', '1');
INSERT INTO `permission_role` VALUES ('45', '1');
INSERT INTO `permission_role` VALUES ('46', '1');
INSERT INTO `permission_role` VALUES ('47', '1');
INSERT INTO `permission_role` VALUES ('48', '1');
INSERT INTO `permission_role` VALUES ('49', '1');
INSERT INTO `permission_role` VALUES ('50', '1');
INSERT INTO `permission_role` VALUES ('51', '1');
INSERT INTO `permission_role` VALUES ('52', '1');
INSERT INTO `permission_role` VALUES ('53', '1');
INSERT INTO `permission_role` VALUES ('54', '1');
INSERT INTO `permission_role` VALUES ('55', '1');
INSERT INTO `permission_role` VALUES ('56', '1');

-- ----------------------------
-- Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'browse_admin', null, '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `permissions` VALUES ('2', 'browse_bread', null, '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `permissions` VALUES ('3', 'browse_database', null, '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `permissions` VALUES ('4', 'browse_media', null, '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `permissions` VALUES ('5', 'browse_compass', null, '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `permissions` VALUES ('6', 'browse_menus', 'menus', '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `permissions` VALUES ('7', 'read_menus', 'menus', '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `permissions` VALUES ('8', 'edit_menus', 'menus', '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `permissions` VALUES ('9', 'add_menus', 'menus', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('10', 'delete_menus', 'menus', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('11', 'browse_roles', 'roles', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('12', 'read_roles', 'roles', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('13', 'edit_roles', 'roles', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('14', 'add_roles', 'roles', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('15', 'delete_roles', 'roles', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('16', 'browse_users', 'users', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('17', 'read_users', 'users', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('18', 'edit_users', 'users', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('19', 'add_users', 'users', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('20', 'delete_users', 'users', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('21', 'browse_settings', 'settings', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('22', 'read_settings', 'settings', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('23', 'edit_settings', 'settings', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('24', 'add_settings', 'settings', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('25', 'delete_settings', 'settings', '2018-08-13 10:41:51', '2018-08-13 10:41:51');
INSERT INTO `permissions` VALUES ('26', 'browse_categories', 'categories', '2018-08-13 10:41:53', '2018-08-13 10:41:53');
INSERT INTO `permissions` VALUES ('27', 'read_categories', 'categories', '2018-08-13 10:41:53', '2018-08-13 10:41:53');
INSERT INTO `permissions` VALUES ('28', 'edit_categories', 'categories', '2018-08-13 10:41:53', '2018-08-13 10:41:53');
INSERT INTO `permissions` VALUES ('29', 'add_categories', 'categories', '2018-08-13 10:41:53', '2018-08-13 10:41:53');
INSERT INTO `permissions` VALUES ('30', 'delete_categories', 'categories', '2018-08-13 10:41:53', '2018-08-13 10:41:53');
INSERT INTO `permissions` VALUES ('31', 'browse_posts', 'posts', '2018-08-13 10:41:54', '2018-08-13 10:41:54');
INSERT INTO `permissions` VALUES ('32', 'read_posts', 'posts', '2018-08-13 10:41:54', '2018-08-13 10:41:54');
INSERT INTO `permissions` VALUES ('33', 'edit_posts', 'posts', '2018-08-13 10:41:54', '2018-08-13 10:41:54');
INSERT INTO `permissions` VALUES ('34', 'add_posts', 'posts', '2018-08-13 10:41:54', '2018-08-13 10:41:54');
INSERT INTO `permissions` VALUES ('35', 'delete_posts', 'posts', '2018-08-13 10:41:54', '2018-08-13 10:41:54');
INSERT INTO `permissions` VALUES ('36', 'browse_pages', 'pages', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `permissions` VALUES ('37', 'read_pages', 'pages', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `permissions` VALUES ('38', 'edit_pages', 'pages', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `permissions` VALUES ('39', 'add_pages', 'pages', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `permissions` VALUES ('40', 'delete_pages', 'pages', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `permissions` VALUES ('41', 'browse_hooks', null, '2018-08-13 10:41:57', '2018-08-13 10:41:57');
INSERT INTO `permissions` VALUES ('42', 'browse_carrusels', 'carrusels', '2018-08-13 12:26:58', '2018-08-13 12:26:58');
INSERT INTO `permissions` VALUES ('43', 'read_carrusels', 'carrusels', '2018-08-13 12:26:58', '2018-08-13 12:26:58');
INSERT INTO `permissions` VALUES ('44', 'edit_carrusels', 'carrusels', '2018-08-13 12:26:58', '2018-08-13 12:26:58');
INSERT INTO `permissions` VALUES ('45', 'add_carrusels', 'carrusels', '2018-08-13 12:26:58', '2018-08-13 12:26:58');
INSERT INTO `permissions` VALUES ('46', 'delete_carrusels', 'carrusels', '2018-08-13 12:26:58', '2018-08-13 12:26:58');
INSERT INTO `permissions` VALUES ('47', 'browse_motivadoras', 'motivadoras', '2018-08-13 12:31:38', '2018-08-13 12:31:38');
INSERT INTO `permissions` VALUES ('48', 'read_motivadoras', 'motivadoras', '2018-08-13 12:31:38', '2018-08-13 12:31:38');
INSERT INTO `permissions` VALUES ('49', 'edit_motivadoras', 'motivadoras', '2018-08-13 12:31:38', '2018-08-13 12:31:38');
INSERT INTO `permissions` VALUES ('50', 'add_motivadoras', 'motivadoras', '2018-08-13 12:31:38', '2018-08-13 12:31:38');
INSERT INTO `permissions` VALUES ('51', 'delete_motivadoras', 'motivadoras', '2018-08-13 12:31:38', '2018-08-13 12:31:38');
INSERT INTO `permissions` VALUES ('52', 'browse_compvideos', 'compvideos', '2018-08-14 16:16:35', '2018-08-14 16:16:35');
INSERT INTO `permissions` VALUES ('53', 'read_compvideos', 'compvideos', '2018-08-14 16:16:35', '2018-08-14 16:16:35');
INSERT INTO `permissions` VALUES ('54', 'edit_compvideos', 'compvideos', '2018-08-14 16:16:35', '2018-08-14 16:16:35');
INSERT INTO `permissions` VALUES ('55', 'add_compvideos', 'compvideos', '2018-08-14 16:16:35', '2018-08-14 16:16:35');
INSERT INTO `permissions` VALUES ('56', 'delete_compvideos', 'compvideos', '2018-08-14 16:16:35', '2018-08-14 16:16:35');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', '0', null, 'Lorem Ipsum Post', null, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', '0', '2018-08-13 10:41:54', '2018-08-13 10:41:54');
INSERT INTO `posts` VALUES ('2', '0', null, 'My Sample Post', null, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', '0', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `posts` VALUES ('3', '0', null, 'Latest Post', null, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', '0', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `posts` VALUES ('4', '0', null, 'Yarr Post', null, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', '0', '2018-08-13 10:41:55', '2018-08-13 10:41:55');

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Administrator', '2018-08-13 10:41:50', '2018-08-13 10:41:50');
INSERT INTO `roles` VALUES ('2', 'user', 'Normal User', '2018-08-13 10:41:50', '2018-08-13 10:41:50');

-- ----------------------------
-- Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'site.title', 'Site Title', 'Max Effort Challenge', '', 'text', '1', 'Site');
INSERT INTO `settings` VALUES ('2', 'site.description', 'Site Description', 'Site Description', '', 'text', '2', 'Site');
INSERT INTO `settings` VALUES ('3', 'site.logo', 'Site Logo', '', '', 'image', '3', 'Site');
INSERT INTO `settings` VALUES ('4', 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', null, '', 'text', '4', 'Site');
INSERT INTO `settings` VALUES ('5', 'admin.bg_image', 'Admin Background Image', '', '', 'image', '5', 'Admin');
INSERT INTO `settings` VALUES ('6', 'admin.title', 'Admin Title', 'Voyager', '', 'text', '1', 'Admin');
INSERT INTO `settings` VALUES ('7', 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', '2', 'Admin');
INSERT INTO `settings` VALUES ('8', 'admin.loader', 'Admin Loader', '', '', 'image', '3', 'Admin');
INSERT INTO `settings` VALUES ('9', 'admin.icon_image', 'Admin Icon Image', '', '', 'image', '4', 'Admin');
INSERT INTO `settings` VALUES ('10', 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', null, '', 'text', '1', 'Admin');

-- ----------------------------
-- Table structure for `suscriptores`
-- ----------------------------
DROP TABLE IF EXISTS `suscriptores`;
CREATE TABLE `suscriptores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecnac` date NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` enum('H','M') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` enum('hombre','mujer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tcompetencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premium` tinyint(1) NOT NULL,
  `paypalemail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pago` int(11) DEFAULT NULL,
  `paypaldatos` text COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `suscriptores_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of suscriptores
-- ----------------------------
INSERT INTO `suscriptores` VALUES ('1', 'Moises', 'Aguilar', '1981-02-10', '28', 'H', 'hombre', '354', 'CrossBeginer', 'armandoaguilar1@hotmail.com', '$2y$10$IKjJ.UcCPHnu8P3dYRP0e.tBcPNr3nYFdS2tYNSlOqIfDWh1nfD/O', '1', null, null, null, 'suscriptor/avatars/5b730e4cda108cc0-desktop-backgrounds-fog-7919.jpg', null, 'Fnz2i0jhlHtQpZP07trBeITxrCo80QrFrLml31fktjxFDBPMiGzjBkNwjVMH', '2018-08-02 00:54:12', '2018-08-14 12:15:57', null);
INSERT INTO `suscriptores` VALUES ('2', 'Israel', 'Garcia', '1989-06-21', '34', 'H', 'hombre', '9935477811', 'GymInter', 'israel_hp@hotmail.com', '$2y$10$XGamBqCRoktTi/GYP3REEeb4maoRA2WuxQg1nqBcPHVioa0icZEDe', '1', null, null, null, 'suscriptor/avatars/5b73fe0a4b5c2imagen1.png', null, '4ZFuiLl7IK8dZvUzGc7Hq3b5QhsQreSpzkDy10Eptu1KzUZDtHY3rFXW7Xgn', '2018-08-13 14:22:05', '2018-08-15 05:18:50', null);

-- ----------------------------
-- Table structure for `tcompetencias`
-- ----------------------------
DROP TABLE IF EXISTS `tcompetencias`;
CREATE TABLE `tcompetencias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `competencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreclave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `costo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tcompetencias
-- ----------------------------
INSERT INTO `tcompetencias` VALUES ('1', 'CrossFit', 'Principante', 'CrossBeginer', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('2', 'CrossFit', 'Intermedio', 'CrossInter', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('3', 'CrossFit', 'RX(Avanzado)', 'CrossRX', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('4', 'Gymnastic', 'Intermedio', 'GymInter', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('5', 'Gymnastic', 'RX(Avanzado)', 'GymRX', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('6', 'Weightlifting', 'Intermedio', 'WeighInter', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('7', 'Weightlifting', 'Intermedio', 'WeightRX', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('8', 'Condition', 'Principante', 'ConditBeginer', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('9', 'Condition', 'Intermedio', 'ConditInter', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('10', 'Condition', '(RX)Avanzado', 'ConditRX', null, null, null, null);
INSERT INTO `tcompetencias` VALUES ('11', 'Bajar de Peso', 'Bajar de Peso', 'LossWeight', null, null, null, null);

-- ----------------------------
-- Table structure for `translations`
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of translations
-- ----------------------------
INSERT INTO `translations` VALUES ('1', 'data_types', 'display_name_singular', '5', 'pt', 'Post', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `translations` VALUES ('2', 'data_types', 'display_name_singular', '6', 'pt', 'Página', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `translations` VALUES ('3', 'data_types', 'display_name_singular', '1', 'pt', 'Utilizador', '2018-08-13 10:41:55', '2018-08-13 10:41:55');
INSERT INTO `translations` VALUES ('4', 'data_types', 'display_name_singular', '4', 'pt', 'Categoria', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('5', 'data_types', 'display_name_singular', '2', 'pt', 'Menu', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('6', 'data_types', 'display_name_singular', '3', 'pt', 'Função', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('7', 'data_types', 'display_name_plural', '5', 'pt', 'Posts', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('8', 'data_types', 'display_name_plural', '6', 'pt', 'Páginas', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('9', 'data_types', 'display_name_plural', '1', 'pt', 'Utilizadores', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('10', 'data_types', 'display_name_plural', '4', 'pt', 'Categorias', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('11', 'data_types', 'display_name_plural', '2', 'pt', 'Menus', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('12', 'data_types', 'display_name_plural', '3', 'pt', 'Funções', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('13', 'categories', 'slug', '1', 'pt', 'categoria-1', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('14', 'categories', 'name', '1', 'pt', 'Categoria 1', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('15', 'categories', 'slug', '2', 'pt', 'categoria-2', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('16', 'categories', 'name', '2', 'pt', 'Categoria 2', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('17', 'pages', 'title', '1', 'pt', 'Olá Mundo', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('18', 'pages', 'slug', '1', 'pt', 'ola-mundo', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('19', 'pages', 'body', '1', 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('20', 'menu_items', 'title', '1', 'pt', 'Painel de Controle', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('21', 'menu_items', 'title', '2', 'pt', 'Media', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('22', 'menu_items', 'title', '12', 'pt', 'Publicações', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('23', 'menu_items', 'title', '3', 'pt', 'Utilizadores', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('24', 'menu_items', 'title', '11', 'pt', 'Categorias', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('25', 'menu_items', 'title', '13', 'pt', 'Páginas', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('26', 'menu_items', 'title', '4', 'pt', 'Funções', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('27', 'menu_items', 'title', '5', 'pt', 'Ferramentas', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('28', 'menu_items', 'title', '6', 'pt', 'Menus', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('29', 'menu_items', 'title', '7', 'pt', 'Base de dados', '2018-08-13 10:41:56', '2018-08-13 10:41:56');
INSERT INTO `translations` VALUES ('30', 'menu_items', 'title', '10', 'pt', 'Configurações', '2018-08-13 10:41:57', '2018-08-13 10:41:57');

-- ----------------------------
-- Table structure for `user_roles`
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user_roles
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'Moises Aguilar', 'armandoaguilar1@hotmail.com', 'users/August2018/kBgjTETCjNg4m37KwxL7.jpg', '$2y$10$.nRDF8X6l0KKhWPxXDQepe69/HvCKHIElNsd/cV18Z5SN5h8aJXHK', '1', 'PZqXqi7qUz1woRFq2bz2dWCESu57eJydv5z8OQGdiCtmcitOpfZ7sp8uPFcN', '{\"locale\":\"es\"}', '2018-08-13 10:40:48', '2018-08-14 16:20:00', null);
