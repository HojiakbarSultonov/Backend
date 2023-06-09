<?php
$car = 'Malibu';

$foods = ['Norin', 'Honim', 'Manti'];

?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--    <h1>Salom</h1>-->
<!--    <h1>Mening yoqtirgan mashinam bu -  --><?php //echo
//        $car
//        ?><!-- </h1>-->
<!--<h1>Foods</h1>-->
<!---->
<!--<ul>-->
<!--    --><?php
//        foreach ($foods as $food): ?>
<!--      <li>-->
<!--        --><?php //echo "$food"?>
<!--    </li>-->
<!---->
<!--    --><?php //endforeach;?>
<!---->
<!--    >-->
<!--</ul>-->
<!--</body>-->
<!--</html>-->


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<form action="form.php" method="POST">
 <div>
 <label >Ismingiz</label>
  <input type="text" name="name">
 </div>
 <div>
  <br>
 <label >Familiyangiz</label>
  <input type="text" name="surname">
 </div>
 <button type="submit">Enter</button>
</form>



</body>
</html>