
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <title>จัดการผู้ใช้</title>
</head>
<style>
    body{
        background-color: LightGoldenRodYellow;
    }
    /*
Table_Reservation
*/
.table-style{
    border-collapse: collapse;
    background-color:Khaki ;
    border: 1px solid #DADBDB;
    width: 60%;
    border-radius: 2%;
 

}
  
    td {

        border-bottom: 2px solid #cfcbcb;
        text-align: center;
        padding: 8px;
    }

    th {
        background-color: #70635f;
        border: 1px solid #f7f2f2;
        text-align: center;
        padding: 8px;

    }
    .search{
        border-radius: 25px;
     margin-left: 68%;
        margin-bottom: 10px;
        display:flex;

    }
    .red{
      color: red;
    }
    .Green{
      color: #25E327;
    }

</style>
<body>

    
    <center>
        <h1>จัดการข้อมูล</h1>
         <form class="search">
      </center>
    <center>
    <a href="/insert"><button type="button" class="btn btn-warning">เพิ่มข้อมูล</button></a>
    <br><br>
    <div class="table-style">
    <table style="width:100%">
     <tr>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>อีเมล์</td>
        <td>ระยะเวลาที่เข้าร่วม</td>
        <td>เวลาที่เข้า</td>
        <td>เวลาที่ออก</td>
      </tr>
      
      <?php if ($user) : ?>
    <?php foreach ($user as $user) : ?>
     <tr>
        <td><?php echo $user['name']?></td>
        <td><?php echo $user['surname']?></td>
        <td><?php echo $user['email']?></td>
        <td><?php echo $user['time']?></td>
        <td><?php echo $user['time_in']?></td>
        <td><?php echo $user['timeout']?></td>
       
      </tr>
      <?php endforeach; ?>
<?php endif; ?>
    </table>
</div>

</center>
    
  </body>

</html>