<?php
    require 'index.php';
    start_page('Calculatrice');
    echo'
    <form action ="calcul.php" method="post">
        <input type="text" name ="op1">
        <input type="text" name ="op2">
        <input checked="checked" type="radio" name="op" value="*"/>*<br/>
        <input type="radio" name="op" value="+"/>+<br/>
        <input type="radio" name="op" value="-"/>-<br/>
        <input type="radio" name="op" value="/"/>/<br/>
        <button type="submit" value="Envoyer"></button>
    </form>
        ';
    end_page();
?>