<?php

function showAlert($alert) {
    $_SESSION['alert'] = $alert;
}

function printAlert() {
    if(isset($_SESSION['alert'])) {
        $alert = explode(":", $_SESSION['alert']);
        $type = $alert[0];
        $message = $alert[1];
        if($alert) {
            echo "<div class='alert alert-$type'>$message</div>";
        }
        unset($_SESSION['alert']);
    }    
}

function getActualLink() {
    $url = pathinfo("http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");    
    return $url['dirname'];
}

function redirect($route) {
    $actual_link = getActualLink();
    header("Location: $actual_link?page=$route");
}

function url($route, $params=[]) {
    $actual_link = getActualLink();
    $result = "$actual_link?page=$route";

    foreach($params as $key=>$param) {
        $result .= "&$key=$param";
    }
    echo $result;
}


?> 