
<?php

require 'Aluno.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
    // Recupera as notas enviadas pelo formulário
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    $nota3 = floatval($_POST['nota3']);
    $nota4 = floatval($_POST['nota4']);

    // Cria uma instância da classe Aluno e define as notas
    $aluno = new Aluno();
    $aluno->setNotas($nota1, $nota2, $nota3, $nota4);

    // Exibe a média
    echo "<h2>A média do aluno é: " . $aluno->getMedia() . "</h2>";
}
?>



