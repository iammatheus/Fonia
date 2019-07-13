<?php
  require_once('../classes/Usuario.php');
  session_start();
  if(!isset($_SESSION['id'])){
    header("location: login.php");
  }
  if(isset($_GET['logout'])){
    Usuario::deslogar();
  }
?>
<h1>Bem-vindo, <?php echo $_SESSION['name']; ?></h1>
<a href="?logout">[Sair]</a>
