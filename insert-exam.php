<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-exam.mysql.database.azure.com', 'itf@itf-exam' , '159Pook159', 'new-exam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $_POST['weight']/($_POST['height']**2);


$sql = "INSERT INTO guestbook (name , height , weight , bmi) VALUES ('$name', '$height', '$weight', '$bmi')";


if (mysqli_query($conn, $sql)) {
    header("Location: show-exam.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
