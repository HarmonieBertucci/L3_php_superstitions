<?php
require_once("model/User.php");
class UserBuilder{
  protected $data;
  protected $error;

  public function __construct($data,$superstitionTab){
    $this->data=$data;
    $this->error=null;
    $this->superstitionTab=$superstitionTab;
  }

  public function getData(){
    return $this->data;
  }

  public function getError(){
    return $this->error;
  }

  public function createUser(){
    return $this->isValid();
  }
  function isValid(){
    $verif=true;
    if($this->data["login"]===""){
      $this->error .= "Vous n'avez pas renseigné de login.<br>";
      $verif= false;
    }
    if($this->data["psw"]===""){
      $this->error .= "Vous n'avez pas renseigné de mot de passe.<br>";
      $verif= false;
    }

    foreach($this->superstitionTab as $user){
      if($user->getLogin()===$this->data["login"]){
    	  $this->error .= "Ce login existe déjà.<br>";
        $verif= false;
      }
    }

    return $verif;
  }
}
 ?>
