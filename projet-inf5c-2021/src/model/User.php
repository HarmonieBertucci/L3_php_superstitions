<?php
class User{
  protected $login;
  protected $psw;

  function __construct($login,$psw){
    $this->login=$login;
    $this->psw=$psw;

  }

  function getLogin(){
    return $this->login;
  }

  function getPsw(){
    return $this->psw;
  }

}


 ?>
