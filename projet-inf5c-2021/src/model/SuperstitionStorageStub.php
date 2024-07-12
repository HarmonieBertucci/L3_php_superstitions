<?php

require_once("SuperstitionStorage.php");
require_once("Superstition.php");
class SuperstitionStorageStub implements SuperstitionStorage{
  protected $superstitionTab;
  public function __construct(){
    $this->superstitionTab=array(
    	'medor' => new Superstition('Médor',"1",'1','2',"1","1","1"),
    	'felix' => new Superstition('Félix',"1",'1','2',"1","1","1"),
    	'denver' => new Superstition('Denver',"1",'1','2',"1","1","1"),
      'jeanjean' => new Superstition('JeanJean',"1",'1','2',"1","1","1")
    );
  }

  public function read($id){
    return $this->superstitionTab[$id];
  }
  public function readAll(){
    return $this->superstitionTab;
  }

  public function create(Superstition $objet) {
    // TODO:
  }
}
?>
