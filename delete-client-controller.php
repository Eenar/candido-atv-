<?php 

     require_once 'conexao.php';
     
     $id = $_GET['id'];

     $sql = "DELETE FROM `clients` WHERE `id`=$id";

     if($conn->query($sql)) header('Location: list-clients.php');


?>