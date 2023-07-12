<?php

namespace App;

class Investigacion extends ActiveRecord
{
    protected static $tabla = "investigaciones";
    protected static $columnasDB = ["id", "titulo", "autor", "fecha_publicacion", "resumen", "imagen"];


    public $id;
    public $titulo;
    public $autor;
    public $fecha_publicacion;
    public $resumen;
    public $imagen;


    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? "";
        $this->titulo = $args["titulo"] ?? "";
        $this->autor = $args["autor"] ?? "";
        $this->fecha_publicacion = $args["fecha_publicacion"] ?? "";
        $this->resumen = $args["resumen"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
    }

}