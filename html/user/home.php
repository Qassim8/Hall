<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرح</title>
    <!-- Call Bootstrap CSS File -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Call FontAwesome CSS File -->
    <link rel="stylesheet" href="../../css/all.min.css">
    <!-- Call Main CSS File -->
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
    <div class="home" dir="rtl">
        <div class="halls">
            <form class="filter py-2 text-center back-color" dir="rtl">
                <div class="dropdown ms-3">
                    <button class="btn filt dropdown-toggle" id="bd-versions" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                    <span class="fw-bold p-3">فلتر حسب الموقع الجغرافي</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="bd-versions">
                    <li><h6 class="dropdown-header">المدن</h6></li>
                    <li>
                        <a class="dropdown-item" href="">امدرمان</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="">الخرطوم</a>
                    </li>
                    <li>
                        <a class="dropdown-item current" aria-current="true" href="">بحري</a>
                    </li>
                    </ul>
                </div>
            </form>
            <div class="container">
                <div class="row py-5 mb-5 text-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="box position-relative">
                            <div class="img position-relative">
                                <img src="../../images/hall-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text d-flex align-items-center justify-content-between p-3">
                                <h3 class="black fs-5">برستيج</h3>
                                <a href="halls/prestige.php" class="text-white back-color fw-bold py-2 px-3">عرض</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box position-relative">
                            <div class="img position-relative">
                                <img src="../../images/hall-2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text d-flex align-items-center justify-content-between p-3">
                                <h3 class="black fs-5">السندباد</h3>
                                <a href="halls/sendpad.php" class="text-white back-color fw-bold py-2 px-3">عرض</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box position-relative">
                            <div class="img position-relative">
                                <img src="../../images/hall-3.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text d-flex align-items-center justify-content-between p-3">
                                <h3 class="black fs-5">درة بحري</h3>
                                <a href="halls/dora.php" class="text-white back-color fw-bold py-2 px-3">عرض</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box position-relative">
                            <div class="img position-relative">
                                <img src="../../images/hall-2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text d-flex align-items-center justify-content-between p-3">
                                <h3 class="black fs-5">تاجوج</h3>
                                <a href="halls/tajoj.php" class="text-white back-color fw-bold py-2 px-3">عرض</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box position-relative">
                            <div class="img position-relative">
                                <img src="../../images/hall-3.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text d-flex align-items-center justify-content-between p-3">
                                <h3 class="black fs-5">مارينا</h3>
                                <a href="halls/marina.php" class="text-white back-color fw-bold py-2 px-3">عرض</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box position-relative">
                            <div class="img position-relative">
                                <img src="../../images/hall-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text d-flex align-items-center justify-content-between p-3">
                                <h3 class="black fs-5">فرحتي</h3>
                                <a href="halls/farhaty.php" class="text-white back-color fw-bold py-2 px-3">عرض</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="link text-center position-fixed bottom-0 w-100">
            <div class="container d-flex justify-content-between align-items-center">
                <a href="reservation-info.php" class="d-flex flex-column justify-content-center w-100 pt-3">
                    <i class="fa-solid fa-book fs-4"></i>
                    <p class="fs-5">الحجوزات</p>
                </a>
                <a href="support.php" class="d-flex flex-column justify-content-center w-100 pt-3">
                    <i class="fa-solid fa-message fs-4"></i>
                    <p class="fs-5">الدعم</p>
                </a>
                <a href="more.php" class="d-flex flex-column justify-content-center w-100 pt-3">
                    <i class="fa-solid fa-ellipsis-h fs-4"></i>
                    <p class="fs-5">المزيد</p>
                </a>
            </div>
        </nav>
    </div>
    <!-- Call JavaScript Folders -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js.map"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>


<!-- 
                        <div class="dropdown ms-3">
                        <button class="btn btn-bd-light dropdown-toggle" id="bd-versions" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                        <span class="d-none d-lg-inline">Bootstrap</span> v5.0
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions">
                        <li><h6 class="dropdown-header">v5 releases</h6></li>
                        <li>
                            <a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/forms/select/">v5.1.3</a>
                        </li>
                        <li>
                            <a class="dropdown-item current" aria-current="true" href="/docs/5.0/forms/select/">v5.0.2</a>
                        </li>
                        <li><a class="dropdown-item" href="/docs/versions/">All versions</a></li>
                        </ul>
                    </div>
-->