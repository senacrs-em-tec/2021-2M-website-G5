<?php
    include_once 'include/_dados.php';

    include_once 'include/_header.php';

    include_once 'include/_menu.php';

    if (empty($_GET['cat']) == FALSE) {
        $categoria = $_GET['cat'];
    }
?>

<?php

foreach ($ConjuntosProd as &$produtos) { 
    if (!empty($categoria)){
        if (strtolower($produtos['categoria']) == strtolower($categoria)) {
            echo "
            <section class=\"box special\">
            <span class=\"image featured\"><img id=\"produto\" src=\"images/{$produtos['foto']}\" height=\"500px\" width=\"100px\" alt=\"\" /></span>
            <h3>{$produtos['nome']}</h3>
            <p>R$ {$produtos['preco']}</p>
            <ul class=\"actions special\">
                <li><a href=\"produto-detalhe.php?cod={$produtos['codigo']}\" class=\"button alt\">Comprar</a></li>
            </ul>
            </section>
            ";
        }
    } 
    
    else {
        echo "
        <section class=\"box special\">
        <span class=\"image featured\"><img id=\"produto\" src=\"images/{$produtos['foto']}\" height=\"500px\" width=\"100px\" alt=\"\" /></span>
        <h3>{$produtos['nome']}</h3>
        <p>R$ {$produtos['preco']}</p>
        <ul class=\"actions special\">
            <li><a href=\"produto-detalhe.php?cod={$produtos['codigo']}\" class=\"button alt\">Comprar</a></li>
        </ul>
        </section>
        ";
    }
}

?>

<?php

    include_once 'include/_footer.php';

?>
