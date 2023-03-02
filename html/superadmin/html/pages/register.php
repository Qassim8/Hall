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
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <!-- Call FontAwesome CSS File -->
    <link rel="stylesheet" href="../../../../css/all.min.css">
    <!-- Call Main CSS File -->
    <link rel="stylesheet" href="../../../../css/main.css">
    <!-- Call Main Style File -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="register">
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <form action="" method="POST" class="register-form text-center p-3" dir="rtl">
            <a href="../login.php" class="position-absolute top-0 end-0 pt-2 pe-3">
                <i class="fa-solid fa-arrow-left main-color"></i>
            </a>
            <div class="input px-2 d-flex pt-5">
                <input type="text" name="name" class="form-control mx-2 my-2" placeholder="الاسم">
            </div>
            <div class="input px-2 d-flex">
                <input type="email" name="email" class="form-control mx-2 my-2" placeholder="البريد الالكتروني">
            </div>
            <div class="input px-2 d-flex">
                <input type="password" name="password" class="form-control mx-2 my-2" placeholder="كلمة السر" >
            </div>
                <input type="submit" value="سجل" name="save" class="btn back-color text-light my-3 fw-bold rounded-0">
            </form>
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
<?php
    require_once "../../../connect.php";
    
    if (isset($_POST["save"])){
        // sql اخذ البيانات من الحقول وتخزينها في قاعدة البيانات بالاستعلام ادناه وتخزينه في المتغير 
        $sql  = "INSERT INTO admin VALUES( Null, '$_POST[name]', '$_POST[email]','$_POST[password]')";
        // تنفيذ الاستعلام السابق
        mysqli_query($connect,$sql);
        // اذا تحقق الاستعلام
        if($sql){
            // اعرض الصندوق الذي يؤكد نجاح العملية
            echo"Done";
        }
    }
?>