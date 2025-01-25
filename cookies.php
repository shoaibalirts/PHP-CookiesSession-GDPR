<?php
    setcookie('str', 'HelloWorld', expires_or_options:time()+60*24*60*60, path:"/");
    // var_dump($_COOKIE);
    echo $_COOKIE['str'];
    echo $_COOKIE['PHPSESSID'];
?>