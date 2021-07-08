<?php
require '../global.php';

if(exist_param("gioi_thieu")){
    $VIEW_NAME = "home/gioi-thieu.php";
}
else if(exist_param("details")){
    $VIEW_NAME = "shopping/details.php";
    $header_indicator= 'details';
}
else{
    $VIEW_NAME = "shopping/shopping.php";
    $header_indicator= 'shopping';
}

require '../layout.php';