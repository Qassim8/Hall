<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرح</title>
    <!-- Call Bootstrap CSS File -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <!-- Call FontAwesome CSS File -->
    <link rel="stylesheet" href="../../../css/all.min.css">
    <!-- Call Main CSS File -->
    <link rel="stylesheet" href="../../../css/main.css">
</head>
<body>
<div class="halls-content" dir="rtl">
    <div class="head d-flex align-items-center back-color py-3">
        <a href="../home.php" class="pt-2 pe-3"><i class="fa-solid fa-arrow-left text-white"></i></a>
        <div class="mx-auto text-center text-white fs-5">
            فرحتي
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <ul class="list-unstyled d-flex justify-content-between py-3 sticky-top bg-white">
                    <li><a href="#hall-icons" class="ms-3 fw-bold main-color">المعرض</a></li>
                    <li><a href="#services" class="mx-3 fw-bold main-color">الخدمات</a></li>
                    <li><a href="#contact" class="mx-3 fw-bold main-color">معلومات التواصل</a></li>
                </ul>
                <div id="hall-icons" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../../images/hall-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../images/hall-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../images/hall-3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#hall-icons" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#hall-icons" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div id="services" class="hall-info py-5" dir="rtl">
                    <div class="">
                        <div class="notes pt-3">
                            <p class="fs-4 fw-bold main-color ms-5">تفاصيل الخدمة</p>
                            <div class="row py-3 g-5">
                                <div class="col-lg-6">
                                    <div class="">
                                        <p class="fw-bold mb-1">دفع كاش او بتطبيقات بنكية</p>
                                        <p>يمكنك الدفع عبر التطبيقات البنكية او الدفع نقداً بعد الحجز عبر الموقع</p>
                                    </div>
                                    <div class="">
                                        <p class="fw-bold mb-1">موقف سيارات</p>
                                        <p>يتوفر موقف للسيارات يسع 30 سيارة</p>
                                    </div>
                                    <div class="">
                                        <p class="fw-bold mb-1">تقسيم الصالة</p>
                                        <p>يمكنك فصل الرجال عن النساء</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <p class="fw-bold mb-1">خدمةالطعام</p>
                                        <p>يمكنك شراء الطعام واستئجار الموزعين منا او الحجز دون الطعام وخدماته</p>
                                    </div>
                                    <div class="">
                                        <p class="fw-bold mb-1">مواعيد الحجز</p>
                                        <p class="">يتوفر الحجز صباحاً وعصراً وليلاً</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info mb-0">
                            <p class="fs-5 fw-bold main-color pt-3">معلومات الصالة</p>
                            <p class="">درة بحري هي صالة تقع في الخرطوم بحري تطل على .... تتيح الصالة خدمات رائعة للزبائن مع وجود تخفيضات في حالة الحجز لاكثر من دورة تحتوي الصالة على مساحة تسع لاكثر من 700 شخص ومع خدمة توزيع طعام مثالية تكون من افضل الصالات في الخرطوم بحري</p>
                        </div>
                    </div>
                </div>
                <div id='contact' class="contact">
                    <p class="fs-5 fw-bold main-color pb-1">تواصل معنا</p>
                    <div class="d-flex align-items-center pb-1">
                        <div class="element d-flex align-items-center ms-5">
                            <p class="fs-5 ms-3">0995683472</p>
                            <i class="fa-solid fa-phone main-color"></i>
                        </div>
                        <a href="#" class="element d-flex align-items-center">
                            <p class="fs-5 ms-3">تواصل عبر البريد</p>
                            <i class="fa-solid fa-message main-color"></i>
                        </a>
                    </div>
                    <p class="fw-bold mb-0">العنوان</p>
                    <p>الخرطوم بحري</p>
                </div>
            </div>
            <div class="col-lg-5">
                <form action="payment.php" class="m-5 py-5 sticky-top">
                    <label for="name" class="black my-2">الاسم</label>
                    <input type="text" name="" class="form-control" required>
                    <label for="" class="black my-2">رقم الهاتف</label>
                    <input type="number" name="" class="form-control" required>
                    <label for="" class="black my-2">تاريخ الزفاف</label>
                    <input type="date" name="" class="form-control" required>
                    <label for="" class="black my-2">الساعة</label>
                    <select name="" class="form-control" required>
                        <option value="10">9:00 - 12:00 ص</option>
                        <option value="1">1:30 - 4:30 م</option>
                        <option value="8">8:00 - 11:00 م</option>
                    </select>
                    <input type="submit" value="احجز" class="btn my-4 py-2 w-100 fw-bold back-color text-white" data-bs-toggle="modal" data-bs-target="#booking">
                </form>
            </div>
        </div>
    </div>
    <!-- Start Modal Popup -->
    <!-- Modal -->
    <!-- Start Empty Reserv Popup -->
    <div class="empty">
        <div class="modal fade" id="booking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="black fs-5">هذا الموعد شاغر انتقل للدفع لاكمال الحجز</p>
                </div>
                <div class="modal-footer">
                <a href="payment.php" class="btn back-color text-white">الدفع</a>
                <button type="button" class="btn text-white back-red" data-bs-dismiss="modal">الغاء</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- End Empty Reserv Popup -->
    <!-- Start Unavilable Reserv Popup -->
    <!-- <div class="fully">
        <div class="modal fade" id="booking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="black fs-5">عذراً هذا الموعد محجوز مسبقاً</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn text-white back-color" data-bs-dismiss="modal">حسناً</button>
                </div>
            </div>
            </div>
        </div>
    </div> -->
    <!-- End Unavilable Reserv Popup -->
<!-- End Modal Popup -->
</div>
    <!-- Call JavaScript Folders -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../../../js/bootstrap.bundle.min.js.map"></script>
    <script src="../../../js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/all.min.js"></script>
    <script src="../../../js/main.js"></script>
</body>
</html>