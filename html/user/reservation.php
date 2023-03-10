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
    <style>
        body{
            background-color: #007ea7;
        }
        form{
            background-color: rgba(255, 255, 255, 0.685);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="reservation">
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <form action="" class="text-center position-relative p-3" dir="rtl">
                <a href="home.php" class="position-absolute top-0 end-0 pt-2 pe-3"><i class="fa-solid fa-arrow-left main-color"></i></a>
                <div class="input d-flex pt-5">
                    <input type="text" name="user-name" class="form-control mx-2 my-2" placeholder="اسم المستخدم">
                    <input type="number" name="" class="form-control mx-2 my-2" placeholder="رقم الهاتف">
                </div>
                <div class="input d-flex">
                    <select name="days" id="" class="form-control mx-2 my-2">
                        <option value="1">السبت</option>
                        <option value="2">الاحد</option>
                        <option value="3">الاثنين</option>
                        <option value="4">الثلاثاء</option>
                        <option value="5">الاربعاء</option>
                        <option value="6">الخميس</option>
                        <option value="7">الجمعة</option>
                    </select>
                    <select name="hours" id="" class="form-control mx-2 my-2">
                        <option value="10">9:00 - 12:00 ص</option>
                        <option value="1">1:30 - 4:30 م</option>
                        <option value="8">8:00 - 11:00 م</option>
                    </select>
                </div>
                <input type="submit" value="حجز" class="btn back-color text-light my-3 fw-bold px-5">
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