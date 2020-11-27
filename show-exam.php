<html>
<head>
<title>Supermarket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-exam.mysql.database.azure.com', 'itf@itf-exam' , '159Pook159', 'itf-exam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN !: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

<div class="container">
    <div class="form">
        <p class="ex1"><h1><center>คำนวณ BMI</center></h1></p>
    </div>
  <table width="800" border="1" class="table table-dark table-hover table-striped" class="center" >
    <thead class="thead-dark">
    <tr class="active">
      <th width="200"> <div align="center">ชื่อ</div></th>
      <th width="500"> <div align="center">น้ำหนัก</div></th>
      <th width="500"> <div align="center">ส่วนสูง</div></th>
      <th width="500"> <div align="center">bmi</div></th>
      <th width="100"> <div align="center">การจัดการ</div></th>
    </tr>
     </thead>
  <?php
  $sum = 0;
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><center><?php echo $Result['name'];?></center></td>
      <td><center><?php echo $Result['weight'];?></center></td>
      <td><center><?php echo $Result['height'];?></center></td>
      <td><center><?php echo $Result['bmi'];?></center></td>
      <td><?php echo '<a href="delete-exam.php?id='.$Result['ID'].'">
      Delete</a>'?></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <a href="forminsert-exam.html"><input type="submit" value="ADD" class="btn-default btn-sm"></a>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
