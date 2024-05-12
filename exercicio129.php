<?php
class Sequencia {
  private $inicio;
  private $fim;

  public function setInicio($inicio) {
    $this->inicio = $inicio;
  }

  public function setFim($fim) {
    $this->fim = $fim;
  }

  public function exibirTodosNumeros() {
    for ($i = $this->inicio; $i <= $this->fim; $i++) {
      echo $i . " ";
    }
  }

  public function exibirPares() {
    for ($i = $this->inicio; $i <= $this->fim; $i += 2) {
      echo $i . " ";
    }
  }

  public function exibirImpares() {
    for ($i = $this->inicio; $i <= $this->fim; $i += 2) {
      //  Correção: comece com i + 1 para números ímpares (se inicio for par)
      if ($i === $this->inicio && $this->inicio % 2 === 0) {
        $i++;
      }
      echo $i . " ";
    }
  }
}

?>
<h1>Formulário de Squência</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <label for="inicio">Selecione o valor inicial:</label>
  <input type="number" id="inicio" name="inicio" required><br><br>

  <label for="fim">Selecione o valor final:</label>
  <input type="number" id="fim" name="fim" required><br><br>

  <label for="mostrar">Mostrar:</label>
  <select id="mostrar" name="mostrar">
    <option value="todos">Todos</option>
    <option value="pares">Apenas os pares</option>
    <option value="impares">Apenas os impares</option>
  </select><br><br>

  <input type="submit" value="Mostrar a sequência">
</form>

<?php

// Processar os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_NUMBER_INT);
  $fim = filter_input(INPUT_POST, "fim", FILTER_SANITIZE_NUMBER_INT);
  $mostrar = filter_input(INPUT_POST, "mostrar", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // Crie uma instância da classe Sequencia
  $sequencia = new Sequencia();
  $sequencia->setInicio($inicio);
  $sequencia->setFim($fim);

  // Exibir a sequência selecionada com base na opção 'mostrar
  if ($mostrar == "todos") {
    $sequencia->exibirTodosNumeros();
  } elseif ($mostrar == "pares") {
    $sequencia->exibirPares();
  } elseif ($mostrar == "impares") {
    $sequencia->exibirImpares();
  }
}
