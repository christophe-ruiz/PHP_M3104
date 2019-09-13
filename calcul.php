<?php
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op = $_POST['op'];

    if('*' == $op)
    {

    }
    elseif('+' == $op)
    {
    }
    else
    {
        echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
    }

    echo 'op1 '. $op. ' op2 = ';
?>