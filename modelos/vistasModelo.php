<?php

  /**
   *
   */
  class vistasModelo{
    protected function obtener_vistas_modelo($vistas){
      $listaBlanca = ["admin", "adminList", "adminSearch", "book", "bookConfig", "bookInfo",
        "catalog", "category", "categoryList", "client", "clientList","clientSearch", "company",
        "companyList", "home", "myAccount", "myData", "provider", "providerList",
        "search"];
        if (in_array($vistas, $listaBlanca)) {
          if (is_file("./vistas/contenidos/".$vistas."-view.php")) {
            $contenido = "./vistas/contenidos/".$vistas."-view.php";
          }else {
            $contenido ="login";
          }
        }elseif($vistas == "login"){
          $contenido = "login";
        }elseif ($vistas == "index") {
          $contenido = "login";
        }else {
          $contenido = "login";
        }
        return $contenido;
    }
  }
