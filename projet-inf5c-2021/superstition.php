<?php

set_include_path("./src");

require_once("Router.php");
//création d'un routeur
$router = new Router();
$router->main();
?>
