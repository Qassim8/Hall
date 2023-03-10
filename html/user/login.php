<?php
session_start();
include("../connect.php");
if(isset($_POST["save"])){
    // مقارنة البيانات المدخلة في فورم الدخول مع البيانات الموجودة في قاعدةالبيانات في جدول التسجيل
    $result = $connect->query("SELECT * FROM users WHERE email ='$_POST[email]' AND password ='$_POST[password]'");
    // اذا لم تكن مطابقة لاي من البيانات الموجودة في قاعدة البيانات نفذ الكود القادم
    if($result->num_rows > 0 ){
        $_SESSION['email'] = $_POST['email'];
        header('Location:home.php');
        die;
    }else{
        echo"
        <script>
        window.alert('خطأ في بيانات المستخدم');
        </script>";
    }
}
?>
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
    <title>فرح</title>
    <!-- Call Bootstrap CSS File -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Call FontAwesome CSS File -->
    <link rel="stylesheet" href="../../css/all.min.css">
    <!-- Call Main CSS File -->
    <link rel="stylesheet" href="../../css/main.css">
    <style>
        body{
            background-image: linear-gradient(
            to right,
            #003459,
            #007ea7,
            #00a8e8
                        );
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-5">
                    <div class="img position-relative">
                        <img src="../../images/hall-3.jpg" alt="login" class="img-fluid ">
                    </div>
                </div>
                <div class="col-md-7 bg-white position-relative d-flex justify-content-center align-items-center">
                    <form method="POST" class="text-center" dir="rtl">
                        <a href="../../index.php" class="position-absolute top-0 end-0 pt-2 pe-3"><i class="fa-solid fa-arrow-left main-color"></i></a>
                        <div class="input position-relative">
                            <input type="email" name="email" id="" class="form-control bg-transparent mt-5" placeholder="البريد الالكتروني" required>
                            <i class="fa-solid fa-user main-color position-absolute top-0 start-0 mt-2 ms-2"></i>
                        </div>
                        <div class="input position-relative">
                            <input type="password" name="password" id="" class="form-control bg-transparent mt-3" placeholder="كلمة السر" required>
                            <i class="fa-solid fa-lock main-color position-absolute top-0 start-0 mt-2 ms-2"></i>
                        </div>
                        <input type="submit" value="دخول" name="save" class="btn back-color text-white fw-bold mt-3 w-100" >
                        <p class="lead my-2">او</p>
                        <a href="account.php" class="main-color d-block fs-5 mb-3">سجل</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Call JavaScript Folders -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js.map"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>
