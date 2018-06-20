<?php
class Create_database
{
 protected $pdo;

 public function __construct()
 {
 $this->pdo = new PDO("mysql:host=localhost;", "root", "");
 }

 public function my_db()
 {

 $crear_db = $this->pdo->prepare('CREATE DATABASE IF NOT EXISTS isoldb COLLATE utf8_spanish_ci');
 $crear_db->execute();

 if($crear_db):
 $use_db = $this->pdo->prepare('USE isoldb');
 $use_db->execute();
 endif;

 if($use_db):

 $crear_tb_users = $this->pdo->prepare('
 CREATE TABLE IF NOT EXISTS usuario (

    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(40) NOT NULL,
    `mail` varchar(60) NOT NULL,
    `fecha_creacion` datetime DEFAULT NULL,
    `iden` varchar(15) NOT NULL,
    `direccion` varchar(60) NOT NULL,
    `telefono` varchar(20) NOT NULL,
    `entidad` char(1) NOT NULL,
    `foto` varchar(100) DEFAULT NULL,
    `pass` varchar(200) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `mail` (`mail`),
    UNIQUE KEY `iden` (`iden`)
     )');
 $crear_tb_users->execute();


 $crear_tb_posts = $this->pdo->prepare('
 CREATE TABLE IF NOT EXISTS publicacion (
   `id` int(11) NOT NULL AUTO_INCREMENT,
     `nombre` varchar(40) NOT NULL,
     `mail` varchar(60) NOT NULL,
     `post` text NOT NULL,
     `release_date` datetime DEFAULT NULL,
     `entidad` char(1) NOT NULL,
     `foto` varchar(100) DEFAULT NULL,
     `id_host` int(11) DEFAULT NULL,
     PRIMARY KEY (`id`),
     UNIQUE KEY `mail` (`mail`)
   )');
 $crear_tb_posts->execute();
 endif;

 }
}

$db = new Create_database();
$db->my_db();
       header('location: restaurar.php');
?>
