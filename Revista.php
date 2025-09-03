<?php

require_once("Autor.php");
require_once("Libro.php");

class Revista implements IPublicable{

    private string $periodicidad;
    private string $titulo;
    private int $anio;
    private Autor $autor;


    public function __construct(string $titulo, int $anio, Autor $autor, string $periodicidad) {
        
        $this->periodicidad = $periodicidad; 
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->autor = $autor;
    }

    public function getInfo(): string {
            
      return "Revista: {$this->titulo} ({$this->anio})\n" . $this->autor->getInfo();
    }
}
    