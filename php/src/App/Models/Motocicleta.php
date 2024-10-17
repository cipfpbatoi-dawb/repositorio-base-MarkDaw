<?php 
namespace MML\Models;
class Motocicleta extends Vehicle{
    private $cilindrada;

    public function __construct($tipus, $cilindrada){
        parent::__construct($tipus);
        $this->cilindrada = $cilindrada;
    }

    public function getCilindrada() {
        return $this->cilindrada;
    }

    public function setCilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }

}