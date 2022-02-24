<?php
unset($_COOKIE['user']);
setcookie('user', null, time() + -1, "/");
setcookie('seller', null, time() + -1, "/");
setcookie('lead', null, time() + -1, "/");
header('Location: /unice/lead.php');
?>  

    
