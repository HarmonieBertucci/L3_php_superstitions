<?php

//require_once(__DIR__."/../model/ObjetBuilder.php");
class View{
  protected $title;
  protected $content;
  protected $router;

  public function __construct($router){
    $this->router=$router;
  }

  public function render(){
    include("squelette.php");
  }

  public function makeSuperstitionPage($superstition){
    $this->menu();
    $this->title="Page sur ".$superstition->getTitre();
    $this->content=$superstition->getTitre()." est une superstition.";
    $this->render();
  }

  public function makeUnknownSuperstitionPage(){
    echo "superstition inconnue";
  }

  public function showAccueilPage(){
    $this->menu();
    $this->title="Page d'accueil";
    $this->content="Bienvenue sur la page d'accueil";
    $this->render();
  }

  public function makeListPage($tabSuperstition){
    $this->menu();
    foreach ($tabSuperstition as $key => $superstition) {
      echo "<a href=\"".$this->router->getSuperstitionURL($key)."\">".$superstition->getTitre()."</a><br>";
    }
  }


  public function menu(){
    echo "<a href=\"superstition.php\">Accueil</a> ";
    echo "<a href=\"superstition.php?liste\">Liste</a> ";
    echo "<a href=\"superstition.php?action=nouveau\">Créer une nouvelle superstition</a> ";
    echo "<a href=\"superstition.php?action=connexion\">Se connecter/Créer un compte</a><br><hr>";
  }

  public function makeErrorPage(){
    $this->menu();
    echo"Vous vous êtes trompés xD";
  }

  public function makeConnexionPage($userBuilder){
    $this->menu();
    echo "Inscription : <br>";
    echo "<form action=".$this->router->getAccueilPage()." method=\"POST\" ><label>Login : <input type=\"text\" name=\"login\"/></label><br>
    <label>Password : <input type=\"password\" name=\"psw\" value=\"\"/></label><br>
    <button type=\"submit\" name=\"connexion\">envoyer</button>
    </form> <br>";
    echo $userBuilder->getError();
  }
  public function makeSuperstitionCreationPage(){
    $this->menu();
    echo "<form action=".$this->router->getAccueilPage()." method=\"POST\" ><label>Titre : <input type=\"text\" name=\"titre\"/></label><br>
    <label>Est elle négative ? : <input type=\"checkbox\" name=\"etat\" value=\"\"/></label><br>
    <label>Description : <textarea cols=\"30\" rows=\"5\" name=\"description\">Mettre du texte ici !</textarea></label><br>
    <label>Origine : <textarea cols=\"30\" rows=\"5\" name=\"origine\">Mettre du texte ici !</textarea></label><br>
    <button type=\"submit\" name=\"inscription\">envoyer</button>
    </form> <br>";
  }
}


 ?>
