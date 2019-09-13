<?php
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op = $_POST['op'];

    if('*' == $op)
    {
        $res = $op1 * $op2;
    }
    elseif('+' == $op)
    {
        $res = $op1 + $op2;
    }
    else
    {
        echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
    }
    if (isset($res)) echo 'op1 '. $op. ' op2 = ' . $res;
?>