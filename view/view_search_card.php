<!-- Course section -->
<div class="col mb-5">
    <div class="card h-150">
        <a href="view_detail_course.php?cs_id=<?=$key['cs_id']?>" class="card-link">
            <!-- Product image-->
            <img class="card-img-top" src="../data/<?=$key['cs_img'];?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-left">
                    <!-- Product name-->
                    <h5 class="fw-bolder course-name">
                        <?=$key['cs_name'];?>
                    </h5>
                    <!-- course tag line-->
                    <div class="course-note"><i class="far fa-calendar-alt"></i> วันที่อบรม
                        <?=$key['cs_date'];?>
                    </div>
                    <!-- <div class="course-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                    <div class="course-note"><i class="far fa-building"></i> มหาวิทยาลัยราชภัฏนครปฐม</div>
                    <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                    <div class="course-note"><i class="fas fa-wallet"></i>
                        <?=$key['cs_wallet'];?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<!-- End Course section -->