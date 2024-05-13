<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Quadrado {
    private $lado;

    public function setLado(float $lado): void {
        $this->lado = $lado;
    }

    public function calculaArea(): float {
        return $this->lado * $this->lado;
    }
}

// Exemplo de uso
$quadrado = new Quadrado();
$quadrado->setLado(5.0); // Define o lado como 5.0
$area = $quadrado->calculaArea(); // Calcula a área
echo "A área do quadrado é: " . $area . " unidades quadradas.";
?>

</body>
</html>