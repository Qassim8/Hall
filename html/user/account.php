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
        }
        form{
            background-color: rgba(255, 255, 255, 0.685);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="register">
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <form method="POST" class="text-center position-relative p-3" dir="rtl">
                <a href="login.php" class="position-absolute top-0 end-0 pt-2 pe-3"><i class="fa-solid fa-arrow-left main-color"></i></a>
                <div class="input d-flex pt-5">
                    <input type="text" name="user_name" class="form-control mx-2 my-2 w-100" placeholder="اسم المستخدم" required>
                </div>
                <div class="input d-flex">
                    <input type="email" name="email" class="form-control mx-2 my-2" placeholder="البريد الالكتروني" required>
                    <input type="number" name="phone" class="form-control mx-2 my-2" placeholder="رقم الهاتف" required>
                </div>
                <div class="input d-flex">
                    <input type="password" name="password" class="form-control mx-2 my-2" placeholder="كلمة السر" required>
                    <input type="password" name="" class="form-control mx-2 my-2" placeholder="تأكيد كلمة السر" required>
                </div>
                <input type="submit" value="تسجيل" name="save" class="btn back-color text-light my-3 fw-bold">
            </form>
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
<?php
    require_once "../connect.php";
    
    if (isset($_POST["save"])){
        // sql اخذ البيانات من الحقول وتخزينها في قاعدة البيانات بالاستعلام ادناه وتخزينه في المتغير 
        $sql  = "INSERT INTO users VALUES( Null, '$_POST[user_name]', '$_POST[email]', '$_POST[phone]', '$_POST[password]')";
        // تنفيذ الاستعلام السابق
        mysqli_query($connect,$sql);
        // اذا تحقق الاستعلام
        if($sql){
            // اعرض الصندوق الذي يؤكد نجاح العملية
            echo"Done";
        }
    }
?>