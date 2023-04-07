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
<p class="nazv">3. Переменные в PHP</p>
    <?php
    $num = 123; // задание 3.1
    echo $num;
    ?>
     <br>
     <br>
    <?php
    $a = 123; // задание 3.2
    echo $num;
    ?>
 <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv">4. Математические операции с переменными в PHP</p>
    <?php
    $a = 1 + 2 + 3; // задание 4.1
    echo $a;
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv">5. Математические операции с переменными в PHP</p>
    <?php
    $a = 10; // задание 5.1
    $b = 2;
    echo $a + $b;
    echo $a - $b;
    echo $a * $b;
    echo $a / $b;
    ?>
     <br>
     <br>
    <?php
    $c = 10; // задание 5.2
    $d = 5;
    $result = $c + $d;
    echo $result;
    ?>
     <br>
     <br>
    <?php
    $a = 1; // задание 5.3
    $b = 2;
    $c = 3;
    echo $a + $b + $c;
    ?>
     <br>
     <br>
    <?php
    $a = 10; // задание 5.4
    $b = 5;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo $result;
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >6. Приоритет математических операций в PHP</p>
  <p>Не запуская код, определите, что выведется на экран:</p>
 
    <!-- Не запуская код, определите, что выведется на экран: --> 
    <p>Задание 6.1 <br>выведит 20</p>
     <br>
     <br>
     <p>Задание 6.2 <br>выведит 23</p>
     <br>
     <br>
     <p>Задание 6.3 <br>выведит 6</p>
     <br>
     <br>
     <p>Задание 6.4 <br>выведит 9</p>
     <br>
     <br>
     <p>Задание 6.5 <br>выведит 8</p>
     <br>
     <br>
     <p>Задание 6.6 <br>выведит 8</p>
     <br>
     <br>
     <p>Задание 6.7 <br>выведит 25</p>
     <br>
     <br>
     <p>Задание 6.8 <br>выведит 13</p>
     <br>
     <br>
     <p>Задание 6.9 <br>выведит 36</p>
     <br>
     <br>
     <p>Задание 6.10 <br>выведит 4</p>
     <br>
     <br>
     <p>Задание 6.11 <br>выведит 4</p>
     <br>
     <br>
     <p>Задание 6.12 <br>выведит 4</p>
     <br>
     <br>
  </div>
  <div class="subject">
     <p class="nazv" >7. Дроби в PHP</p>
    <?php
    $a = 1.5; // задание 7.1
    $b = 0.75;
    echo $a + $b;
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >8. Отрицательные числа в PHP</p>
    <?php
    $a = -100; // задание 8.1
    echo $a;
    ?>
     <br>
     <br>
    <?php
    $a = 19; // задание 8.2
    echo -$a;
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >9. Остаток от деления в PHP</p>
    <?php
    $a = 10; // задание 9.1
    $b = 3;
    echo $b % $a;
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >10. Возведение в степень в PHP</p>
    <?php
    $a = 2; // задание 10.1
    echo $a ** 10;
    ?>
     <br>
     <br>
     <p>Не запуская код, определите, что выведется на экран:</p>
    <!-- Не запуская код, определите, что выведется на экран: -->
    <p>Задание 10.2 <br>выведит 24</p>
     <br>
     <br>
     <p>Задание 10.3 <br>выведит 216</p>
     <br>
     <br>
     <p>Задание 10.4 <br>выведит 48</p>
     <br>
     <br>
     <p>Задание 10.5 <br>выведит 24</p>
     <br>
     <br>
     <p>Задание 10.6 <br>выведит 72</p>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >11. Строки в PHP</p>
    <?php
    $str = "hello"; // задание 11.1
    echo $str;
    ?>
     <br>
     <br>
    <?php
    $str1 = 'abc'; // задание 11.2
    $str2 = 'def';
    echo $str1 . $str2;
    ?>
     <br>
     <br>
    <?php
    $str1 = 'hello'; // задание 11.3
    $str2 = 'world';
    echo $str1 . $str2;
    ?>
     <br>
     <br>
    <?php
    echo strlen('I want to go home and sleep'); // задание 11.4
    ?>
     <br>
     <br>
    <?php
    echo mb_strlen('Очень много людей пропадает без вести при переходе от слов к делу.'); // задание 11.5
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >12. Работа с HTML тегами в PHP</p>
    <?php
    echo '<i>курсив</i>'; // задание 12.1
    ?>
     <br>
     <br>
    <?php
    echo '<br>1 </br> <br>2</br><br>3</br><br>4</br><br>5</br> <br>6</br> <br>7</br><br>8</br> <br>9</br>'; // задание 12.2
    ?>
     <br>
     <br>
    <?php
    echo "<img src='../test/img/WI1et_d0DOA.jpg.crdownload'>"; // задание 12.3
    ?>
     <br>
     <br>
    <?php
    echo "<input type='' value='You can not resist - opposite!'>" // задание 12.4
      ?>
       <br>
     <br>
    <?php
    echo "<textarea>some text, some phrase, some idea, some action, some life, some death</textarea>" // задание 12.5
      ?>
       <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >13. Логические значения в PHP</p>
    <?php
    $gallows = true; // задание 13.1
    var_dump($gallows);
    ?>
     <br>
     <br>
    <?php
    $life = false; // задание 13.2
    var_dump($life);
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >14. Значение null в PHP</p>
  <p >задание 14.1<br>выведет пустоту</p>
    <?php
    $test = null; // задание 14.1
    echo $test; // выведет пустоту
    ?>
     <br>
     <br>
     <p >задание 14.2<br>выведет null</p>
    <?php
    var_dump($text); // задание 14.2  // выведет null
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >15. Автоматическое преобразование типов в PHP</p>
  <p >Не запуская код, определите, что выведется на экран:</p>
    <!-- Не запуская код, определите, что выведется на экран: -->
    <p >задание 15.1<br>выведет 6</p>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >16. Принудительное преобразование типов в PHP</p>
    <?php
    $test = (int) '12345'; // задание 16.1  
    var_dump($test);
    ?>
     <br>
     <br>
    <?php
    $test = (float) '12.345'; // задание 16.2 
    var_dump($test);
    ?>
     <br>
     <br>
    <?php
    $test = (int) '12.345'; // задание 16.3
    var_dump($test);
    ?>
     <br>
     <br>
    <?php
    $test = (string) 12345; // задание 16.4
    var_dump($test);
    ?>
     <br>
     <br>
    <?php
    $test = (string) 12.345; // задание 16.5
    var_dump($test);
    ?>
     <br>
     <br>
  </div>
  <div class="subject">
  <p class="nazv" >17. Получение символов строки на PHP</p>
    <?php
    $str = 'abcde'; // задание 17.1
    echo $str[0];
    echo $str[2];
    echo $str[4];
    ?>
     <br>
     <br>
    <?php
    $str = 'abcde'; // задание 17.2
    echo $str[4];
    echo $str[3];
    echo $str[2];
    echo $str[1];
    echo $str[0];
    ?> <br>
    <br>
    <?php
    $num = 4;
    $str = 'abcde'; // задание 17.3
    echo $str[4];
    ?> <br>
    <br>
    <?php
    $str = 'abcde';
    $last = strlen($str) - 1; // задание 17.4
    echo $str[$last];
    ?> <br>
    <br>
    <?php
    $str = 'abcde';
    $last = strlen($str) - 2; // задание 17.5
    echo $str[$last];
    ?> <br>
    <br>
    <?php
    $str = 'abcde';
    $last = strlen($str) - 3; // задание 17.6
    echo $str[$last];
    ?> <br>
    <br>
    <?php
    $str = '12345'; // задание 17.7
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
    ?> <br>
    <br>
    <?php
    $num = 12345; // задание 17.8
    $str = (string) $num;
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
    ?> <br>
    <br>
    <?php
    $num = 12345; // задание 17.9
    $str = (string) $num;
    echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
    ?> <br>
    <br>
    <?php
    $num = 12345; // задание 17.10
    $str = (string) $num;
    echo $str[4];
    echo $str[3];
    echo $str[2];
    echo $str[1];
    echo $str[0];
    ?> <br>
    <br>
  </div>
  <div class="subject">
  <p class="nazv" >18. Сокращенные операции в PHP</p>
  <p >Не запуская код, определите, что выведется на экран:</p>
    <!-- Не запуская код, определите, что выведется на экран: -->
    <p >Задание 18.1 <br>выведит 3</p>
    <br>
    <br>
    <p >Задание 18.2 <br>выведит 6</p>
    <br>
    <br>
     <!-- Упростите приведенный код через сокращенные операции: --> 
     <!-- Здесь будет сразу упрощенные варианты заданий -->
    <p >Упростите приведенный код через сокращенные операции:</p>
    <p >Здесь будет сразу упрощенные варианты кодов</p>
    <p >Задание 18.3</p>
    <p > $num = 47; <br>
    $num += 7;<br>
    $num -= 18;<br>
    $num *= 10;<br>
    $num /= 15;<br>
    echo $num;</p>
    <br>
    <br>
    <p >Задание 18.4</p>
    <p > $$str = 'a';<br>
    $str .= 'b';<br>
    $str .= 'c';<br>
    echo $str;</p>
   <br>
    <br>
  </div>
  <div class="subject">
  <p class="nazv" >19. Операции инкремента и декремента в PHP</p>
  <!-- Переделайте этот код так, чтобы в нем операции инкремента и декремента: -->
    <!-- Здесь будет сразу переделанный вариант задания -->
  <p >Переделайте этот код так, чтобы в нем операции инкремента и декремента:</p>
  <p >Здесь будет сразу переделанный вариант кода</p>
  <p >Задание 19.1</p>
  <p >$num = 10;<br>
    $num++;<br>
    $num++;<br>
    $num--;<br>
    echo $num;</p>
    <br>
    <br>
    <p >Не запуская код, определите, что выведется на экран:</p>
    <!-- Не запуская код, определите, что выведется на экран: -->
    <p >Задание 19.2 <br>выведит 4</p>
    <br>
    <br>
    <p >Задание 19.3 <br>выведит 3</p>
    <br>
    <br>
    <p >Задание 19.4 <br>выведит 2</p>
    <br>
    <br>
    <p >Задание 19.5 <br>выведит 3</p>
    <br>
    <br>
    <p >Задание 19.6 <br>выведит 4 и 4</p>
   <br>
    <br>
    <p >Задание 19.7 <br>выведит 4 и 3</p>
    <br>
    <br>
    <p >Задание 19.8 <br>выведит 2 и 2</p>
    <br>
    <br>
    <p >Задание 19.9 <br>выведит 2 и 3</p>
    <br>
    <br>
    <p >Задание 19.10 <br>выведит 3 и 3</p>
    <br>
    <br>
  </div>
  <div class="subject">
  <p class="nazv" >20. Практика на операции в PHP</p>
  <br>
  <p>Количество секунд в сутках</p>
    <?php // задание 20.1
    echo 60 * 60 * 24; // количество секунд в сутках
    ?> <br>
    <br>
    <p>Количество секунд в 30 сутках</p>
    <?php // задание 20.2
    echo 60 * 60 * 24 * 30; // количество секунд в 30 сутках
    ?> <br>
    <br>
    <p>Количество секунд в году</p>
    <?php // задание 20.3
    echo 60 * 60 * 24 * 365; // количество секунд в году
    ?> <br>
    <br>
    <p>Количество минут в сутках</p>
    <?php // задание 20.4
    echo 24 * 60; // количество минут в сутках
    ?> <br>
    <br>
    <p>Количество минут в году</p>
    <?php // задание 20.5
    echo 24 * 60 * 365; // количество минут в году
    ?> <br>
    <br>
    <p>Количество байт в мегабайте</p>
    <?php // задание 20.6
    echo 1024 * 1024; // количество байт в мегабайте
    ?> <br>
    <br>
    <p>Количество байт в гигабайте</p>
    <?php // задание 20.7
    echo 1024 * 1024 * 1024; // количество байт в гигабайте
    ?> <br>
    <br>
    <p>Количество байт в 10 гигабайтах</p>
    <?php // задание 20.7
    echo 1024 * 1024 * 1024 * 10; // количество байт в 10 гигабайтах
    ?> <br>
    <br>
    <p>Количество байт в терабайте</p>
    <?php // задание 20.7
    echo 1024 * 1024 * 1024 * 1024; // количество байт в терабайте
    ?> <br>
    <br>
    <p>Количество килобайт в терабайте</p>
    <?php // задание 20.7
    echo 1024 * 1024 * 1024; // количество килобайт в терабайте
    ?> <br>
    <br>
  </div>
  <div class="subject">
  <p class="nazv" >21. Практика на формулы в PHP</p>
  <br>
  <p>Площадь круга</p>
    <?php
    $r = 3; // задание 21.1
    $s = $r * $r * 3.14;
    echo $s; // площадь круга
    ?> <br>
    <br>
    <p>Площадь квадрата</p>
    <?php
    $r = 5; // задание 21.2
    $s = $r * $r;
    echo $s; // площадь квадрата
    ?> <br>
    <br>
    <p>Площадь прямоугольника</p>
    <?php
    $r = 5; // задание 21.3
    $s = 7;
    $p = $s * $r;
    echo $p; // периметр площадь
    ?> <br>
    <br>
    <p>Периметр прямоугольника</p>
    <?php
    $r = 5; // задание 21.4
    $s = 7;
    $p = $s + $s + $r + $r;
    echo $p; // периметр прямоугольника
    ?> <br>
    <br>
    <p>цельсия в фаренгейт</p>
    <?php
    $tc = 5; // задание 21.5
    $f = (5 * 9 / 5) + 32;
    echo $f; // цельсия в фаренгейт
    ?> <br>
    <br>
    <p>фаренгейт в цельсия</p>
    <?php
    $tc = 5; // задание 21.6
    $f = (5 - 32) * 5 / 9;
    echo $f; // фаренгейт в цельсия
    ?> <br>
    <br>
  </div>
  <div class="subject"> 
  <p class="nazv" >22. Массивы в PHP</p>
    <?php
    $arr = ['a', 'b', 'c'];// задание 22.1
    echo var_dump($arr);
    ?> <br>
    <br>
    <?php
    $arr = ['a', 'b', 'c'];// задание 22.2

    echo $arr[0] . ' ';
    echo $arr[1] . ' ';
    echo $arr[2] . ' ';
    ?> <br>
    <br>
    <?php
    $arr = ['a', 'b', 'c', 'd'];// задание 22.3
    echo $arr[0] . '+' . $arr[1] . '+' . $arr[2] . '+' . $arr[3];
    ?> <br>
    <br>
     <?php
    $arr = ['1', '2', '3'];// задание 22.4
    $result = $arr[0] + $arr[1] + $arr[2];
    echo $result;
    ?> <br>
    <br>
    <?php
   $arr = [2, 5, 3, 9];// задание 22.5
   echo $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
    ?> <br>
    <br>
  </div>
  <div class="subject"> 
  <p class="nazv" >23. Ассоциативные массивы в PHP</p>
  <?php
	$arr = [1 => 'a', 2 => 'b', 3 => 'c'];// задание 23.1
  echo $arr[1];
  echo $arr[2];
  echo $arr[3];
  ?>
  <br>
    <br>
  <?php
	$arr = [1 => 'январь', 2 => 'февраль', 3 => 'март', 4 => 'аперль', 5 => 'май', 6 => 'июнь', 7 => 'июль', 8 => 'август', 9 => 'сентябрь', 10 => 'октябрь', 11 => 'ноябрь', 12 => 'декабрь'];// задание 23.2
  echo $arr[1];
  ?>
  <br>
    <br>
    <?php
	$user = ['name' => 'Настя', 'surname' => 'Чапурина','patronymic' => 'Александровна'];// задание 23.3
  echo $user['surname'] . ' ' . $user['name']. ' ' . $user['patronymic'];
  ?>
  <br>
    <br>
    <?php
	$date = ['year' => '2023', 'month' => '04','day' => '06'];// задание 23.3
  echo $date['year'] . '-' . $date['month']. '-' . $date['day'];
  ?>
<br>
    <br>
  </div>
  <div class="subject"> 
  <p class="nazv" >24. Порядок элементов в массивах в PHP</p>
  <p > Проверьте описанное на каком-нибудь из ваших ассоциативных массивов.</p>
  <p>Проверила</p>
    <br>
     <br>
  </div>
  <div class="subject"> 
  <p class="nazv" >25. Длина массива в PHP</p>
  <?php
    $arr = ['a','b', 'c'];// задание 25.1
    echo count($arr);
  ?> <br>
  <br>
  <?php
	  $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4]; // задание 25.2
    echo count($arr);
  ?> <br>
  <br>
  <?php
	 $arr = ['a', 'b', 'c', 'd', 'e']; // задание 25.3
    $last = count($arr) - 1;
    echo $arr[$last];
  ?> <br>
  <br>
   <?php
	 $arr = ['a', 'b', 'c', 'd', 'e']; // задание 25.4
    $last = count($arr) - 2;
    echo $arr[$last];
  ?> <br>
  <br>
  </div>
  <div class="subject">
  <p class="nazv" >26. Изменение элементов массива в PHP</p>
    <?php
   $arr = ['a' => 1, 'b' => 2, 'c' => 3]; // задание 26.1
   $arr[0] = '!';
   $arr[1] = '+';
   $arr[2] = '?';
   var_dump($arr); 
    ?> <br>
    <br>
   <?php
	  $arr = ['a', 'b', 'c'];// задание 26.2
	
	  $arr[0] = $arr[0] . '3';
	  $arr[1] = $arr[1] . '3';
	  $arr[2] = $arr[2] . '3';
	
	  var_dump($arr); // выведет ['a!', 'b!', 'c!'] 
    ?> <br>
    <br>
    <?php
	  $arr = ['a' => 1, 'b' => 2, 'c' => 3]; // задание 26.3
	
	  $arr['a']++;
	  $arr['a']++;
	  $arr['b']--;
	  $arr['c']--;
	  $arr['c']--;
	
	  var_dump($arr);// выведит array(3) { ["a"]=> int(3) ["b"]=> int(1) ["c"]=> int(1) }
    ?> <br>
    <br>
  </div>
  <div class="subject">
  <p class="nazv" >27. Заполнение массивов в PHP</p>
  <?php
	$arr = [];     // задание 27.1
	$arr[] = '1'; 
	$arr[] = '2';  
	$arr[] = '3'; 
  $arr[] = '4';   
  $arr[] = '5';  
	var_dump($arr); 
   ?> <br>
   <br>
  <?php
	  $arr = [1, 2, 3]; // задание 27.2
    $arr[] = '4';   
    $arr[] = '5';  
	  var_dump($arr);
  ?> <br>
  <br>
  <?php
	  $arr = [];
	  $arr['year'] = '2023';// задание 27.3
	  $arr['month'] = '04';
	  $arr['day'] = '06';
	  var_dump($arr);
  ?> <br>
  <br>
  
  </div>
  <div class="subject">
  <p class="nazv" >28. Ключи из переменных в PHP</p>
  <?php
	$arr = [1, 2, 3, 4, 5];// задание 28.1
	$key1 = 0; 
	$key2 = 1;
  $sum = $arr[$key2]+ $arr[$key1];
	echo $sum;
?> <br>
<br>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3]; // задание 28.2
  $key='a';
  echo $key;
?> <br>
<br>
  </div>
</body>

</html>