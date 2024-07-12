<?php
require_once("view/View.php");
require_once("control/Controller.php");
require_once("model/UserBuilder.php");


class Router{
  function main(){
    $vue=new View($this);
    $controlleur=new Controller($vue,new SuperstitionStorageStub());

    if(key_exists("liste", $_GET)){
      $controlleur->showList();
    }

    else if(key_exists("id",$_GET)){
      $controlleur->showInformation($_GET["id"]);
    }
    else if(key_exists("login",$_POST)){
      $userBuilder = new UserBuilder($_POST,$controlleur->getUsersList());
    $controlleur->saveNewUser($userBuilder);
      echo "bonjour".$_POST["login"];

    }

    else if(key_exists("action",$_GET)){
      if($_GET["action"]==="nouveau"){
        echo "nouveau";/*
        $animalBuilder = new AnimalBuilder(array(NAME_REF => "", SPECIES_REF=>"",AGE_REF=>""));
        $vue->makeAnimalCreationPage($animalBuilder);*/
      }else if($_GET["action"]==="sauverNouveau"){
        echo "sauverNouveau";/*
        $animalBuilder = new AnimalBuilder($_POST);
        $controlleur->saveNewAnimal($animalBuilder);*/
      }
      else if($_GET["action"]==="connexion"){
        $userBuilder = new UserBuilder(array("login" => "", "psw"=>""),$controlleur->getUsersList());

        $vue->makeConnexionPage($userBuilder);
      }else if($_GET["action"]==="nouveauUser"){
//$userBuilder = new UserBuilder($_POST);
//$controlleur->saveNewUser($userBuilder->getData()["login"],$userBuilder->getData()["psw"]);
      }
    }
    else{
      $vue->showAccueilPage();
    }
  }
  function getSuperstitionURL($id){
    return "superstition.php?&id=$id";
  }

  public function getAccueilPage(){
    return "superstition.php?";
  }
  public function getAccueilUserPage(){
    return "superstition.php?action=nouveauUser";
  }
}


 ?>
