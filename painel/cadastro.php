<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once('../classes/Usuario.php');
      $user = new Usuario;
      if(isset($_POST['cadastrar_band'])){
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $confirmPassword = addslashes($_POST['confirmPassword']);
        $name = addslashes($_POST['name']);
        $genre = addslashes($_POST['genre']);
        $description = addslashes($_POST['description']);
        $website = addslashes($_POST['website']);
        $twitter = addslashes($_POST['twitter']);
        $facebook = addslashes($_POST['facebook']);
        $instagram = addslashes($_POST['instagram']);
        //verificar se está preenchido
        if(!empty($email) && !empty($password) && !empty($confirmPassword) && !empty($name) && !empty($genre) && !empty($description)){
          $user->conectar();
          if($user->msgErro == ""){
            if($password == $confirmPassword){
              if($user->cadastrar($email,$password,$name,$genre,$description,$website,$twitter,$facebook,$instagram)){
                echo '<p style="color: green;">Cadastrado com sucesso.</p>';
              }else{
                echo '<p style="color: red;">Email e/ou banda já cadastrado.</p>';
              }
            }else{
              echo '<p style="color: red;">As senhas não correspondem.</p>';
            }
          }else{
            echo '<p style="color: red;">Erro ao cadastrar.</p>';
          }
        }else{
          echo '<p style="color: red;">Preencha os campos obrigatórios!</p>';
        }
      }
    ?>
    <h2>Cadastrar Banda</h2>
    <form method="post">
      <input type="email" name="email" placeholder="Email" required maxlength="45"><br><br>
      <input type="password" name="password" placeholder="Password" required maxlength="45"><br><br>
      <input type="password" name="confirmPassword" placeholder="Confirm Password" required maxlength="45"><br><br>
      <input type="text" name="name" placeholder="Name" required maxlength="45"><br><br>
      <input type="text" name="genre" placeholder="Genre" required maxlength="45"><br><br>
      <textarea name="description" placeholder="Description" maxlength="45"></textarea><br><br>
      <input type="text" name="website" placeholder="Website" maxlength="45"><br><br>
      <input type="text" name="twitter" placeholder="Twitter" maxlength="45"><br><br>
      <input type="text" name="facebook" placeholder="Facebook" maxlength="45"><br><br>
      <input type="text" name="instagram" placeholder="Instagram" maxlength="45"><br><br>
      <input type="submit" name="cadastrar_band" value="Cadastrar Banda" maxlength="45"><br><br>
    </form>
    <p>Já tem uma conta? <a href="login.php">Logue agora!</a></p>


  </body>
</html>
