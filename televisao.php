<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 124 a</title>
</head>
<body>
<?php
class Televisao {
    public $status;
    public $canal;
    public $volume;

    public function __construct() {
        $this->status = false;
        $this->canal = 3;
        $this->volume = 10;
    }

    public function ligaDesliga() {
        $this->status = !$this->status;
        if ($this->status) {
            echo "A televisão foi ligada.";
        } else {
            echo "A televisão foi desligada.";
        }
    }

    public function aumentaCanal() {
        if ($this->status) {
            $this->canal++;
            echo "Canal atual: " . $this->canal;
        } else {
            echo "A televisão está desligada.";
        }
    }

    public function diminuiCanal() {
        if ($this->status) {
            $this->canal--;
            echo "Canal atual: " . $this->canal;
        } else {
            echo "A televisão está desligada.";
        }
    }

    public function aumentaVolume() {
        if ($this->status) {
            $this->volume++;
            echo "Volume atual: " . $this->volume;
        } else {
            echo "A televisão está desligada.";
        }
    }

    public function diminuiVolume() {
        if ($this->status) {
            $this->volume--;
            echo "Volume atual: " . $this->volume;
        } else {
            echo "A televisão está desligada.";
        }
    }

    public function mostraCanal() {
        return $this->canal;
    }

    public function mostraVolume() {
        return $this->volume;
    }
}
?>
</body>
</html>