<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Bimestrais</title>
</head>
<body>
    <h1> Médias Bimestrais </h1>
    <form method="POST" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" step="0.01" required>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" step="0.01 "required>
        <label for=nota3>Nota 3:</label>
        <input type="number" name="nota3" id="nota3" step="0.01 "required>
        <label for=nota4>Nota 4:</label>
        <input type="number" name="nota4" id="nota4" step="0.01 "required>
        <input type="submit" name="calcular" value='Calcular Média'>
</form>
<?php 
 if (isset($_POST['calcular'])){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $media =($nota1 + $nota2 + $nota3 + $nota4) /4;

    echo "<h2>Média: $media"</h2>;

    if ($media >= 7.5){
        echo "<p>Status:Aprovado</p>";
} elseif ($media >= 3 && $media <7.5){
    echo "<p>Status: Recuperação</p>";
} else {
    echo "<p>Status:Reprovado</p>";
    }
}
?>

</body>
</html>