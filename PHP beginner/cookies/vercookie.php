<?php
/* para ver las cookies se unsa $_COOKIE*/


if(isset($_COOKIE['micookie'])){
    echo "<h1>Simon ".$_COOKIE['micookie']."</h1>";
}else{
    echo "la cookie no existe";
}

?>