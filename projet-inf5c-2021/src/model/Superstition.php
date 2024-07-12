<?php
class Superstition{
  // titre donné par la personne qui ajoute la Superstition
  protected $titre;
  //si la Superstition est positive ou négative
  protected $etat;
  //descriptif de la Superstition
  protected $description;
  //Origine si connue de la Superstition
  protected $origine;
  //image si donnée par l'ajouteur
  protected $image;
  //date d'ajout de la Superstition
  protected $date;
  //login de la personne qui ajoute
  protected $ajouteur;

  function __construct($titre,$etat,$description,$origine,$image,$date,$ajouteur){
    $this->titre=$titre;
    $this->etat=$etat;
    $this->description=$description;
    $this->origine=$origine;
    $this->image=$image;
    $this->date=$date;
    $this->ajouteur=$ajouteur;
  }

  function getTitre(){
    return $this->titre;
  }

  function getEtat(){
    return $this->etat;
  }

  function getDescription(){
    return $this->description;
  }

  function getOrigine(){
    return $this->origine;
  }

  function getImage(){
    return $this->image;
  }

  function getDate(){
    return $this->date;
  }

  function getAjouteur(){
    return $this->ajouteur;
  }

}


 ?>
