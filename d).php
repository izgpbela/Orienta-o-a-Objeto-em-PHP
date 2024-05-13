<?php

class Triangulo {
    private $base;
    private $altura;
    
    public function setBase($base) {
        $this->base = $base;
    }
    
    public function setAltura($altura) {
        $this->altura = $altura;
    }
    
    public function calculaArea() {
        return ($this->base * $this->altura) / 2;
    }
}

// Exemplo de uso
$triangulo = new Triangulo();
$triangulo->setBase(8); 
$triangulo->setAltura(5); 
echo "Área do triângulo: " . $triangulo->calculaArea(); 

?>
