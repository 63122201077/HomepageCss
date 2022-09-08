<?php //http://localhost/php/formgetmember.php

$prefix = $_GET['prefix'];
$firstname = $_GET['firstname'];
$sex = $_GET['sex'];
$password = $_GET['password'];
$call = $_GET['call'];
$email = $_GET['email'];
$birth = $_GET['birth'];
$comment = $_GET['comment'];

?>


<!doctype html>
<html>
<head>
    <title>ส่งข้อมูลผ่าน Form</title>
</head>

<body>
<h2>แบบฟอร์มสมัครสมาชิก(Get)</h2>
<form action="formget.php" method="GET">
    คำนำหน้าชื่อ : <inpuut type="radio" name="prefix"><br><br>
    ชื่อ-นามสกุล : <input type="text" name="firstname"><br><br>
    เพศ : <input type="text" name="sex"><br><br>
    รหัสผ่าน : <input type="password" name="password"><br><br>
    เบอร์โทร : <input type="integer" name="call"><br><br>
    อีเมล์ : <input type="text" name="email"><br><br>
    วันเกิด : <input type="integer" name="birth"><br><br>
    Comment : <textarea name="comment"></textarea><br><br>
    <input type="submit" value="SEND"><br><br>
</form>

<?php

if(isset($firstname)){
  echo "<h3>ข้อมูลที่รับเข้ามา</h3>";
    echo $prefix;
    echo '<br>';
    echo $firstname;
    echo '<br>';
    echo $sex;
    echo '<br>';
    echo $password;
    echo '<br>';
    echo $call;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $birth;
    echo '<br>';
    echo $comment;
}// End isset
else {
	echo "บันทึกข้อมูลเรียบร้อย";
}


?>

</body>
</html>