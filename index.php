<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
    <h1>Média aritmética</h1>
    <?php 
    $valor1=$_GET['n1'] ?? 0;
    $peso1=$_GET['p1'] ?? 0;
    $valor2=$_GET['n2'] ?? 0;
    $peso2=$_GET['p2'] ?? 0;
    
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
    <label for="N1">Valor 1</label>
    <input type="number" name="n1" id="n1">
    <label for="p1">Peso 1</label>
    <input type="number" name="p1" id="p1">
    <label for="N2">Valor 2</label>
    <input type="number" name="n2" id="n2">
    <label for="p2">Peso 2</label>
    <input type="number" name="p2" id="p2">
    <input type="submit" value="Calcular">
    </form>
   </main>

   <section>
    <h2>Resultado</h2>
    <?php 
    $ma = $valor1 + $valor2 / 2;
    $mp = ($valor1*$peso1 + $valor2*$peso2)/($peso1 + $peso2); 
    echo"A média aritmética entre o valor $valor1 e o valor $valor2 é igual a <strong>$ma</strong></p>";
    echo"<p>A média ponderada entre o valor $valor1 com peso $peso1 e o valor $valor2 com peso $peso2 é igual a<strong> ".number_format($mp,2)."</strong></p>";

    ?>
   </section>
</body>
</html>