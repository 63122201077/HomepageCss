<?php //http://localhost/php/formgetmember.php

$prefix = $_GET['prefix'];
$firstname = $_GET['firstname'];
$sex = $_GET['gender'];
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
    <link rel="stylesheet" href="styleform.css">
</head>

<body>
<header>
<h2> แบบฟอร์มสมัครสมาชิก (Get)</h2>
<form class="body" action="formget.php" method="GET">
    คำนำหน้า : 
              <input type="radio" name="prefix" value="Mr.">เด็กชาย
              <input type="radio" name="prefix" value="Mr.">เด็กหญิง
              <input type="radio" name="prefix" value="Mr.">นาย
              <input type="radio" name="prefix" value="Mr.">นางสาว
              <input type="radio" name="prefix" value="Mr.">นาง<br><br>
    ชื่อ-นามสกุล : <input type="text" name="firstname"><br><br>
    เพศ:
            <input type="radio" name="gender" value="female">ชาย
            <input type="radio" name="gender" value="male">หญิง
            <input type="radio" name="gender" value="other">อื่นๆ<br><br>
    รหัสผ่าน : <input type="password" name="password"><br><br>
    เบอร์โทร : <input type="integer" name="call"><br><br>
    อีเมล์ : <input type="text" name="email"><br><br>
    วันเกิด : <input type="integer" name="birth"><br><br>
    Comment : <textarea name="comment"></textarea><br><br>
    <input type="submit" value="SEND"><br><br>
</form>
</header>
<?php

if(isset($firstname)){
  echo "<h3>ข้อมูลที่รับเข้ามา</h3>";
    echo $prefix;
    echo '<br>';
    echo $firstname;
    echo '<br>';
    echo $genser;
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