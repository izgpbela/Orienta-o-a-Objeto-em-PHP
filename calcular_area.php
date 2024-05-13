<?php
// Verificando se o formulário foi enviado
if(isset($_POST['calcula_area'])) {
    // Recuperando os valores do formulário
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    
    // Calculando a área do retângulo
    $area = $base * $altura;
    
    // Exibindo o resultado
    echo "<h2>A área do retângulo de é de:
    <br>

     $area</h2>";
} else {
    // Redirecionando para o formulário se o formulário não foi submetido
    header("Location: formulario.html");
    exit();
}
?>
