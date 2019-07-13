<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
    <?php
      require_once('../classes/Usuario.php');
      $user = new Usuario;
      if(isset($_POST['logar'])){
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $name = $user;
        //verificar se está preenchido
        if(!empty($email) && !empty($password)){
          $user->conectar();
          if($user->msgErro == ""){
            if($user->logar($email,$password)){
              header('location: main.php');
            }else{
              echo '<p style="color: red;">Email e/ou senha incorretos!';
            }
          }else{
            echo 'Erro: '.$user->msgErro;
          }
        }else{
          echo '<p style="color: red;">Insira o email e/ou a senha.</p>';
        }
      }
    ?>

    <h2>Efetuar Login</h2>
    <form method="post">
      <input type="text" name="email" placeholder="Email" maxlength="45">
      <input type="password" name="password" placeholder="Password" maxlength="45">
      <input type="submit" name="logar" value="Logar!">
    </form>
    <a href="cadastro.php">Cadastrar banda</a>
  </body>
</html>
