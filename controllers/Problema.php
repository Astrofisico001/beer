<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Problema
 *
 * @author Eduardo
 */
require_once '../../conexion/Conexion.php';

class Problema {

    const TABLA = 'problemas';

    public function obtenerProblemasSinResolver() {
        
    }

    public function obtenerProblemasResueltos() {
        try {
            $conexion = new Conexion();
            $sql = "SELECT codigo_mesa, detalle,fecha FROM " . self::TABLA . " WHERE solucionado=1";
            $consulta = $conexion->prepare($sql);
            $consulta->execute();
            $registros = $consulta->fetchAll();
            return $registros;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function borrarProblemas() {
        
    }

}
