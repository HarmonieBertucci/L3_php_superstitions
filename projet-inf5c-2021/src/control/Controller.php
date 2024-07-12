<?php

set_include_path("./src");
require_once(__DIR__."/../model/Superstition.php");
require_once(__DIR__."/../model/SuperstitionStorageStub.php");
//require_once(__DIR__."/../model/ObjetBuilder.php");

class Controller{
  protected $view;
  protected $superstitionStorage;
  protected $usersList;

  function __construct($vue,$superstitionStorage){
    $this->view=$vue;
    $this->superstitionStorage=$superstitionStorage;
    $this->usersList=array(new User("toto","1234"),new User("titi","azerty"));
  }

  public function showInformation($id) {
    if(key_exists($id,$this->superstitionStorage->readAll())){
  	  $this->view->makeSuperstitionPage($this->superstitionStorage->read($id));
    }else{
      $this->view->makeUnknownSuperstitionPage();
    }
  }

  function showList(){
    $this->view->makeListPage($this->superstitionStorage->readAll());
  }

  public function getUsersList(){
    return $this->usersList;
  }
/*
  function saveNewAnimal($animalBuilder) {
    $nouvelAnimal=$animalBuilder->createAnimal();
    if($nouvelAnimal !== null){
      $this->animalStorage->create($nouvelAnimal);
      $this->view->makeAnimalPage($nouvelAnimal);
    }
    else{
      $this->view->makeAnimalCreationPage($animalBuilder);

    }
  }*/

  function saveNewUser($userBuilder) {
    $userBuilder->createUser();
    /*$nouvelUser=$userBuilder->createUser();
    echo $nouvelUser;
    if($nouvelUser !== null){
      array_push($this->usersListStorage,new User($userBuilder->getData()["login"],$userBuilder->getData()["psw"]));
      $this->view->makeUserPage($nouvelUser);
    }
    else{
      $this->view->makeUserCreationPage($userBuilder);

    }*/
  }



}
 ?>
