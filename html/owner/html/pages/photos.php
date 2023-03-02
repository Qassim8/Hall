<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Call Bootstrap CSS File -->
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <!-- Call FontAwesome CSS File -->
    <link rel="stylesheet" href="../../../../css/all.min.css">
    <!-- Call Main CSS File -->
    <link rel="stylesheet" href="../../../../css/main.css">
    <!-- Call Main Style File -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
        <div class="photos" dir="rtl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 end-0">
                        <div class="side-bar position-fixed" dir="rtl">
                            <nav class="nav flex-column">
                            <p class="h1 text-white mb-5">فرح</p>
                            <a class="nav-link active py-3" href="home.php">
                            <i class="fa-solid fa-circle-info fa-2x text-white pb-2"></i>
                                <p class="text-white fw-bold">المعلومات الاساسية</p>
                            </a>
                            <a class="nav-link active py-3" href="photos.php">
                            <i class="fa-solid fa-images fa-2x text-white pb-2"></i>
                                <p class="text-white fw-bold">الصور</p>
                            </a>
                            <a class="nav-link active py-3" href="booking.php">
                            <i class="fa-solid fa-calendar-days fa-2x text-white pb-2"></i>
                                <p class="text-white fw-bold">الطلبات</p>
                            </a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-9 p-5">
                        <div class="photos" dir="rtl">
                                <div class="container p-5">
                                <p class="py-3 text-black-50">إضافة الصور</p>
                                <div class="important-info p-3 mb-5 position-relative">
                                    <p>
                                    اختيارك الصور الواضحه التي تعبر عن الخدمات التي تقدمها بشكل مناسب
                                    هو الوسيلة الاهم لعرض اعمالك والطريقة الاسرع لزيادة عدد زوار صفحتك
                                    على موقعنا
                                    </p>
                                    <p>ولضمان افضل النتائج الرجاء التقييد بالشروط التالية :</p>
                                    <ol>
                                    <li>اضف على الاقل 5 صور توضح نشاط شركتك.</li>
                                    <li>اختار صور بدقة متوسطة الجودة لتسهيل عملية تحميل معرضك.</li>
                                    <li>
                                        يجب الا تحتوي الصور على اي معلومات اتصال (هاتف - بريد الكتروني)
                                        ولا مشكلة في اضافة شعار صالتك.
                                    </li>
                                    </ol>
                                </div>
                                <form class="add-photo d-flex p-3">
                                    <input type="file" class="open form-control">
                                    <input type="submit" value="اضافة الصور" class="btn py-2 mx-3 back-color text-white rounded-0">
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Call JavaScript Folders -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../../../../js/bootstrap.bundle.min.js.map"></script>
    <script src="../../../../js/bootstrap.bundle.min.js"></script>
    <script src="../../../../js/all.min.js"></script>
    <script src="../../../../js/main.js"></script>
</body>
</html>