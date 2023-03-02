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
        <div class="hallinfo" dir="rtl">
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
                        <div class="">
                            <p class="text-black-50 p-2">
                                المعلومات الاساسية ومعلومات التواصل
                            </p>
                            <form class="info-form p-3">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="input px-2">
                                    <label class="">اسم الصالة</label>
                                    <input type="text" name="name" class="form-control my-2 w-100" placeholder="اسم الصالة"/>
                                    <label class="">البريد الالكتروني</label>
                                    <input type="email" name="email" class="form-control my-2 w-100" placeholder="البريد الالكتروني">
                                    <label class="">السعة</label>
                                    <input type="text" name="capacity" class="form-control my-2 w-100"placeholder="ادخل رابط مقعك الجغرافي">
                                    <label class="">اسم الحساب البنكي</label>
                                    <input type="text" name="account_name" class="form-control my-2 w-100"placeholder="ادخل الاسم المسجل به حسابك البنكي">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input px-2">
                                    <label class="">الموقع</label>
                                    <input type="text" name="location" class="form-control my-2 w-100"placeholder="ادخل رابط مقعك الجغرافي">
                                    <label>رقم الهاتف</label>
                                    <input type="number" name="phone" class="form-control my-2 w-100" placeholder="رقم الهاتف">
                                    <label>سعر الحجز</label>
                                    <input type="number" name="price" class="form-control my-2 w-100" placeholder="يقصد هنا 50%من المبلغ الكلي">
                                    <label class="">رقم الحساب البنكي</label>
                                    <input type="text" name="bank_account" class="form-control my-2 w-100"placeholder="ادخل رقم حسابك لدى بنك الخرطوم">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input px-2">
                                    <label class="">خدمات الصالة الاساسية</label>
                                    <textarea class="form-control w-100"></textarea>
                                    </div>
                                </div>
                                </div>
                                <input type="submit" value="حفظ" class="btn py-2 px-3 my-3 me-2 back-color fw-bold text-white rounded-0"/>
                            </form>
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