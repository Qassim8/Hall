<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href)
        }
    </script>
    <title></title>
    <!-- Call Bootstrap CSS File -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <!-- Call FontAwesome CSS File -->
    <link rel="stylesheet" href="../../../css/all.min.css">
    <!-- Call Main CSS File -->
    <link rel="stylesheet" href="../../../css/main.css">
    <!-- Call Main Style File -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login">
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <form method="POST" class="login-form text-center p-4" dir="rtl">
            <p class="fs-5 fw-bold ">تسجيل دخول</p>
                <input type="email" name="email" class="form-control mx-2 mb-3 mt-5" placeholder="البريد الالكتروني" required>
                <input type="password" name="password" class="form-control mx-2" placeholder="كلمة السر" required>
            <input type="submit" name="save" value="دخول"class="btn back-color text-light mt-3 mb-2 px-4 fw-bold rounded-0">
            <p class="fw-bold mb-2">او</p>
            <a href="pages/register.php" class="main-color pt-0">سجل </a>
            </form>
        </div>
    </div>
    <!-- Call JavaScript Folders -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../../../js/bootstrap.bundle.min.js.map"></script>
    <script src="../../../js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/all.min.js"></script>
    <script src="../../../js/main.js"></script>
</body>
</html>
<?php
    // ربط الصفحة بقواعد البيانات
    require_once "../../connect.php";
    //saveاجراء حدث او استعلام عند النقر على زر الفورم والمسمى ب
    if(isset($_POST["save"])){
        // مقارنة البيانات المدخلة في فورم الدخول مع البيانات الموجودة في قاعدةالبيانات في جدول التسجيل
        $result = $connect->query("SELECT id FROM halls WHERE email ='$_POST[email]' AND password ='$_POST[password]'");
        // اذا لم تكن مطابقة لاي من البيانات الموجودة في قاعدة البيانات نفذ الكود القادم
        if($result->num_rows == 0 ){
            // "الكود القادم هو المقصود" 
            // قم بعرض صندوق يدل على خطأ في بيانات المستخدم
            echo"uncorrect data";
        }else{
            // اذا تطابقت البيانات مع بيانات موجودة في قاعدة البيانات فأنقل المستخدم للصفحة الرئيسية
            header('Location:http://localhost:8080/hallsreservation/html/owner/html/pages/home.php');
        }
    }
?>