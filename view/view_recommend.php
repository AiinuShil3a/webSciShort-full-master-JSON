<?php
    include "controller/con_recommend_course.php";
?>
<a href="view/view_detail_course.php?cs_id=<?=$result2['cs_id']?>">
    <img src="data/<?=$result2['cs_img']?>" class="d-block w-100 imgFead" alt="...">
    <div class="carousel-caption d-none d-md-block">
        <h5>
            <?=$result2['cs_name']?>
        </h5>
        <p>
            <?=$result2['cs_location']?>
        </p>
    </div>
</a>