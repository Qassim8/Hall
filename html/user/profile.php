<?php 
    session_start();
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
</head>
<body>
    <div class="profile" dir="rtl">
        <div class="head d-flex align-items-center back-color py-3">
            <a href="home.php" class="pt-2 pe-3"><i class="fa-solid fa-arrow-left text-white"></i></a>
            <div class="mx-auto text-center text-white fs-4">
                الملف الشخصي
            </div>
        </div>
        <div class="container">
            <div class="profile-box position-relative p-4 rounded">
                <div class="img position-absolute">
                    <i class="fa-solid fa-user fa-3x rounded-circle p-4 back-light gray"></i>
                </div>
                <div class="main-info pt-5">
                    <div class="line d-flex align-items-center py-3">
                        <i class="fa-solid fa-user rounded-circle p-2 red mx-2"></i>
                        <div class="line-info">
                            <label class="pb-2">الاسم</label>
                        <input type="text" name="user_name" id="" class="form-control" placeholder="
                        <?php 
                        ?>" readonly>
                        </div>
                    </div>
                    <div class="line d-flex align-items-center py-3">
                        <i class="fa-solid fa-envelope rounded-circle p-2 yellow mx-2"></i>
                        <div class="line-info">
                            <label class="pb-2">البريد الالكتروني</label>
                        <input type="email" name="name" id="" class="form-control" placeholder="
                        <?php 
                        ?>" readonly>
                        </div>
                    </div>
                    <div class="line d-flex align-items-center py-3">
                        <i class="fa-solid fa-phone rounded-circle p-2 green mx-2"></i>
                        <div class="line-info">
                            <label class="pb-2">رقم الهاتف</label>
                        <input type="number" name="name" id="" class="form-control" placeholder="" readonly>
                        </div>
                    </div>
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
<?php
    require_once "../connect.php";

    
        $result = $connect->query("SELECT id FROM users WHERE id ='$_POST[id]'");
        // اذا لم تكن مطابقة لاي من البيانات الموجودة في قاعدة البيانات نفذ الكود القادم
        if($result->num_rows == 0 ){
            // "الكود القادم هو المقصود" 
            // قم بعرض صندوق يدل على خطأ في بيانات المستخدم
            echo"
            <script></script>
            ";
        }else{
            echo"
            <script></script>
            ";
        }
?>