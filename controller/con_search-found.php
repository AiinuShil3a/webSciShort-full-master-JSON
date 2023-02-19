<?php
    $keywords = $_GET['keywords'];
    include_once '../model/ConDB.php';
    include_once '../model/Course.php';
    $obj_name = new Course();
    $rs2 = $obj_name->getCourseforSearch($keywords);
    $no = 0;
    foreach($rs2 as $key){
        $no++;
    }
    echo $no;
?>