<html>
  <head>
<title>
  Космические пришельцы похищали меня - сообщение о похищении
</title>
  </head>
  <body>
    
<p>
    <?php
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

    if(mail($email, $subject, $msg, 'From: '.$to )){
      echo("Finish!");
    }
    
  
    

    ?>
</p>
  </body>
</html>