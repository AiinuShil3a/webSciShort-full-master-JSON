<?php
    include_once 'model/ConDB.php';
    include_once 'model/Course.php';
    $obj_name = new Course();
    $rs2 = $obj_name->getCourseRandoms();
    foreach($rs2 as $result2){
        
    }
?>