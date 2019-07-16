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
    <div class="box-login">
    <?php

      if(isset($_POST['acao'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `band` WHERE email = ? AND password = ?");
        $sql->execute(array($email,$password));
        if($sql->rowCount() == 1){
          $info = $sql->fetch();
          //Logamos com sucesso
          $_SESSION['login'] = true;
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;
          $_SESSION['active'] = $info['active'];
          $_SESSION['name'] = $info['name'];
          $_SESSION['genre'] = $info['genre'];
          $_SESSION['description'] = $info['description'];
          $_SESSION['website'] = $info['website'];
          $_SESSION['twitter'] = $info['twitter'];
          $_SESSION['facebook'] = $info['facebook'];
          $_SESSION['instagram'] = $info['instagram'];
          $_SESSION['img'] = $info['img'];
          header('Location: '.INCLUDE_PATH_PAINEL);
          die();
        }else{
          //Login falhou
          echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou Senha incorretos!</div>';
        }
      }

    ?>
      <h2>Efetue o login</h2>
      <form method="post">
        <input type="text" name="email" placeholder="Login">
        <input type="password" name="password" placeholder="Senha">
        <input class="btnsubmit" type="submit" name="acao" value="Logar!">
      </form>
    </div>
  </body>
</html>
