<?php
    // 2. Decouverte du PHP
    /*
    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';

    echo "$var1 + $var2" . "\n";
    echo $var1 + $var2 . "\n";
    //echo $var1 + $var3; // Warning: A non-numeric value encountered in index.php on line 12

    echo '<strong> Voici mon premier programme PHP </strong><br>' . "\n";
    echo 'C\'est pas mal non ?' . "\n";
    */

    // 3. Mutualisation du code
    /*
    function start_page ($title)
    {
        echo '<!DOCTYPE html> <html lang=fr>
              <head>
                <title>' . PHP_EOL . $title . '</title>
              </head>
              <body>' . PHP_EOL;
    };

    start_page('titre');

    function end_page (){
        echo '</body>
              </html>';
    }

    echo '<hr/><br><strong>Test</strong><br><hr>';
    end_page();
    */
    // 4. Date

    //echo date('l F d, Y');
    $jour = date('l F d, Y');
    echo ${date};
?>
