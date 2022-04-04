<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add Data</title>
</head>
<body>
<center>
<h2>เพิ่มข้อมูล</h2>
<center>
<form action="/Insert/save" id method="post">
  <label for="name">ชื่อ</label><br>
  <input type="text" id="name" name="name" value="<?= set_value('name'); ?>"><br>
  <label for="surname">นามสกุล</label><br>
  <input type="text" id="surname" name="surname" value="<?= set_value('surname'); ?>"><br>
  <label for="email">อีเมลล์</label><br>
  <input type="email" id="email" name="email" value="<?= set_value('email'); ?>"><br>
  <label for="text">ระยะเวลาที่เข้าร่วม</label><br>
  <input type="text" id="time" name="time" value="<?= set_value('time'); ?>"><br>
  <label for="text">เวลาที่เข้าร่วม</label><br>
  <input type="time" id="time_in" name="time_in" value="<?= set_value('time_in'); ?>"><br>
  <label for="text">เวลาออก</label><br>
  <input type="time" id="timeout" name="timeout" value="<?= set_value('timeout'); ?>"><br><br>
  <button class="btn btn-success" type="submit">ยืนยัน</button>
  <a href="/"><button type="button" class="btn btn-danger">ยกเลิก</button></a>
</center>
</form> 
<style>
     body {
  background-color: Khaki;
  border-radius: 20px;
}


</style>
    
</body>
</html>