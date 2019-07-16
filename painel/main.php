<?php
  if(isset($_GET['logout'])){
    Painel::logout();
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Painel de Controle</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
  </head>
  <body>
    <div class="menu">
      <div class="menu-wraper">
        <div class="box-usuario">
          <?php
            if($_SESSION['img'] == ''){
          ?>
          <div class="avatar-usuario">
            <i class="fa fa-user"></i>
          </div><!--avatar-usuario-->
        <?php }else{ ?>
          <div class="imagem-usuario">
            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>"/>
          </div><!--imagem-usuario-->
        <?php } ?>
          <div class="nome-usuario">
            <p><?php echo $_SESSION['name']; ?></p>
            <p><?php echo ativo($_SESSION['active']); ?></p>
          </div><!--nome-usuario-->
        </div><!--box-usuario-->
        <div class="items-menu">
          <h2>Administração do Painel</h2>
          <a href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
        </div><!--items-menu-->
      </div><!--menu-wraper-->
    </div><!--menu-->

    <header>
      <div class="center">
        <div class="menu-btn">
          <i class="fa fa-bars"></i>
        </div><!--menu-btn-->
        <div class="logout">
          <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fas fa-home"></i> Página Inicial</a>
          <div style="padding: 0 10px;display:inline;"></div>
          <a href="<?php echo INCLUDE_PATH_PAINEL ?>?logout"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </div><!--logout-->
        <div class="clear"></div>
      </div><!--center-->
    </header>
    <div class="content">
      <?php Painel::carregarPagina(); ?>
    </div><!--content-->

  <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
  <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
  </body>
  </html>
