<?php
  session_start();
  date_default_timezone_set('America/Sao_Paulo');
  $autoload = function($class){
    include('classes/'.$class.'.php');
  };
  spl_autoload_register($autoload);

  define('INCLUDE_PATH','http://localhost/teste_fonia/');
  define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
  define('BASE_DIR_PAINEL',__DIR__.'/painel');
  define('INCLUDE_PATH_USER','http://localhost/teste_fonia/painel/editar-usuario');

  //Constante para o painel
  define('NOME_EMPRESA','Fonia');

  //Conectar com o banco de dados.
  define('HOST','localhost');
  define('USER','root');
  define('PASSWORD','');
  define('DATABASE','fonia');

  //Funções
  function ativo($ativo){
    $arr = [
      '0' => 'Não ativado',
      '1' => 'Ativado',
    ];
    return $arr[$ativo];
  }
?>
