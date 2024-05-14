<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Exercício 124 b </title>
</head>
<body>
<?php
class Adulto {
    private float $peso;

    public function __construct(float $peso) {
        $this->peso = $peso;
    }

    public function engordar(float $quilos): void {
        if ($quilos > 0) {
            $this->peso += $quilos;
        } else {
            echo "A quantidade deve ser positiva.";
        }
    }

    public function emagrecer(float $quilos): void {
        if ($quilos > 0) {
            $this->peso -= $quilos;
        } else {
            echo "A quantidade deve ser positiva.";
        }
    }

    public function getPeso(): float {
        return $this->peso;
    }
}
?>
</body>
</html>