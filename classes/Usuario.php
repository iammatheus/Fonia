<?php
  include('../config.php');
  class Usuario{
    private $pdo;
    public $msgErro = "";

    public function conectar(){
      global $pdo;
      try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }catch(PDOException $e){
        $msgErro = $e->getMessage();
      }
    }

    public function cadastrar($email,$password,$name,$genre,$description,$website,$twitter,$facebook,$instagram){
      global $pdo;
      //Verificar se já existe o email cadastrado
      $sql = $pdo->prepare("SELECT `id` FROM `band` WHERE `email` = :e");
      $sql->bindValue(":e",$email);
      $sql->execute();
      $sql1 = $pdo->prepare("SELECT `id` FROM `band` WHERE `name` = :n");
      $sql1->bindValue(":n",$name);
      $sql1->execute();
      if($sql->rowCount() >= 1){
        return false;
      }else if($sql1->rowCount() >= 1){
        return false;
      }else{
        //Caso não, cadastrar.
        $sql = $pdo->prepare("INSERT INTO `band` (email,password,name,genre,description,website,twitter,facebook,instagram) VALUES(:e, :p, :n, :g, :d, :w, :t, :f, :i)");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":p",md5($password));
        $sql->bindValue(":n",$name);
        $sql->bindValue(":g",$genre);
        $sql->bindValue(":d",$description);
        $sql->bindValue(":w",$website);
        $sql->bindValue(":t",$twitter);
        $sql->bindValue(":f",$facebook);
        $sql->bindValue(":i",$instagram);
        $sql->execute();
        return true;
      }
    }

    public function logar($email,$senha){
      global $pdo;
      //Verificar se o email e senha estão cadastrados, se sim:
      $sql = $pdo->prepare("SELECT id,name FROM `band` WHERE email = :e AND password = :p");
      $sql->bindValue(":e",$email);
      $sql->bindValue(":p",md5($senha));
      $sql->execute();
      if($sql->rowCount() > 0){
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id'] = $dado['id'];
        $_SESSION['name'] = $dado['name'];
        return true;//logado com sucesso.
      }else{
        return false;//Não foi possíve logar.
      }
    }
    public function deslogar(){
      unset($_SESSION['id']);
      header('location: login.php');
    }
  }
?>
