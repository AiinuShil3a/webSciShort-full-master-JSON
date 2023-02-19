<?php
    $cs_id = htmlspecialchars($_GET["cs_id"]);
    include_once '../model/ConDB.php';
    include_once '../model/Course.php';
    $obj_name = new Course();
    $rs2 = $obj_name->getCourseDetail($cs_id);
?>