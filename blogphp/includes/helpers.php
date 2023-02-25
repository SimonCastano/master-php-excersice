<?php
function show_error($errors, $field){
    $icon_error = "<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
    <path d='M2 22V2H22V18H6L2 22ZM9.4 14L12 11.4L14.6 14L16 12.6L13.4 10L16 7.4L14.6 6L12 8.6L9.4 6L8 7.4L10.6 10L8 12.6L9.4 14Z' fill='black'/>
    </svg> ";

    $alert="";
    if(isset($errors[$field]) && !empty($field)){
        $alert = "<div class='alert-helper'>".$icon_error.$errors[$field]."</div>";
    }
    return $alert; 
}

$delete_sesion_errors =false;
function delete_errors(){
    if(isset($_SESSION['errors'])){ 
        $_SESSION['errors'] = null;
        $delete_sesion_errors = $_SESSION['errors'];
        return $delete_sesion_errors;
    }

    if(isset($_SESSION['userCreated'])){
        $_SESSION['userCreated'] =null;
        
    }
}

?>