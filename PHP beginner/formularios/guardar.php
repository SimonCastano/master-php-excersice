<?php

if (isset($_POST['Titulo']) && isset($_POST['Descripcion'])){
    echo $_POST['Titulo'];
    echo "<br>";
    echo $_POST['Descripcion'];
}else{
    echo 'no enviaste el formulario';
}
    

?>