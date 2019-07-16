<?php
  class Usuario{
    public function atualizarUsuario($email,$password,$name,$genre,$description,$website,$twitter,$facebook,$instagram,$imagem){
      $sql = MySql::conectar()->prepare("UPDATE `band` SET email=?,password=?,name=?,genre=?,description=?,website=?,twitter=?,facebook=?,instagram=?,img=? WHERE email=?");
      if($sql->execute(array($email,$password,$name,$genre,$description,$website,$twitter,$facebook,$instagram,$imagem,$_SESSION['email']))){
        return true;
      }else{
        return false;
      }
    }

    public static function imagemValida($imagem){
      if($imagem['type'] == 'image/jpeg' ||
         $imagem['type'] == 'image/jpg' ||
         $imagem['type'] == 'image/png')
      {
        $tamanho = intval($imagem['size']/1024);
        if($tamanho <= 300){
          return true;
        }else{
          return false;
        }
      }else{
        return false;
      }
    }

    public static function uploadImagem($file){
      if(move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL.'/uploads/'.$file['name'])){
        return $file['name'];
      }else{
        return false;
      }
    }

    public static function deletarImagem($file){
      @unlink('uploads/'.$file);
    }

  }

?>
