<?php

class Retangulo {
    private $ladoMaior;
    private $ladoMenor;

    public function setLadoMaior(float $ladoMaior): void {
        $this->ladoMaior = $ladoMaior;
    }

    public function setLadoMenor(float $ladoMenor): void {
        $this->ladoMenor = $ladoMenor;
    }

    public function calculaArea(): float {
        return $this->ladoMaior * $this->ladoMenor;
    }
}

// Exemplo de uso
$retangulo = new Retangulo();
$retangulo->setLadoMaior(8.0); // Define o lado maior como 8.0
$retangulo->setLadoMenor(5.0); // Define o lado menor como 5.0
$areaRetangulo = $retangulo->calculaArea(); // Calcula a área do retângulo
echo "A área do retângulo é: " . $areaRetangulo . " unidades quadradas.";
?>
