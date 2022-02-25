<?php

    require_once"conexao.php";

    if(isset($_POST['name']) && isset($_POST['cell']) && isset($_POST['city'])){


        $name = $_POST['name'];
        $cell = $_POST['cell'];
        $city = $_POST['city'];

        $sql = "INSERT INTO `clients` (`name`, `cell`, `city`) VALUES ('$name','$cell','$city')";
        echo $sql;
        if ($conn->query($sql)) header('Location: list-clients.php');

    }else{
      header('Location: index.php');
    }


    

?>