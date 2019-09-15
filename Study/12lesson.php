<?php
$id = 1;
$ocenka = $_POST['ocenka'];
  $name = $_POST['name'];
  $text = $_POST['comment'];
$link = mysqli_connect("127.0.0.1", "root", "", "lerarnandcode");
$do="INSERT INTO `comment`(`id`,`name`, `text`,`ocenka`) VALUES('$id','$name', '$text','$ocenka')";

  $result=mysqli_query($link,$do   );


 

?>
<html>
<head>
    <meta charset="UTF-8">
    

</head>
<body>
     
       <form action="12lesson.php" method="post">
        <span>Имя: </span><br>
        <input type="text"  name='name'><br>
        <span>Комментарий</span><br>
        <textarea   name='comment' cols="30" rows="10"></textarea><br>
        <span>Имя: </span><br>
        <input type="text"name='ocenka' ><br>
<input type='submit'>ggr
		</form>

<br>
<?php

$q="SELECT  name,text,ocenka FROM comment WHERE id='1' ORDER BY ocenka DESC
 ";
$rest=mysqli_query($link,$q);

while($row = mysqli_fetch_array($rest) ){
echo $row['name'].'    '.$row['comment'].'    '.'<br>';
$allocenka =$allocenka +$row['ocenka'];
$timer= $timer+1;
};

echo $allocenka/$timer;
  mysqli_close($link);
?>
</body>
</html>
