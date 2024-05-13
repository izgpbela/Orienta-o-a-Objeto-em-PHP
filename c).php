<?php

class Losango {
    private $diagonalMaior;
    private $diagonalMenor;
    
    public function setDiagonalMaior($maior) {
        $this->diagonalMaior = $maior;
    }
    
    public function setDiagonalMenor($menor) {
        $this->diagonalMenor = $menor;
    }
    
    public function calculaArea() {
        return ($this->diagonalMaior * $this->diagonalMenor) / 2;
    }
}

// Exemplo de uso
$losango = new Losango();
$losango->setDiagonalMaior(10); 
$losango->setDiagonalMenor(6);
echo "Área do losango: " . $losango->calculaArea(); 

?>
