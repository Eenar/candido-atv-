<?php

    require 'conexao.php';

    $sql = "SELECT * FROM clients";
    $query = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet"> 
    <title>Listar clientes</title>
</head>

<body>
<nav >
            <div class="navbar-wrapper">
                <div class="logo">
                    <a href="index.php"><img src="assets/logo.png" alt="Logo" width="100px"></a>
                </div>
                <div class="navigation">
                    <ul>
                        <a href="insert-client.php">Cadastro</a>
                        <a href="list-clients.php">Listagem de Clientes</a>
                    </ul>
                </div>
            </div>
        </nav>
    <main id="list-clients-main">
        <h1>Listagem de clientes</h1>
        
         <div class="clients-container">
          <?php while ($line = mysqli_fetch_assoc($query)){
              $name = $line['name'];
              $city = $line['city'];
              $cell = $line['cell'];
              
              echo "
              <div class='client-card'>
                <h3>$name</h3>
                <p><span>Cidade? </span>$city</p>
                <p><span>telefone? </span>$cell</p>
              </div>"; 
          }
          ?>
                 
         </div>
         
    </main>
    <script src="cell-mask.js"></script>
</body>

</html>