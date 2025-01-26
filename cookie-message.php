<?php
if(!empty($_GET['cookieok'])){
    setcookie('cookieok','1', path:'/');
    header("Location: cookie-message.php");
    die();
}
if (!empty($_COOKIE['cookieok'])) {
    session_start();
    session_regenerate_id();
    $counter = @(int) ($_COOKIE['counter'] ?? 0);
    setcookie('counter', $counter + 1, path:'/');
    var_dump($counter);
} else {
    echo "<p>Do you allow cookies: <a href='cookie-message.php?cookieok=yes'>Yes</a>, <a href='cookierules.php?cookieok=no'>No</a></p>";
}
?>