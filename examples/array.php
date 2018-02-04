<?php

require_once './config/ConfigLibrairy.php';

use openSILEX\handsontablePHP\adapter\HandsontableSimple;

/**
 * An example to load a PHP array in Handsontable
 */

$hd = new HandsontableSimple();
$data = [
      ['', 'Tesla', 'Nissan', 'Toyota', 'Honda', 'Mazda', 'Ford'],
      ['2017', 10, 11, 12, 13, 15, 16],
      ['2018', 10, 11, 12, 13, 15, 16],
      ['2019', 10, 11, 12, 13, 15, 16],
      ['2020', 10, 11, 12, 13, 15, 16],
      ['2021', 10, 11, 12, 13, 15, 16]
    ];
$hd->setData($data);

?>
<html>
    <head>

        <?php
        echo $hd->loadJSLibraries(true);
        echo $hd->loadCSSLibraries();
        
        ?>
    </head>
    <div id='<?= $hd->getContainerName() ?>'>
        
    </div>
    <script>
        <?php
        echo $hd->generateJavascriptCode();
        ?>
    </script>
</html>
