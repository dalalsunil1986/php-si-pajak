<?php
require("./app/base/MasterController.php");
require("./app/database/db.php");

if(isset($_GET['page'])) {
    switch($_GET['page']) {
        case 'login':
            require('./controller/LoginController.php');
            require('./view/login.php');
            break;
        default:
            require('./view/index.php');
    }
} else {
    require('./view/index.php');
}