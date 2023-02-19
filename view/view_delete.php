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
            <a class="navbar-brand" href="../index.php"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;&nbsp;<i
                    class="fas fa-atom"></i> SC Short Courses</a>
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
    <!--BR-->
    <br>
    <!-- Navigation_Search-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid px-4 px-lg-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    Found
                    <?php include "../controller/con_card_found_del.php"; ?> results.
                </ul>
                <a class="navbar-brand" href="#"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;&nbsp;<i class="fas fa-atom"></i> Delete SC Short Courses</a>
            </div>
        </div>
    </nav>
    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                    include "../controller/con_card_course_del.php";;
                ?>
            </div>
        </div>
    </section>
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