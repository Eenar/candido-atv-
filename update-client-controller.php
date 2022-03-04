<?php
       
       require_once "conexao.php";
        
        if(isset($_GET['id']) && isset($_POST['name'])){

           
            $idCliente = $_GET['id'];
            $name = $_POST['name'];
            $cell = $_POST['cell']; 
            $city = $_POST['city']; 

            $sql = "UPDATE `clients` SET `name`='$name',`cell`='$cell',`city`='$city' WHERE `id` = $idCliente";

            echo $sql; 

            if ($conn->query($sql)) header('Location: list-clients.php');
        

        }
?>