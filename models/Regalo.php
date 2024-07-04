<?php

namespace Model;

use Model\ActiveRecord;

class Regalo extends ActiveRecord {
    protected static $tabla = 'regalos';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;
    
     //json con las redes sociales del ponente, en form

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        
        
    }
}