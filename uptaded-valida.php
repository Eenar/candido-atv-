<?php
        require_once"conexao.php";
        
        $idCliente = $_GET['user'];

        

        $sql = "SELECT * FROM ´clients´ WHERE id=$idCliente";
        $result = $conn->query($sql);
        $row = $result->fetch_row();

        $name = $row[1];
        $cell = $row[2];
        $city = $row[3];

        if(isset($_POST['name'])){


            $name = $_POST['name'];
            $cell = $_POST['cell']; 
            $city = $_POST['city']; 

            empty($_POST[name]) ? $name = $row['1'] : '';
            empty($_POST[cell]) ? $cell = $row['2'] : '';
            empty($_POST[city]) ? $city = $row['3'] : '';

            $sql = "UPDATE `clients` SET `name`='$name',`cell`='$cell',`city`='$city' WHERE `id` = $idCliente";
            if ($conn->query($sql)) header('Location: list-clients.php');
        

        }else{
            header('Location: index.php');
        }




            


            

    
?>