<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementação</title>
</head>
<body>
<?php

// Empresa
class Empresa {
    private $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): String {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
}

// Tripulante
class Tripulante {
    private $tipo;

    public function __construct(string $tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo(): String {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }
}

// Aeroporto
class Aeroporto {
    private $nome;
    private $cidade;

    public function __construct(string $nome, string $cidade) {
        $this->nome = $nome;
        $this->cidade = $cidade;
    }

    public function getNome(): String {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getCidade(): String {
        return $this->cidade;
    }

    public function setCidade(string $cidade): void {
        $this->cidade = $cidade;
    }
}

// Voo
class Voo {
    private $codigo;
    private $origem;
    private $destino;

    public function __construct(string $codigo, string $origem, string $destino) {
        $this->codigo = $codigo;
        $this->origem = $origem;
        $this->destino = $destino;
    }

    public function getCodigo(): String {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): void {
        $this->codigo = $codigo;
    }

    public function getOrigem(): String {
        return $this->origem;
    }

    public function setOrigem(string $origem): void {
        $this->origem = $origem;
    }

    public function getDestino(): String {
        return $this->destino;
    }

    public function setDestino(string $destino): void {
        $this->destino = $destino;
    }
}

?>

</body>
</html>