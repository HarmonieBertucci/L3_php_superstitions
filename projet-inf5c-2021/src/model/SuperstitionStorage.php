<?php
require_once("Superstition.php");
interface SuperstitionStorage{
  public function read($id);
  public function readAll();
  public function create(Superstition $a);
}
?>
