<?php
    include_once '../model/ConDB.php';
    include_once '../model/Course.php';
    $obj_name = new Course();
    $rs2 = $obj_name->getCourse();
    foreach($rs2 as $result2){
        include "view_card_edit.php";
    }
?>