<?php
// استعلام ربط الصفحة بقاعدةالبيانات
$connect   =  mysqli_connect('localhost' , 'root' , '' , 'hallsbooking'); 

if($connect === false){
    die("Error");
}
?>