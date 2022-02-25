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
    <title>Cadastro de Clientes</title>
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
    <main id="insert-client-main">
        
        <div class="form-wrapper">
            <form method="POST" action="<?php echo $PHP_SELF; ?>">
                <h3>Atualizar Cliente</h3>
                <div class="input-control">
                    <label class="form-label" for="name">Nome:</label>
                    <input type="text" id="name" name="name" placeholder="Ex: João Victor Lourenço">
                </div>
                <div class="input-control">
                    <label class="form-label" for="cell">Telefone:</label>
                    <input type="text" id="cell" name="cell" placeholder="(34) 9 9999-9999" maxlength="14">
                </div>
                <div class="input-control">
                    <label class="form-label" for="city">Cidade:</label>
                    <select id="city-select" name="city">
                        <option value="">Selecione...</option>
                        <option value="Uberaba">Uberaba</option>
                        <option value="Uberlândia">Uberlândia</option>
                        <option value="Belo Horizonte">Belo Horizonte</option>
                        <option value="Franca">Franca</option>
                        <option value="Araxá">Araxá</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Brasilia">Brasilia</option>
                        <option value="Curitiba">Curitiba</option>
                        <option value="Campinas">Campinas</option>
                    </select>
                </div>  
                <button type="submit" class="btn">Enviar</button>
                
            </form>
        </div>
    </main>
    <script src="cell-mask.js"></script>
</body>

</html>