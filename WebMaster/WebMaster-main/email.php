<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Booster</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <?php
    if(isset($_POST['submit'])){
    $name=$_POST['name'];    
    $number=$_POST['number'];
    $email=$_POST['email'];
    $productName=$_POST['productName'];
    $to='yomahbk@gmail.com';
    $subject='WebBooster';


    $msg="Имя: $name \n \n"
    
    . "Телефон: $number  \n \n"
    
    . " Почта: $email \n \n" 
    
    . " Название товара: $productName \n" ;

    $status=mail($email, $subject, $msg, 'From: ' . $to);
    if($status){
        echo "Finish";
    }
    
    
    
    }

    ?>


</body>

</html>













