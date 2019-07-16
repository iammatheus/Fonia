<div class="box-content">
  <h2><i class="fas fa-pen"></i> Editar Usuário</h2>
  <form method="post" enctype="multipart/form-data">

    <?php
      if(isset($_POST['acao'])){
        //Enviei meu formulário.
        $usuario = new Usuario();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $description = $_POST['description'];
        $website = $_POST['website'];
        $twitter = $_POST['twitter'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $imagem = $_FILES['imagem'];
        $imagem_atual = $_POST['imagem_atual'];
        if($imagem['name'] != ''){
          //Existe upload de imagem
          if(Usuario::imagemValida($imagem)){
            Usuario::deletarImagem($imagem_atual);
            $imagem = Usuario::uploadImagem($imagem);
            if($usuario->atualizarUsuario($email,$password,$name,$genre,$description,$website,$twitter,$facebook,$instagram,$imagem)){
              $_SESSION['img'] = $imagem;
              Painel::alert('sucesso','Atualizado com sucesso!');
            }else{
              Painel::alert('erro','Ocorreu um erro ao atualizar as informações.');
            }
          }else{
            Painel::alert('erro','Formato de imagem inválido.');
          }
        }else{
          $imagem = $imagem_atual;
          if($usuario->atualizarUsuario($email,$password,$name,$genre,$description,$website,$twitter,$facebook,$instagram,$imagem)){
            Painel::alert('sucesso','Atualizado com sucesso!');
          }else{
            $imagem = $imagem_atual;
            if($usuario->atualizarUsuario($email,$password,$name,$genre,$description,$website,$twitter,$facebook,$instagram,$imagem)){
              Painel::alert('sucesso','Atualizado com sucesso!');
            }else{
              Painel::alert('erro','Ocorreu um erro ao atualizar as informações.');
            }
          }
        }
      }
    ?>

    <div class="form-group">
      <label>Email:</label>
      <input class="nome" type="text" name="email" required value="<?php echo $_SESSION['email']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Senha</label>
      <input type="password" name="password" required value="<?php echo $_SESSION['password']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Nome da Banda:</label>
      <input class="nome" type="text" name="name" required value="<?php echo $_SESSION['name']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Gênero:</label>
      <input class="nome" type="text" name="genre" required value="<?php echo $_SESSION['genre']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Descrição:</label>
      <input class="nome" type="text" name="description" required value="<?php echo $_SESSION['description']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Website:</label>
      <input class="nome" type="text" name="website" required value="<?php echo $_SESSION['website']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Twitter:</label>
      <input class="nome" type="text" name="twitter" required value="<?php echo $_SESSION['twitter']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Facebook:</label>
      <input class="nome" type="text" name="facebook" required value="<?php echo $_SESSION['facebook']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Instagram:</label>
      <input class="nome" type="text" name="instagram" required value="<?php echo $_SESSION['instagram']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <label>Imagem:</label>
      <input type="file" name="imagem">
      <input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img']; ?>">
    </div><!--form-group-->
    <div class="form-group">
      <input class="btnsubmit" type="submit" name="acao" value="Atualizar">
    </div><!--form-group-->
  </form>
</div><!--box-content-->
