<?php
    require 'index.php';
    $operateurs = '*+-/';
    start_page('Calculatrice');
    echo'
    <form action ="calcul.php" method="post">
        <input type="text" name ="op1">
        <input type="text" name ="op2"> <br>';

    for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
    {
        echo '<input ';
        if($cpt == 0)
        {
            echo 'checked="checked" ';
        }
        echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
    }
    echo '<input type="submit" value="Envoyer">
    </form>
        ';
    end_page();
?>