<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Oferta
 *
 * @author Eduardo
 */
require_once '../../conexion/Conexion.php';

class Oferta {

    const TABLA = 'ofertas';

    public function insertarOferta() {
        $conexion = new Conexion();
        $sql = "";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
    }

    public static function obetenerOfertas() {
        $conexion = new Conexion();
        $sql = "SELECT codigo_mesa,detalle,imagen_url,precio,producto FROM " . self::TABLA . "";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $registros = $consulta->fetchAll();
        return $registros;
    }

    public function actualizarOfertas() {
        $conexion = new Conexion();
        $sql = "";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
    }

}
