<?php
    include "../controller/con_show_detail.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>หลักสูตรระยะสั้น - คณะมนุษยศาสตร์และสังคมศาสตร์ มหาวิทยาลัยราชภัฏนครปฐม</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../data/css/styles.css" rel="stylesheet" />
    <link href="../data/css/css.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="http://sc.npru.ac.th/"><i class="fas fa-atom"></i> SC Short Courses</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="../index.php">หน้าหลัก</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            จัดการหลักสูตร
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="view/view_add_form.php">เพิ่มหลักสูตร</a></li>
                            <li><a class="dropdown-item" href="view/view_edit.php">แก้ไขหลักสูตร</a></li>
                            <li><a class="dropdown-item" href="view/view_delete.php">ลบหลักสูตร</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="btn btn-outline-dark" type="submit" value="Search">LOGIN &nbsp; <i
                        class="fas fa-user"></i></button>
            </div>
        </div>
    </nav>
    <br>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid px-4 px-lg-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">

                </ul>
                <a class="navbar-brand" href="#"><i class="fas fa-atom"></i> Edit SC Short Courses</a>
            </div>
        </div>
    </nav>
    <br>
    <center>
        <div class="col-md-8">
            <form name="frmadd" method="post" action="../controller/con_edit_course.php" enctype="multipart/form-data">

                
                <input name="cs_id" type="hidden" id="ID" value="<?=$rs2['cs_id'];?>" >


                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">คอร์ส :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_name" class="form-control" id="cs_name" placeholder="<?=$rs2['cs_name'];?>">
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">ปี :</label>
                    <div class="col-sm-10">
                        <input list="cs_year" name="cs_year" class="form-control" placeholder="<?=$rs2['cs_year'];?>">
                        <datalist id="cs_year">
                            <option value="2021">หลักสูตรปี 2021</option>
                            <option value="2022">หลักสูตรปี 2022</option>
                            <option value="2023">หลักสูตรปี 2023</option>
                        </datalist>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">รูป :</label>
                    <div class="col-sm-10">
                        <input list="cs_img" name="cs_img" class="form-control" placeholder="<?=$rs2['cs_img'];?>">
                        <datalist id="cs_img">
                            <option value="images/01.png">images/01.png</option>
                            <option value="images/02.png">images/02.png</option>
                            <option value="images/03.png">images/03.png</option>
                            <option value="images/04.png">images/04.png</option>
                            <option value="images/05.png">images/05.png</option>
                            <option value="images/06.png">images/06.png</option>
                            <option value="images/07.png">images/07.png</option>
                            <option value="images/08.png">images/08.png</option>
                            <option value="images/09.png">images/09.png</option>
                            <option value="images/10.png">images/10.png</option>
                            <option value="images/11.png">images/11.png</option>
                            <option value="images/12.png">images/12.png</option>
                            <option value="images/13.png">images/13.png</option>
                            <option value="images/14.png">images/14.png</option>
                            <option value="images/15.png">images/15.png</option>
                            <option value="images/16.png">images/16.png</option>
                            <option value="images/17.png">images/17.png</option>
                            <option value="images/18.png">images/18.png</option>
                            <option value="images/19.png">images/19.png</option>
                            <option value="images/20.png">images/20.png</option>
                        </datalist>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">แผนการ :</label>
                    <div class="col-sm-10">
                        <input list="cs_schedule" name="cs_schedule" class="form-control" placeholder="<?=$rs2['cs_schedule'];?>">
                        <datalist id="cs_schedule">
                            <option value="pdf/01.pdf">pdf/01.pdf</option>
                            <option value="pdf/02.pdf">pdf/02.pdf</option>
                            <option value="pdf/03.pdf">pdf/03.pdf</option>
                            <option value="pdf/04.pdf">pdf/04.pdf</option>
                            <option value="pdf/05.pdf">pdf/05.pdf</option>
                            <option value="pdf/06.pdf">pdf/06.pdf</option>
                            <option value="pdf/07.pdf">pdf/07.pdf</option>
                            <option value="pdf/08.pdf">pdf/08.pdf</option>
                            <option value="pdf/09.pdf">pdf/09.pdf</option>
                            <option value="pdf/10.pdf">pdf/10pdf</option>
                            <option value="pdf/11.pdf">pdf/11.pdf</option>
                            <option value="pdf/12.pdf">pdf/12.pdf</option>
                            <option value="pdf/13.pdf">pdf/13.pdf</option>
                            <option value="pdf/14.pdf">pdf/14.pdf</option>
                            <option value="pdf/15.pdf">pdf/15.pdf</option>
                            <option value="pdf/16.pdf">pdf/16.pdf</option>
                        </datalist>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">ระยะเวลา :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_time" class="form-control" id="cs_time"
                            placeholder="<?=$rs2['cs_time'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">วันที่สมัคร :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_range_date" class="form-control" id="cs_range_date"
                            placeholder="<?=$rs2['cs_range_date'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">สถานที่ :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_location" class="form-control" id="cs_location"
                            placeholder="<?=$rs2['cs_location'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">กลุ่มเป้าหมาย :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_group" class="form-control" id="cs_group"
                            placeholder="<?=$rs2['cs_group'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">รายละเอียด :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_detail" class="form-control" id="cs_detail"
                            placeholder="<?=$rs2['cs_detail'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">จุดมุ่งหมาย :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_fcourse" class="form-control" id="cs_fcourse"
                            placeholder="<?=$rs2['cs_fcourse'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">การประเมิน :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_perform" class="form-control" id="cs_perform"
                            placeholder="<?=$rs2['cs_perform'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">สิ่งที่จะได้รับ :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_reward" class="form-control" id="cs_reward"
                            placeholder="<?=$rs2['cs_reward'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">ราคาคอร์ส :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_wallet" class="form-control" id="cs_wallet" placeholder="<?=$rs2['cs_wallet'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">วันที่อบรม :</label>
                    <div class="col-sm-10">
                        <input type="date" name="cs_date" class="form-control" id="cs_date">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">เบอร์ติดต่อ :</label>
                    <div class="col-sm-10">
                        <input type="text" name="cs_phone" class="form-control" id="cs_phone" placeholder="<?=$rs2['cs_phone'];?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-pencil-square"
                                aria-hidden="true"></i>&nbsp; บันทึกข้อมูล</button>
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </center>
    <br>
    <!-- footer-->
    <footer class="py-lg-5 bg-light ">
        <div class="container">
            <p class="m-0 text-center text-dark">Copyright &copy; Nakhon Pathom
                Rajabhat University 2021</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../data/js/scripts.js"></script>
</body>

</html>