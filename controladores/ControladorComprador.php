<?php

require_once '../modelo.dto/CocheDto.class.php';
require_once '../modelo.dao/UsuarioCompradorDao.class.php';
require_once '../utlidades/Conexion.class.php';

 

 if (   isset($_POST['consultar'])  ) {
     
    $listado = array();
     
    $compradorDao = new UsuarioCompradorDao(); ///Objeto del comprador 
    $cocheDto = new CocheDto(); ///Set y get del coche
        
    $cocheDto->setCategoria($_POST['categoria'] );
    
    ///Metodo del comprador devuelve un array con el listado
    $listado = $compradorDao->cochesCategoria(  $cocheDto->getCategoria() ) ; 
    serialize($listado);
    
    header("Location: ../consultarCategoria.php?listado=".$listado);
    

 } 
