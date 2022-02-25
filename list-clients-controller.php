<?php
  require 'conexao.php';

  $sql = "SELECT * FROM clients";
  $query = $conn->query($sql);
?>