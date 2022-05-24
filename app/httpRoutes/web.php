<?php
use HttpRoutes\{Route, Bootstrap};
use HttpRoutes\Exception\BootstrapException;

$route = new HttpRoutes\Route;

// write your routes here!

try {
  //Iniciando a aplicação
  $app = new Bootstrap($route, "http://localhost/http-routes-skeleton/public");

} catch (BootstrapException $e) {
  //Erros relacionados à rota
  http_response_code($e->getCode());
  if ($e->getCode() == 404 | $e->getCode() == 405) {
    die($e->getMessage());
  } else {
    die("Ocorreu um erro inesperado, lamentamos o ocorrido.<br> Detalhes DEBUG: '{$e->getMessage()}'");
  }
}