<?php

declare(strict_types=1);

function var_dump_pretty($input) {
    echo '<pre>';
    var_dump($input);
    echo '</pre>';
}