<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./cs.css">
</head>

<body>
  <div class="subject">

    <?php
    $num = 123; // задание 3.1
    echo $num;
    ?>
    <?php
    $a = 123; // задание 3.2
    echo $num;
    ?>
  </div>
  <div class="subject">
    <?php
    $a = 1 + 2 + 3; // задание 4.1
    echo $a;
    ?>
  </div>
  <div class="subject">
    <?php
    $a = 10; // задание 5.1
    $b = 2;
    echo $a + $b;
    echo $a - $b;
    echo $a * $b;
    echo $a / $b;
    ?>
    <?php
    $c = 10; // задание 5.2
    $d = 5;
    $result = $c + $d;
    echo $result;
    ?>
    <?php
    $a = 1; // задание 5.3
    $b = 2;
    $c = 3;
    echo $a + $b + $c;
    ?>
    <?php
    $a = 10; // задание 5.4
    $b = 5;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo $result;
    ?>
  </div>
  <div class="subject">
    <!-- Не запуская код, определите, что выведется на экран: -->
    <?php
    $a = 5 + 5 * 3; // задание 6.1
    echo $a; //выведит 20
    ?>
    <?php
    $a = 5 + 5 * 3 + 3; // задание 6.2
    echo $a; //выведит 23
    ?>
    <?php
    $a = 8 / 2 + 2; // задание 6.3
    echo $a; //выведит 6
    ?>
    <?php
    $a = 8 + 2 / 2; // задание 6.4
    echo $a; //выведит 9
    ?>
    <?php
    $a = 8 / 2 * 2; // задание 6.5
    echo $a; //выведит 8
    ?>
    <?php
    $a = 8 * 4 / 2 / 2; // задание 6.6
    echo $a; //выведит 8
    ?>
    <?php
    $a = (2 + 3) * (2 + 3); // задание 6.7
    echo $a; //выведит 25
    ?>
    <?php
    $a = (2 + 3) * 2 + 3; // задание 6.8
    echo $a; //выведит 13
    ?>
    <?php
    $a = 2 * (2 + 4 * (3 + 1)); // задание 6.9
    echo $a; //выведит 36
    ?>
    <?php
    $a = 2 * 8 / 4; // задание 6.10
    echo $a; //выведит 4
    ?>
    <?php
    $a = (2 * 8) / 4; // задание 6.11
    echo $a; //выведит 4
    ?>
    <?php
    $a = 2 * (8 / 4); // задание 6.12
    echo $a; //выведит 4
    ?>
  </div>
  <div class="subject">
    <?php
    $a = 1.5; // задание 7.1
    $b = 0.75;
    echo $a + $b;
    ?>
  </div>
  <div class="subject">
    <?php
    $a = -100; // задание 8.1
    echo $a;
    ?>
    <?php
    $a = 19; // задание 8.2
    echo -$a;
    ?>
  </div>
  <div class="subject">
    <?php
    $a = 10; // задание 9.1
    $b = 3;
    echo $b % $a;
    ?>
  </div>
  <div class="subject">
    <?php
    $a = 2; // задание 10.1
    echo $a ** 10;
    ?>
    <!-- Не запуская код, определите, что выведется на экран: -->
    <?php
    $a = 3 * 2 ** 3; // задание 10.2
    echo $a; //выведит 24
    ?>
    <?php
    $a = (3 * 2) ** 3; // задание 10.3
    echo $a; //выведит 216
    ?>
    <?php
    $a = 3 * 2 ** (3 + 1); // задание 10.4
    echo $a; //выведит 48
    ?>
    <?php
    $a = 2 ** 3 * 3; // задание 10.5
    echo $a; //выведит 24
    ?>
    <?php
    $a = 3 * 2 ** 3 * 3; // задание 10.6
    echo $a; //выведит 72
    ?>
  </div>
  <div class="subject">
    <?php
    $str = "hello"; // задание 11.1
    echo $str;
    ?>
    <?php
    $str1 = 'abc'; // задание 11.2
    $str2 = 'def';
    echo $str1 . $str2;
    ?>
    <?php
    $str1 = 'hello'; // задание 11.3
    $str2 = 'world';
    echo $str1 . $str2;
    ?>
    <?php
    echo strlen('I want to go home and sleep'); // задание 11.4
    ?>
    <?php
    echo mb_strlen('Очень много людей пропадает без вести при переходе от слов к делу.'); // задание 11.5
    ?>
  </div>
  <div class="subject">
    <?php
    echo '<i>курсив</i>'; // задание 12.1
    ?>
    <?php
    echo '<br>1 </br> <br>2</br><br>3</br><br>4</br><br>5</br> <br>6</br> <br>7</br><br>8</br> <br>9</br>'; // задание 12.2
    ?>
    <?php
    echo "<img src='../test/img/WI1et_d0DOA.jpg.crdownload'>"; // задание 12.3
    ?>
    <?php
    echo "<input type='' value='You can not resist - opposite!'>" // задание 12.4
      ?>
    <?php
    echo "<textarea>some text, some phrase, some idea, some action, some life, some death</textarea>" // задание 12.5
      ?>
  </div>
  <div class="subject">
    <?php
    $gallows = true; // задание 13.1
    var_dump($gallows);
    ?>
    <?php
    $life = false; // задание 13.2
    var_dump($life);
    ?>
  </div>
  <div class="subject">
    <?php
    $test = null; // задание 14.1
    echo $test; // выведет пустоту
    ?>
    <?php
    var_dump($text); // задание 14.2  // выведет null
    ?>
  </div>
  <div class="subject">
    <!-- Не запуская код, определите, что выведется на экран: -->
    <?php
    $a = '1'; // задание 15.1  
    $b = '2';
    echo $a + $b + '3'; // выведет 6
    ?>
  </div>
  <div class="subject">
    <?php
    $test = (int) '12345'; // задание 16.1  
    var_dump($test);
    ?>
    <?php
    $test = (float) '12.345'; // задание 16.2 
    var_dump($test);
    ?>
    <?php
    $test = (int) '12.345'; // задание 16.3
    var_dump($test);
    ?>
    <?php
    $test = (string) 12345; // задание 16.4
    var_dump($test);
    ?>
    <?php
    $test = (string) 12.345; // задание 16.5
    var_dump($test);
    ?>
  </div>
  <div class="subject">
    <?php
    $str = 'abcde'; // задание 17.1
    echo $str[0];
    echo $str[2];
    echo $str[4];
    ?>
    <?php
    $str = 'abcde'; // задание 17.2
    echo $str[4];
    echo $str[3];
    echo $str[2];
    echo $str[1];
    echo $str[0];
    ?>
    <?php
    $num = 4;
    $str = 'abcde'; // задание 17.3
    echo $str[4];
    ?>
    <?php
    $str = 'abcde';
    $last = strlen($str) - 1; // задание 17.4
    echo $str[$last];
    ?>
    <?php
    $str = 'abcde';
    $last = strlen($str) - 2; // задание 17.5
    echo $str[$last];
    ?>
    <?php
    $str = 'abcde';
    $last = strlen($str) - 3; // задание 17.6
    echo $str[$last];
    ?>
    <?php
    $str = '12345'; // задание 17.7
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
    ?>
    <?php
    $num = 12345; // задание 17.8
    $str = (string) $num;
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
    ?>
    <?php
    $num = 12345; // задание 17.9
    $str = (string) $num;
    echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
    ?>
    <?php
    $num = 12345; // задание 17.9
    $str = (string) $num;
    echo $str[4];
    echo $str[3];
    echo $str[2];
    echo $str[1];
    echo $str[0];
    ?>
  </div>
  <div class="subject">
    <!-- Не запуская код, определите, что выведется на экран: -->
    <?php
    $num = 1; // задание 18.1
    $num = $num + 1;
    $num = $num + 1;
    echo $num; //выведит 3
    ?>
    <?php
    $num = 1; // задание 18.2
    $num = $num + 2;
    $num = $num + 3;
    echo $num; //выведит 6
    ?>
    <!-- Упростите приведенный код через сокращенные операции: -->
    <!-- Здесь будет сразу упрощенные варианты заданий -->
    <?php
    $num = 47; // задание 18.3
    $num += 7;
    $num -= 18;
    $num *= 10;
    $num /= 15;
    echo $num;
    ?>
    <?php
    $str = 'a'; // задание 18.4
    $str .= 'b';
    $str .= 'c';
    echo $str;
    ?>
  </div>
  <div class="subject">
    <!-- Переделайте этот код так, чтобы в нем операции инкремента и декремента: -->
    <!-- Здесь будет сразу переделанный вариант задания -->
    <?php
    $num = 10; // задание 19.1
    $num++;
    $num++;
    $num--;
    echo $num;
    ?>
    <!-- Не запуская код, определите, что выведется на экран: -->
    <?php
    $num = 3; // задание 19.2
    echo ++$num; // выведит 4
    ?>
    <?php
    $num = 3; // задание 19.3
    echo $num++; // выведит 3
    ?>
    <?php
    $num = 3; // задание 19.4
    echo --$num; // выведит 2
    ?>
    <?php
    $num = 3; // задание 19.5
    echo $num--; // выведит 3
    ?>
    <?php
    $num1 = 3; // задание 19.6
    $num2 = ++$num1;
    echo $num1;
    echo $num2; // выведит 44
    ?>
    <?php
    $num1 = 3; // задание 19.7
    $num2 = $num1++;
    echo $num1;
    echo $num2; // выведит 43
    ?>
    <?php
    $num1 = 3; // задание 19.8
    $num2 = --$num1;
    echo $num1;
    echo $num2; // выведит 22
    ?>
    <?php
    $num1 = 3; // задание 19.9
    $num2 = $num1--;
    echo $num1;
    echo $num2; // выведит 23
    ?>
    <?php
    $num1 = 3; // задание 19.10
    $num1++;
    $num2 = $num1--;
    echo $num1++;
    echo --$num2; // выведит 33
    ?>
  </div>
  <div class="subject">
    <?php // задание 20.1
    echo 60 * 60 * 24; // количество секунд в сутках
    ?>
    <?php // задание 20.2
    echo 60 * 60 * 24 * 30; // количество секунд в 30 сутках
    ?>
    <?php // задание 20.3
    echo 60 * 60 * 24 * 365; // количество секунд в году
    ?>
    <?php // задание 20.4
    echo 24 * 60; // количество минут в сутках
    ?>
    <?php // задание 20.5
    echo 24 * 60 * 365; // количество минут в году
    ?>
    <?php // задание 20.6
    echo 1024 * 1024; // количество байт в мегабайте
    ?>
    <?php // задание 20.7
    echo 1024 * 1024 * 1024; // количество байт в гигабайте
    ?>
    <?php // задание 20.7
    echo 1024 * 1024 * 1024 * 10; // количество байт в 10 гигабайтах
    ?>
    <?php // задание 20.7
    echo 1024 * 1024 * 1024 * 1024; // количество байт в терабайте
    ?>
    <?php // задание 20.7
    echo 1024 * 1024 * 1024; // количество килобайт в терабайте
    ?>
  </div>
  <div class="subject">
    <?php
    $r = 3; // задание 21.1
    $s = $r * $r * 3.14;
    echo $s; // площадь круга
    ?>
    <?php
    $r = 5; // задание 21.2
    $s = $r * $r;
    echo $s; // площадь квадрата
    ?>
    <?php
    $r = 5; // задание 21.3
    $s = 7;
    $p = $s * $r;
    echo $p; // периметр площадь
    ?>
    <?php
    $r = 5; // задание 21.4
    $s = 7;
    $p = $s + $s + $r + $r;
    echo $p; // периметр прямоугольника
    ?>
    <?php
    $tc = 5; // задание 21.5
    $f = (5 * 9 / 5) + 32;
    echo $f; // цельсия в фаренгейт
    ?>
    <?php
    $tc = 5; // задание 21.6
    $f = (5 - 32) * 5 / 9;
    echo $f; // фаренгейт в цельсия
    ?>
  </div>
  <div class="subject"> 
    <?php
    $arr = ['a', 'b', 'c'];// задание 22.1
    echo var_dump($arr);
    ?>
    <?php
    $arr = ['a', 'b', 'c'];// задание 22.2

    echo $arr[0] . ' ';
    echo $arr[1] . ' ';
    echo $arr[2] . ' ';
    ?>
    <?php
    $arr = ['a', 'b', 'c', 'd'];// задание 22.3
    echo $arr[0] . '+' . $arr[1] . '+' . $arr[2] . '+' . $arr[3];
    ?>
     <?php
    $arr = ['1', '2', '3'];// задание 22.4
    $result = $arr[0] + $arr[1] + $arr[2];
    echo $result;
    ?>
    <?php
   $arr = [2, 5, 3, 9];// задание 22.5
   echo $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
    ?>
  </div>
  <div class="subject"> 
   <!--Задание 24.1. Проверьте описанное на каком-нибудь из ваших ассоциативных массивов.-->
   <!--Проверила-->
  </div>
  <div class="subject"> 
  <?php
    $arr = ['a','b', 'c'];// задание 25.1
    echo count($arr);
  ?>
  <?php
	  $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4]; // задание 25.2
    echo count($arr);
  ?>
  <?php
	 $arr = ['a', 'b', 'c', 'd', 'e']; // задание 25.3
    $last = count($arr) - 1;
    echo $arr[$last];
  ?>
   <?php
	 $arr = ['a', 'b', 'c', 'd', 'e']; // задание 25.4
    $last = count($arr) - 2;
    echo $arr[$last];
  ?>
  </div>
</body>

</html>