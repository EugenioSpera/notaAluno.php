<?php

class Aluno {
    // Propriedades privadas
    private $nota1;
    private $nota2;
    private $nota3;
    private $nota4;
    private $media;

    // Método público para definir as notas
    public function setNotas($n1, $n2, $n3, $n4) {
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
        $this->nota4 = $n4;
        $this->calculaMedia();
    }

    // Método privado para calcular a média
    private function calculaMedia() {
        $this->media = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
    }

    // Método público para retornar a média
    public function getMedia() {
        return $this->media;
    }
}


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento de Notas</title>
</head>
<body>
    <h1>Notas dos Alunos</h1>
    
    <!-- Formulário para inserção das notas -->
    <form method="post" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" required><br><br>
        
        <label for="nota2">Nota 2:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" required><br><br>
        
        <label for="nota3">Nota 3:</label>
        <input type="number" step="0.01" name="nota3" id="nota3" required><br><br>
        
        <label for="nota4">Nota 4:</label>
        <input type="number" step="0.01" name="nota4" id="nota4" required><br><br>
        
        <input type="submit" name="calcular" value="Calcular Média">
    </form>