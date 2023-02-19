<?php
    $cs_year = $_GET['cs_year'];
    include_once '../model/ConDB.php';
    include_once '../model/Course.php';
    $obj_name = new Course();
    $rs2 = $obj_name->getCourseYear($cs_year);
    $no = 0;
    foreach($rs2 as $result2){
        $no++;
    }
    echo $no;
?>