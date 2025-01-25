<?php
    // $counter=0;
    // if(!empty($_COOKIE['counter'])){
    //     $counter = @(int) $_COOKIE['counter'];
    // }

    $counter = @(int) ($_COOKIE['counter']??0);
    var_dump($counter);
?>