<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الدفع</title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <!-- Call FontAwesome CSS File --> 
    <link rel="stylesheet" href="../../../css/all.min.css">
    <!-- Call Main CSS File -->
    <link rel="stylesheet" href="../../../css/main.css">
</head>
<body dir="rtl">     
    <div class="pay">
        <div class="head d-flex align-items-center back-color py-3">
            <a href="dora.php" class="pt-2 pe-3"><i class="fa-solid fa-arrow-left text-white"></i></a>
            <div class="mx-auto text-center text-white fs-5">
                الدفع
            </div>
        </div>
        <div class="container py-5">
            <p class="lead">قم بتحويل 50% من رسوم الحجز عن طريق بنكك (بنك الخرطوم) على الحساب 1625516 باسم محمد عمر وانسخ رقم العملية لارفاقه ادناه</p>

            <form action="">
                <h4 class="main-color"> تفاصيل العملية</h4>
                <label for="" class="black my-2">اسم العميل</label>
                <input type="text" class="form-control" placeholder="اسم العميل" required>
                <label for="" class="black my-2">البريد الالكتروني</label>
                <input type="email" class="form-control" placeholder="البريد الالكتروني للعميل" required>
                <label for="" class="black my-2">المبلغ الكلي للحجز</label>
                <input type="text" class="form-control" placeholder="1,000,000 - اي مليون جنيه" readonly>
                <label for="" class="black my-2">المبلغ الذي يجب ارساله</label>
                <input type="text" class="form-control" placeholder="500,000 - اي نصف مليون جنيه" readonly>
                <label for="" class="black my-2">رقم عملية الدفع من بنكك</label>
                <input type="text" class="form-control" placeholder="على سبيل المثال 3111012345" required>
    
                <input type="submit" value="ادفع" class="btn my-4 py-2 fw-bold back-color text-white" data-bs-toggle="modal" data-bs-target="#popup">
            </form>
        </div>
    <!-- Start Modal Popup -->
        <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header back-color">
                    <button type="button" class="btn-close red" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                    <p class="black fs-5">سيصلك اشعار خلال اليوم يؤكد عملية الحجز</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn back-color text-white" data-bs-dismiss="modal">حسناً</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Modal Popup -->
        <!-- Call JavaScript Folders -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="../../../js/bootstrap.bundle.min.js.map"></script>
        <script src="../../../js/bootstrap.bundle.min.js"></script>
        <script src="../../../js/all.min.js"></script>
        <script src="../../../js/main.js"></script>
</body>
</html>