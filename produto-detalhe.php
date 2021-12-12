<?php
   include_once 'include/_dados.php';

   include_once 'include/_header.php';

   include_once 'include/_menu.php';
?>
   
<?php

$codigo = $_GET['cod'];
$produto = $ConjuntosProd[$codigo];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<?php
    echo "<section class=\"box special\">
    <span class=\"image featured\"><img id=\"produto\" src=\"images/{$produto['foto']}\" height=\"500px\" width=\"100px\" alt=\"\" /></span>
    <h3>{$produto['nome']}</h3>
    <p>R$ {$produto['preco']}</p>
    <ul class=\"actions special\">
        <li><a href=\"\" class=\"button alt\">Comprar</a></li>
    </ul>
    </section>
    ";
?>

<?php
    include_once 'include/_footer.php';
?>

</body>
</html>