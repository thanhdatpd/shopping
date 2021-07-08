<?php
require './global.php';

if(exist_param("gioi_thieu")){
    $VIEW_NAME = "home/gioi-thieu.php";
}
else if(exist_param("lien_he")){
    $VIEW_NAME = "home/lien-he.php";
}
else if(exist_param("gop_y")){
    $VIEW_NAME = "home/gop-y.php";
}
else if(exist_param("hoi_dap")){
    $VIEW_NAME = "home/hoi-dap.php";
}
else if(exist_param("shopping")){
    $VIEW_NAME = "home/shoping.php";
}
else{
    // require_once '../dao/hang-hoa.php';
    // $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "home/trang-chu.php";
}

require './layout.php';