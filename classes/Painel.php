<?php
  class Painel{

    public static function logado(){
      return isset($_SESSION['login']) ? true : false;
    }

    public static function logout(){
      session_destroy();
      header('Location: '.INCLUDE_PATH_PAINEL);
    }

    public static function carregarPagina(){
      if(isset($_GET['url'])){
        $url = explode('/',$_GET['url']);
        if(file_exists('pages/'.$url[0].'.php')){
          include('pages/'.$url[0].'.php');
        }else{
          //Página n existe
          header('Location:'.INCLUDE_PATH_PAINEL);
        }
      }else{
        include('pages/home.php');
      }
    }

    

    public static function alert($tipo,$mensagem){
      if($tipo == 'sucesso'){
        echo '<div class="box-alert sucesso"><i class="fas fa-check"></i> '.$mensagem.'</div>';
      }else if($tipo == 'erro'){
        echo '<div class="box-alert erro"><i class="fas fa-times"></i> '.$mensagem.'</div>';
      }
    }
  }
?>
