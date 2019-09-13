<?php
    require 'index.php';
    $operateurs = '*+-/';
    start_page('Calculatrice');
    echo'
    <form action ="calcul.php" method="GET">
        <input type="text" name ="op1">
        <input type="text" name ="op2"> <br>';

    for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
    {
        echo '<input ';
        if($cpt == 0)
        {
            echo 'checked="checked" ';
        }
        echo 'type="submit" name="action" value="' . $operateurs[$cpt] . '"/>' . ' <br/>' . "\n";
    }
    end_page();
?>