<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.php' ?>
               <?php include 'menu.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Тяжело в учении, легко в бою ! </p>
                    <p> А еще я не могу подгрузить картинки :(</p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 9;
                        $b = 8;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
            Политика конфиденциальности — это заявление, в котором раскрываются некоторые или все способы, с помощью которых сайт собирает, использует и раскрывает персональные данные (личную информацию) посетителей сайта, а также управляет ими. Политика отвечает требованиям законодательства по защите конфиденциальности посетителей сайта и клиентов.
                </p>
            </div>
        </div>

            <?php include 'footer.php' ?>

    </div>


</body>
</html>