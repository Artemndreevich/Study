<?php
$id = 2;
$ocenka = $_POST['ocenka'];
  $name = $_POST['name'];
  $text = $_POST['comment'];
$link = mysqli_connect("127.0.0.1", "root", "", "lerarnandcode");
$do="INSERT INTO `comment`(`id`,`name`, `text`,`ocenka`) VALUES('$id','$name', '$text','$ocenka')";

  $result=mysqli_query($link,$do   );


 

?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <title>Контроль знаннь | 10 урок</title>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- РУКИ ПРОЧЬ-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="dont%20touch/css/bootstrap.min.css">
    <link rel="stylesheet" href="dont%20touch/css/app.css">


    <!-- РУКИ ПРОЧЬ-->
    <link rel="stylesheet" href="dont%20touch/css/app.css">
    <script src="dont%20touch/js/vendor/jquery.js"></script>
    <link rel="stylesheet" href="Index.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="for_all.css">
    <link rel="stylesheet" href="animated.css">
    <link rel="shortcut icon" href="images/icon/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <script src="jquery-3.3.1.js"></script>
    <script src="min.js"></script>
    <link rel="stylesheet" href="input.css">

</head>
<body>


<!-- menu na cellphone -->
<div class="cellmenu">

    <div class="tlfMenuContainer">
        <div class="tlf-menu">
            <img src="images/mobile-header-icon.png" alt="" class="tlf-img">
            <span class="tlf-log  ">  LEARN&CODE </span>
        </div>
        <br><br>
        <div class="helpToTlf">
            <ul>
                <li></li>
                <li>

                    <a href="">sdlkmloejvogevl</a>
                </li>
                <li>
                    <a href="">sdlkmloejvogevl</a>
                </li>
                <li>
                    <a href="">sdlkmloejvogevl</a>
                </li>
                <li>
                    <a href="">sdlkmloejvogevl</a>
                </li>
                <li>
                    <a href="">sdlkmloejvogevl</a>
                </li>
                <li>
                    <a href="">sdlkmloejvogevl</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- menu na cellphone -->


<!-- menu na pk i planshet -->
<div class="menu-artem">
    <div class="row mx-1 align-items-center ">
        <div class="man2 col-3 col-sm-3 col-md-6 align-zero ">
            <span class="log cell small-3 medium-6 "><span>   LEARN&CODE </span></span>
        </div>

        <div class=" man  col-3 col-sm-3 col-md-2 menu-div">
            <a href="main-page.html" class="col-3 col-sm-3 col-md-2  ">Головна</a>
        </div>

        <div class="man col-3 col-sm-3 col-md-2 menu-div">
            <a href="#" class="col-3 col-sm-3 col-md-2 ">Словник</a>
        </div>

        <div class=" man col-3 col-sm-3 col-md-2 menu-div">
            <a href="#" class="col-3 col-sm-3 col-md-2"> aaaaa</a>
        </div>

        </header>

    </div>

</div>

<!-- menu na pk i planshet -->


<div id="all">


    <header id="head">
        <div class="row">

            <div class="img-to-header col-12 col-sm-12 col-md-4 col-lg-3  ">
                <img src="images/test.jpg">
            </div>
            <div class="header-div col-12 col-sm-12 col-md-8 col-lg-9">
                <div>
                    <h1>Контроль знаннь з курсу HTML</h1>
                    <h3> У цьому уроці ви :</h3>
                    <ul id="main-ul">
                        <li> Пригадаєте пройдений матеріал</li>
                        <li> Перевірите якість своїх знаннь</li>
                        <li> Попрактикуєтесь</li>


                    </ul>
                </div>

            </div>

        </div>

    </header>


    <div class="main">

        <div class="htmlboy col-6 col-md-4 col-lg-3">
        </div>


        <div class="lesson-block" id="hypers-1">
            <h1>Контроль знаннь з курсу HTML</h1>


        </div>


        <div class="lesson-block" id="block1_2">
            <h2>Рівень 1</h2>
            <h4>У цьому рівні вам необхідно вибрати одну правильну відповідь. Після натискання на варіант відповіді, він зафарбується у світліший колір. Коли відповісте на всі запитання, натисніть кнопку "Закінчити тест та дізнатись результат" та побачите кількість набраних балів (максимумальна оцінка - 12).
                <br><br>
                <span class="red">Будьте уважні!</span> На кожне питання ви можете відповісти лише один раз! Повторні
                відповіді не зараховуватимуться!
                <br><br> Також не забувай дивитися у правий нижній куток! ТЕГ допомагатиме тобі з тестом.
            </h4>

            <p>
            <div id="q-box1">
                <span class="vopros">1) Який з цих тегів НЕ потребує закриття?</span>

                <button class="falseasnwer" id="vp1f1"><span class="tag">&lt;head&gt;</span></button>
                <button class="trueanswer" id="vp1"><span class="tag">&lt;img&gt;</span></button>
                <button class="falseasnwer" id="vp1f2"><span class="tag">&lt;p&gt;</span></button>
                <button class="falseasnwer" id="vp1f3"><span class="tag">&lt;em&gt;</span></button>
            </div>
            <hr>
            <div id="q-box2">
                <span class="vopros">2) Заголовок якого рівня буде мати найменший шрифт?</span>

                <button class="falseasnwer" id="vp2f1"><span class="tag">&lt;p&gt;</span></button>
                <button class="falseasnwer" id="vp2f2"><span class="tag">&lt;h1&gt;</span></button>
                <button class="trueanswer" id="vp2"><span class="tag">&lt;h6&gt;</span></button>
                <button class="falseasnwer" id="vp2f3"><span class="tag">&lt;h7&gt;</span></button>
            </div>
            <hr>
            <div id="q-box3">
                <span class="vopros">3) Який з цих атрибутів можна використовувати лише з тегом <span class="tag">&lt;а&gt;</span>?</span>

                <button class="falseasnwer" id="vp3f1">class</button>
                <button class="falseasnwer" id="vp3f2">id</button>
                <button class="trueanswer" id="vp3">target</button>
                <button class="falseasnwer" id="vp3f3">title</button>
            </div>
            <hr>
            <div id="q-box4">
                <span class="vopros">4) Який з запропонованих id не можна присвоїти елементу?</span>

                <button class="trueanswer" id="vp4">"1box"</button>
                <button class="falseasnwer" id="vp4f1">"box1"</button>
                <button class="falseasnwer" id="vp4f2">"box-1"</button>
                <button class="falseasnwer" id="vp4f3">"first-box"</button>
            </div>
            <hr>
            <div id="q-box5">
            <span class="vopros">5) Як називається такий вид списку?<br> 
                <ul>
                <li>
                  <ol>
                      <li>Пункт 1</li>
                      <li>Пункт 2</li>
                      <li>Пункт 3</li>
                  </ol>
                </li>
               
                <li>
                  <ol>
                     <li>Пункт 1</li>
                     <li>Пункт 2</li>
                     <li>Пункт 3</li>
                  </ol>
                </li>
            </ul>
        </span>

                <button class="falseasnwer" id="vp5f1">Нумерований</button>
                <button class="trueanswer" id="vp5">Вкладенний</button>
                <button class="falseasnwer" id="vp5f2">Маркований</button>
                <button class="falseasnwer" id="vp5f3">Це не список</button>
            </div>

            <hr>

            <div id="q-box6">
            <span class="vopros">6) Яке твердження про цей фрагмент коду неправильне?
                <br>
                <span class="border-exmpl">
                    <span class="tag">&lt;body&gt;</span><br>
                    <span class="tag">&lt;h1&gt;</span>Заголовок<span class="tag">&lt;/h1&gt;</span><br>
                    <span class="tag">&lt;p&gt;</span>
                    Текст що описує зображення
                    <span class="tag">&lt;img</span> <span class="blue">src="image.jpg"</span><span
                        class="tag">&gt;</span>
                    <span class="tag">&lt;/p&gt;</span><br>
                    <span class="tag">&lt;/body&gt;</span>
                </span>
            </span>

                <button class="falseasnwer" id="vp6f1">&lt;p&gt; дочірній для &lt;body&gt;</button>
                <button class="trueanswer" id="vp6">&lt;h1&gt; материнський для &lt;img&gt;</button>
                <button class="falseasnwer" id="vp6f2">&lt;h1&gt;, &lt;p&gt; та &lt;img&gt; дочірні для &lt;body&gt;
                </button>
                <button class="falseasnwer" id="vp6f3">&lt;h1&gt; родинний для &lt;p&gt;</button>
            </div>
            <hr>
            <div id="q-box7">
            
            <span class="vopros">7) Який маршрут треба вказати у <span class="tag">&lt;img</span> <span class="blue">src=""</span><span
                    class="tag">&gt;</span> в index.html, щоб у браузері відобразилось image.jpg?
            <img src="images/folders-skhema.png" width="600px"><br></span>

                <button class="falseasnwer" id="vp7f1">main/sites/images/headers/image.jpg</button>
                <button class="falseasnwer" id="vp7f2">../../images/headers/image.jpg</button>
                <button class="falseasnwer" id="vp7f3">../main/images/headers/image.jpg</button>
                <button class="trueanswer" id="vp7">../images/headers/image.jpg</button>
            </div>

            <hr>
            <div id="q-box8">
            <span class="vopros">8) Установіть відповідність між номером комірки та атрибутом, використаним для її створення
                
                <table class="compare-table" style="float: left; margin: 20px; clear: both">
                    <tr>
                        <th rowspan="3">1</th> <td>a</td>  <th colspan="3">4</th> 
                    </tr>
                    <tr>
                         <th colspan="2">2</th>  <td>a</td> <th rowspan="2">3</th>
                    </tr>
                    <tr>
                             <td>a</td> <td>a</td> <td>a</td> 
                        </tr>
                </table>
                <div style="margin-left: 350px; margin-bottom: 40px;">
                    <br>
                        <ol style="list-style-type: upper-latin; list-style-position: inside">
                            <li>rowspan="2"</li>
                            <li>rowspan="3"</li>
                            <li>colspan="2"</li>
                            <li>colspan="3"</li>
                        </ol>
                    </div>
            </span>

            <button class="falseasnwer" id="vp8f1">1)D, 2)A, 3)C, 4)B</button>
            <button class="falseasnwer" id="vp8f2">1)B, 2)A, 3)C, 4)D</button>
            <button class="falseasnwer" id="vp8f3">1)D, 2)C, 3)A, 4)B</button>
            <button class="trueanswer"  id="vp8">1)B, 2)C, 3)A, 4)D</button>
            
        </div>

            </div>

            <hr>

            <div id="q-box9">
                <span class="vopros">9) Які теги використано для форматування цього <strong><big><em>слова</em></big></strong>?</span>

                <button class="falseasnwer" id="vp9f1"><span class="tag">&lt;em&gt;</span>, <span class="tag">&lt;strong&gt;</span>
                </button>
                <button class="trueanswer" id="vp9"><span class="tag">&lt;em&gt;</span>, <span class="tag">&lt;strong&gt;</span>,
                    <span class="tag">&lt;big&gt;</span></button>
                <button class="falseasnwer" id="vp9f2"><span class="tag">&lt;i&gt;</span>, <span
                        class="tag">&lt;big&gt;</span></button>
                <button class="falseasnwer" id="vp9f3"><span class="tag">&lt;big&gt;</span>, <span class="tag">&lt;big&gt;</span>,
                    <span class="tag">&lt;i&gt;</span></button>
            </div>

            <hr>
            <div id="q-box10">
            <span class="vopros">10) У якому вікні відкриється гіперпосилання та чи буде створювати нові вікна при кожному натисканні?
                <br>
                <span class="border-exmpl"><span class="tag">&lt;a </span><span class="blue">href=</span><span
                        class="light-blue">"page.html"</span> <span class="blue">target=</span><span class="light-blue">"blank"</span><span
                        class="tag">&gt;</span>гіперпосилання<span class="tag">&lt;/a&gt;</span></span></span>

                <button class="falseasnwer" id="vp10f1">Відкриється у тому ж вікні</button>
                <button class="falseasnwer" id="vp10f2">При кожному натисканні <br>створюватиме нове вікно</button>
                <button class="trueanswer" id="vp10">При першому натисканні відкриється у новому вікні, <br>а при
                    наступних - у вже створенному
                </button>
            </div>

            <hr>

            <div id="q-box11">
                <span class="vopros">11) Павло вірішив додати на свою сторінку зображення свого кота, але воно було завелике, тож він вирішив зменшити його за допомогою атрибутів. Але щось пішло не так... Чому зображення відображене на сторінці виглядає більш "сплюснутим" ніж оригінальне зображення?</span>
                <br>
                <figure style="display: inline-block">
                    <figcaption>Оригінальне зображення</figcaption>
                    <img src="images/cat.jpg" title="оригінал">
                </figure>
                <figure style="display: inline-block; margin-left: 40px; vertical-align: top">
                    <figcaption>Відображення на сторінці</figcaption>
                    <img src="images/cat.jpg" title="відображення на сторінці" width="300px" height="200px">
                </figure>


                <br>
                <button class="trueanswer" id="vp11">Павло вказав одночасно і height, і width</button>
                <button class="falseasnwer" id="vp11f1">Павло вказав height і width у відсотках</button>
                <button class="falseasnwer" id="vp11f2">Павло вказав лише height та не вказав width</button>
                <button class="falseasnwer" id="vp11f3">Павло вказав лише width та не вказав height</button>
            </div>

            <hr>

            <div id="q-box12">
                <span class="vopros">12) <img src="images/html-txt.png" style="float: left; margin-right: 10px"> Марія намагалась створити HTML файл у блокноті, але в неї вийшов текстовий файл формату .txt з назвою index.html. Якої помилки допустилась Марія?</span>
                <br><br><br>
                <button class="falseasnwer" id="vp12f1">Вона змінила кодування файлу</button>
                <button class="trueanswer" id="vp12">Вона забула змінити тип файлу на "Усі файли"</button>
                <button class="falseasnwer" id="vp12f2">Створений нею файл не містив жодного тегу</button>
                <button class="falseasnwer" id="vp12f3">Її компьютер не підтримує формат .html</button>
            </div>

            </p>
            <div id="result-space">
                <button class="blue-button" id="end-test">Закінчити тест та дізнатись результат</button>
            </div>
        </div>


        <div class="lesson-block" id='artsegr'>
            <a href="9lesson.html" class="poperedniy-lesson"><h3><img src="images/icon/arrow-left.png" width="35px">
                На попередній урок</h3></a>
            <a href="6lesson.html" class="next-lesson"><h3>На наступний урок <img
                    src="images/icon/arrow-right.png" width="35px"></h3></a>

        </div>


    </div>
 <form action="10lesson.php" method="post">
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

$q="SELECT  name,text,ocenka FROM comment WHERE id='2' ORDER BY ocenka DESC
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
</div>


<script src="dont%20touch/js/popper.min.js"></script>
<script src="dont%20touch/js/bootstrap.min.js"></script>

<script src="dont%20touch/js/app.js"></script>
<script>
    $(document).ready(function () {
        var name = prompt('Як тебе звати?');

        var teacher_name = prompt('Як звати твого вчителя інформатики?');
        var answer = {
            vp1: '<span class="right">Правильно!</span>',
            vp2: '<span class="right">Правильно!</span>',
            vp3: '<span class="right">Правильно!</span>',
            vp4: '<span class="right">Правильно!</span> Id не може починатись з цифри',
            vp5: '<span class="right">Правильно!</span>',
            vp6: '<span class="right">Правильно!</span> <span class="tag">&lt;img&gt;</span> вкладений у <span class="tag">&lt;p&gt;</span> та <span class="tag">&lt;body&gt;</span>, тож саме вони є материньскими елементами для нього',
            vp7: '<span class="right">Правильно!</span>',
            vp8: '<span class="right">Правильно!</span>',
            vp9: '<span class="right">Правильно!</span>',
            vp10: '<span class="right">Правильно!</span>',
            vp11: '<span class="right">Правильно!</span> Якщо вказати одночасно і висоту, і ширину, які не пропорційні оригінальним, зображення стане "сплюснутим".',
            vp12: '<span class="right">Правильно!</span>'

        }
        $('.htmlboy').html(` <img src="images/htmlboy/good.png">
<p>
   Привіт, ` + name + `, я ТЕГ! Я допоможу тобі з тестом! Після кожної відповіді я буду казати тобі правильна вона чи ні, та, при необхідності, аргументувати. Успіхів!
</p> 
    <button id="nextA" class="blue-button" >Закрити</button> `);


            $('#nextA').on('click', function () {
                $('.htmlboy').hide();
               
            });
      var a=0;
            
      $('#end-test').click(function(){
    $('#block1_2').html(`
            <h2>Рівень 1</h2>
            <h4>У цьому рівні вам необхідно вибрати одну правильну відповідь. Після натискання на варіант відповіді, він зафарбується у світліший колір. Коли відповісте на всі запитання, натисніть кнопку "Закінчити тест та дізнатись результат" та побачите кількість набраних балів (максимумальна оцінка - 12).
                <br><br>
                <span class="red">Будьте уважні!</span> На кожне питання ви можете відповісти лише один раз! Повторні відповіді не зараховуватимуться!
                <br><br> Також не забувай дивитися у правий нижній куток! ТЕГ допомагатиме тобі з тестом.
            </h4>

            <p>
                <div id="q-box1">
               <span class="vopros">1) Який з цих тегів НЕ потребує закриття?</span>
            
                <button class="falseasnwer" id="vp1f1"><span class="tag">&lt;head&gt;</span></button>
                <button class="trueanswer"  id="vp1"><span class="tag">&lt;img&gt;</span></button>
                <button class="falseasnwer" id="vp1f2"><span class="tag">&lt;p&gt;</span></button>
                <button class="falseasnwer" id="vp1f3"><span class="tag">&lt;em&gt;</span></button>
            </div>
                <hr>
                <div id="q-box2">
            <span class="vopros">2) Заголовок якого рівня буде мати найменший шрифт?</span>
            
            <button class="falseasnwer" id="vp2f1"><span class="tag">&lt;p&gt;</span></button>
            <button class="falseasnwer" id="vp2f2"><span class="tag">&lt;h1&gt;</span></button>
            <button class="trueanswer"  id="vp2"><span class="tag">&lt;h6&gt;</span></button>
            <button class="falseasnwer" id="vp2f3"><span class="tag">&lt;h7&gt;</span></button>
        </div>
            <hr>  
        <div id="q-box3">
            <span class="vopros">3) Який з цих атрибутів можна використовувати лише з тегом <span class="tag">&lt;а&gt;</span>?</span>
             
            <button class="falseasnwer" id="vp3f1" >class</button>
            <button class="falseasnwer" id="vp3f2">id</button>
            <button class="trueanswer"  id="vp3">target</button>
            <button class="falseasnwer" id="vp3f3">title</button>
        </div>
            <hr>     
        <div id="q-box4">
            <span class="vopros">4) Який з запропонованих id не можна присвоїти елементу?</span>
            
            <button class="trueanswer"  id="vp4">"1box"</button>
            <button class="falseasnwer" id="vp4f1">"box1"</button>
            <button class="falseasnwer" id="vp4f2">"box-1"</button>
            <button class="falseasnwer" id="vp4f3" >"first-box"</button>
        </div>
            <hr>     
        <div id="q-box5">    
            <span class="vopros">5) Як називається такий вид списку?<br> 
                <ul>
                <li>
                  <ol>
                      <li>Пункт 1</li>
                      <li>Пункт 2</li>
                      <li>Пункт 3</li>
                  </ol>
                </li>
               
                <li>
                  <ol>
                     <li>Пункт 1</li>
                     <li>Пункт 2</li>
                     <li>Пункт 3</li>
                  </ol>
                </li>
            </ul>
        </span>
            
            <button class="falseasnwer" id="vp5f1">Нумерований</button>
            <button class="trueanswer"  id="vp5">Вкладенний</button>
            <button class="falseasnwer" id="vp5f2">Маркований</button>
            <button class="falseasnwer" id="vp5f3">Це не список</button>
        </div>

            <hr>

        <div id="q-box6">         
            <span class="vopros">6) Яке твердження про цей фрагмент коду неправильне?
                <br>
                <span class="border-exmpl">
                    <span class="tag">&lt;body&gt;</span><br>
                    <span class="tag">&lt;h1&gt;</span>Заголовок<span class="tag">&lt;/h1&gt;</span><br>
                    <span class="tag">&lt;p&gt;</span>
                    Текст що описує зображення
                    <span class="tag">&lt;img</span> <span class="blue">src="image.jpg"</span><span class="tag">&gt;</span>
                    <span class="tag">&lt;/p&gt;</span><br>
                    <span class="tag">&lt;/body&gt;</span>
                </span>
            </span>
           
            <button class="falseasnwer" id="vp6f1">&lt;p&gt; дочірній для &lt;body&gt;</button>
            <button class="trueanswer"  id="vp6">&lt;h1&gt; материнський для &lt;img&gt;</button>
            <button class="falseasnwer" id="vp6f2">&lt;h1&gt;, &lt;p&gt; та &lt;img&gt; дочірні для &lt;body&gt;</button>
            <button class="falseasnwer" id="vp6f3">&lt;h1&gt; родинний для &lt;p&gt;</button>
        </div> 
            <hr>     
        <div id="q-box7">    
            
            <span class="vopros">7) Який маршрут треба вказати у <span class="tag">&lt;img</span> <span class="blue">src=""</span><span class="tag">&gt;</span> в index.html, щоб у браузері відобразилось image.jpg?
            <img src="images/folders-skhema.png" width="600px"><br></span>
            
            <button class="falseasnwer" id="vp7f1">main/sites/images/headers/image.jpg</button>
            <button class="falseasnwer" id="vp7f2">../../images/headers/image.jpg</button>
            <button class="falseasnwer" id="vp7f3">../main/images/headers/image.jpg</button>
            <button class="trueanswer"  id="vp7">../images/headers/image.jpg</button>
        </div>

            <hr>
        <div id="q-box8">          
            <span class="vopros">8) Установіть відповідність між номером комірки та атрибутом, використаним для її створення
                
                <table class="compare-table" style="float: left; margin: 20px; clear: both">
                    <tr>
                        <th rowspan="3">1</th> <td>a</td>  <th colspan="3">4</th> 
                    </tr>
                    <tr>
                         <th colspan="2">2</th>  <td>a</td> <th rowspan="2">3</th>
                    </tr>
                    <tr>
                             <td>a</td> <td>a</td> <td>a</td> 
                        </tr>
                </table>
                <div style="margin-left: 350px; margin-bottom: 40px;">
                    <br>
                        <ol style="list-style-type: upper-latin; list-style-position: inside">
                            <li>rowspan="2"</li>
                            <li>rowspan="3"</li>
                            <li>colspan="2"</li>
                            <li>colspan="3"</li>
                        </ol>
                    </div>
            </span>

            <button class="falseasnwer" id="vp8f1">1)D, 2)A, 3)C, 4)B</button>
            <button class="falseasnwer" id="vp8f2">1)D, 2)A, 3)B, 4)D</button>
            <button class="falseasnwer" id="vp8f3">1)D, 2)C, 3)A, 4)B</button>
            <button class="trueanswer"  id="vp8">1)B, 2)C, 3)A, 4)D</button>
            
        </div>

            <hr> 
            
        <div id="q-box9">     
            <span class="vopros">9) Які теги використано для форматування цього <strong><big><em>слова</em></big></strong>?</span>
            
            <button class="falseasnwer" id="vp9f1"><span class="tag">&lt;em&gt;</span>, <span class="tag">&lt;strong&gt;</span></button>
            <button class="trueanswer"  id="vp9"><span class="tag">&lt;em&gt;</span>, <span class="tag">&lt;strong&gt;</span>, <span class="tag">&lt;big&gt;</span></button>
            <button class="falseasnwer" id="vp9f2"><span class="tag">&lt;i&gt;</span>, <span class="tag">&lt;big&gt;</span></button>
            <button class="falseasnwer" id="vp9f3"><span class="tag">&lt;big&gt;</span>, <span class="tag">&lt;big&gt;</span>, <span class="tag">&lt;i&gt;</span></button>
        </div>    
            
            <hr>  
        <div id="q-box10"> 
            <span class="vopros">10) У якому вікні відкриється гіперпосилання та чи буде створювати нові вікна при кожному натисканні?
                <br>
                <span class="border-exmpl"><span class="tag">&lt;a </span><span class="blue">href=</span><span class="light-blue">"page.html"</span> <span class="blue">target=</span><span class="light-blue">"blank"</span><span class="tag">&gt;</span>гіперпосилання<span class="tag">&lt;/a&gt;</span></span></span>
            
            <button class="falseasnwer" id="vp10f1">Відкриється у тому ж вікні</button>
            <button class="falseasnwer" id="vp10f2">При кожному натисканні <br>створюватиме нове вікно</button>
            <button class="trueanswer"  id="vp10">При першому натисканні відкриється у новому вікні, <br>а при наступних - у вже створенному</button>
        </div>
            
            <hr> 

        <div id="q-box11">         
            <span class="vopros">11) Павло вірішив додати на свою сторінку зображення свого кота, але воно було завелике, тож він вирішив зменшити його за допомогою атрибутів. Але щось пішло не так... Чому зображення відображене на сторінці виглядає більш "сплюснутим" ніж оригінальне зображення?</span>
            <br>
            <figure style="display: inline-block">
                    <figcaption>Оригінальне зображення</figcaption>
                <img src="images/cat.jpg" title="оригінал"> 
            </figure>
        <figure style="display: inline-block; margin-left: 40px; vertical-align: top">
                <figcaption>Відображення на сторінці</figcaption>
                <img src="images/cat.jpg" title="відображення на сторінці" width="300px" height="200px">
        </figure>
        
        
            <br>
            <button class="trueanswer"  id="vp11">Павло вказав одночасно і height, і width</button>
            <button class="falseasnwer" id="vp11f1">Павло вказав height і width у відсотках</button>
            <button class="falseasnwer" id="vp11f2" >Павло вказав лише height та не вказав width</button>
            <button class="falseasnwer" id="vp11f3">Павло вказав лише width та не вказав height</button>
        </div>    

            <hr>  
            
        <div id="q-box12">     
            <span class="vopros">12) <img src="images/html-txt.png" style="float: left; margin-right: 10px"> Марія намагалась створити HTML файл у блокноті, але в неї вийшов текстовий файл формату .txt з назвою index.html. Якої помилки допустилась Марія?</span>
            <br><br><br>
            <button class="falseasnwer" id="vp12f1">Вона змінила кодування файлу</button>
            <button class="trueanswer"  id="vp12">Вона забула змінити тип файлу на "Усі файли"</button>
            <button class="falseasnwer" id="vp12f2">Створений нею файл не містив жодного тегу</button>
            <button class="falseasnwer" id="vp12f3">Її компьютер не підтримує формат .html</button>
        </div>
        
            </p>
            <div id="result-space">
            <span class="vopros">Твій результат: `+a+` балів</span>
            </div>
            `);
/* $('.trueanswer').css('background-color','green','border-color','green');
$('.falseasnwer').css('background-color','red','border-color','red'); */

            $('.htmlboy').show();
            $('#nextA').on('click', function () {
                $('.htmlboy').hide();
            });
        });

        $('.trueanswer').click(function () {
            var attrid = $(this).attr('id');
            /*	alert(answer[attrid]);
                alert(attrid);*/
            a++;

            $('.htmlboy').html(` <img src="images/htmlboy/good.png">
<p>
    ` + answer[attrid] + `
</p>
    <button id="nextA" class="blue-button" >Закрити</button> `);

            $('.htmlboy').show();

            $('#nextA').on('click', function () {
                $('.htmlboy').hide();
            });


            if (attrid == "vp1") {
                $('#q-box1').html(`
               <span class="vopros">1) Який з цих тегів НЕ потребує закриття?</span>
            
                <button class="falseasnwer" id="vp1f1"><span class="tag">&lt;head&gt;</span></button>
                <button class="trueanswer"  id="vp1"><span class="tag">&lt;img&gt;</span></button>
                <button class="falseasnwer" id="vp1f2"><span class="tag">&lt;p&gt;</span></button>
                <button class="falseasnwer" id="vp1f3"><span class="tag">&lt;em&gt;</span></button>
            
    `);


$('#q-box1 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp2"){
               $('#q-box2').html(`
               <span class="vopros">2) Заголовок якого рівня буде мати найменший шрифт?</span>
            
            <button class="falseasnwer" id="vp2f1"><span class="tag">&lt;p&gt;</span></button>
            <button class="falseasnwer" id="vp2f2"><span class="tag">&lt;h1&gt;</span></button>
            <button class="trueanswer"  id="vp2"><span class="tag">&lt;h6&gt;</span></button>
            <button class="falseasnwer" id="vp2f3"><span class="tag">&lt;h7&gt;</span></button>
            
    `);


$('#q-box2 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp3"){
               $('#q-box3').html(`
               <span class="vopros">3) Який з цих атрибутів можна використовувати лише з тегом <span class="tag">&lt;а&gt;</span>?</span>
             
             <button class="falseasnwer" id="vp3f1" >class</button>
             <button class="falseasnwer" id="vp3f2">id</button>
             <button class="trueanswer"  id="vp3">target</button>
             <button class="falseasnwer" id="vp3f3">title</button>
            
    `);


$('#q-box3 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp4"){
               $('#q-box4').html(`
               <span class="vopros">4) Який з запропонованих id не можна присвоїти елементу?</span>
            
            <button class="trueanswer"  id="vp4">"1box"</button>
            <button class="falseasnwer" id="vp4f1">"box1"</button>
            <button class="falseasnwer" id="vp4f2">"box-1"</button>
            <button class="falseasnwer" id="vp4f3" >"first-box"</button>
            
    `);


$('#q-box4 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp5"){
               $('#q-box5').html(`
               <span class="vopros">5) Як називається такий вид списку?<br> 
                <ul>
                <li>
                  <ol>
                      <li>Пункт 1</li>
                      <li>Пункт 2</li>
                      <li>Пункт 3</li>
                  </ol>
                </li>
               
                <li>
                  <ol>
                     <li>Пункт 1</li>
                     <li>Пункт 2</li>
                     <li>Пункт 3</li>
                  </ol>
                </li>
            </ul>
        </span>
            
            <button class="falseasnwer" id="vp5f1">Нумерований</button>
            <button class="trueanswer"  id="vp5">Вкладенний</button>
            <button class="falseasnwer" id="vp5f2">Маркований</button>
            <button class="falseasnwer" id="vp5f3">Це не список</button>
            
    `);


$('#q-box5 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp6"){
               $('#q-box6').html(`
               <span class="vopros">6) Яке твердження про цей фрагмент коду неправильне?
                <br>
                <span class="border-exmpl">
                    <span class="tag">&lt;body&gt;</span><br>
                    <span class="tag">&lt;h1&gt;</span>Заголовок<span class="tag">&lt;/h1&gt;</span><br>
                    <span class="tag">&lt;p&gt;</span>
                    Текст що описує зображення
                    <span class="tag">&lt;img</span> <span class="blue">src="image.jpg"</span><span class="tag">&gt;</span>
                    <span class="tag">&lt;/p&gt;</span><br>
                    <span class="tag">&lt;/body&gt;</span>
                </span>
            </span>
           
            <button class="falseasnwer" id="vp6f1">&lt;p&gt; дочірній для &lt;body&gt;</button>
            <button class="trueanswer"  id="vp6">&lt;h1&gt; материнський для &lt;img&gt;</button>
            <button class="falseasnwer" id="vp6f2">&lt;h1&gt;, &lt;p&gt; та &lt;img&gt; дочірні для &lt;body&gt;</button>
            <button class="falseasnwer" id="vp6f3">&lt;h1&gt; родинний для &lt;p&gt;</button>
            
    `);


$('#q-box6 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp7"){
               $('#q-box7').html(`
               <span class="vopros">7) Який маршрут треба вказати у <span class="tag">&lt;img</span> <span class="blue">src=""</span><span class="tag">&gt;</span> в index.html, щоб у браузері відобразилось image.jpg?
            <img src="images/folders-skhema.png" width="600px"><br></span>
            
            <button class="falseasnwer" id="vp7f1">main/sites/images/headers/image.jpg</button>
            <button class="falseasnwer" id="vp7f2">../../images/headers/image.jpg</button>
            <button class="falseasnwer" id="vp7f3">../main/images/headers/image.jpg</button>
            <button class="trueanswer"  id="vp7">../images/headers/image.jpg</button>
            
    `);


$('#q-box7 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp8"){
               $('#q-box8').html(`
               <span class="vopros">8) Установіть відповідність між номером комірки та атрибутом, використаним для її створення
                
                <table class="compare-table" style="float: left; margin: 20px; clear: both">
                    <tr>
                        <th rowspan="3">1</th> <td>a</td>  <th colspan="3">4</th> 
                    </tr>
                    <tr>
                         <th colspan="2">2</th>  <td>a</td> <th rowspan="2">3</th>
                    </tr>
                    <tr>
                             <td>a</td> <td>a</td> <td>a</td> 
                        </tr>
                </table>
                <div style="margin-left: 350px; margin-bottom: 40px;">
                    <br>
                        <ol style="list-style-type: upper-latin; list-style-position: inside">
                            <li>rowspan="2"</li>
                            <li>rowspan="3"</li>
                            <li>colspan="2"</li>
                            <li>colspan="3"</li>
                        </ol>
                    </div>
            </span>

            <button class="falseasnwer" id="vp8f1">1)D, 2)A, 3)C, 4)B</button>
            <button class="falseasnwer" id="vp8f2">1)D, 2)A, 3)B, 4)D</button>
            <button class="falseasnwer" id="vp8f3">1)D, 2)C, 3)A, 4)B</button>
            <button class="trueanswer"  id="vp8">1)B, 2)C, 3)A, 4)D</button>
            
    `);


$('#q-box8 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp9"){
               $('#q-box9').html(`
               <span class="vopros">9) Які теги використано для форматування цього <strong><big><em>слова</em></big></strong>?</span>
            
            <button class="falseasnwer" id="vp9f1"><span class="tag">&lt;em&gt;</span>, <span class="tag">&lt;strong&gt;</span></button>
            <button class="trueanswer"  id="vp9"><span class="tag">&lt;em&gt;</span>, <span class="tag">&lt;strong&gt;</span>, <span class="tag">&lt;big&gt;</span></button>
            <button class="falseasnwer" id="vp9f2"><span class="tag">&lt;i&gt;</span>, <span class="tag">&lt;big&gt;</span></button>
            <button class="falseasnwer" id="vp9f3"><span class="tag">&lt;big&gt;</span>, <span class="tag">&lt;big&gt;</span>, <span class="tag">&lt;i&gt;</span></button>
            
    `);


$('#q-box9 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
            if(attrid == "vp10"){
               $('#q-box10').html(`
               <span class="vopros">10) У якому вікні відкриється гіперпосилання та чи буде створювати нові вікна при кожному натисканні?
                <br>
                <span class="border-exmpl"><span class="tag">&lt;a </span><span class="blue">href=</span><span class="light-blue">"page.html"</span> <span class="blue">target=</span><span class="light-blue">"blank"</span><span class="tag">&gt;</span>гіперпосилання<span class="tag">&lt;/a&gt;</span></span></span>
            
            <button class="falseasnwer" id="vp10f1">Відкриється у тому ж вікні</button>
            <button class="falseasnwer" id="vp10f2">При кожному натисканні <br>створюватиме нове вікно</button>
            <button class="trueanswer"  id="vp10">При першому натисканні відкриється у новому вікні, <br>а при наступних - у вже створенному</button>
            
    `);


$('#q-box10 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };

            if (attrid == "vp11") {
                $('#q-box11').html(`
               <span class="vopros">11) Павло вірішив додати на свою сторінку зображення свого кота, але воно було завелике, тож він вирішив зменшити його за допомогою атрибутів. Але щось пішло не так... Чому зображення відображене на сторінці виглядає більш "сплюснутим" ніж оригінальне зображення?</span>
            <br>
            <figure style="display: inline-block">
                    <figcaption>Оригінальне зображення</figcaption>
                <img src="images/cat.jpg" title="оригінал"> 
            </figure>
        <figure style="display: inline-block; margin-left: 40px; vertical-align: top">
                <figcaption>Відображення на сторінці</figcaption>
                <img src="images/cat.jpg" title="відображення на сторінці" width="300px" height="200px">
        </figure>
        
        
            <br>
            <button class="trueanswer"  id="vp11">Павло вказав одночасно і height, і width</button>
            <button class="falseasnwer" id="vp11f1">Павло вказав height і width у відсотках</button>
            <button class="falseasnwer" id="vp11f2" >Павло вказав лише height та не вказав width</button>
            <button class="falseasnwer" id="vp11f3">Павло вказав лише width та не вказав height</button>
           `);


$('#q-box11 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');

            };
           
            if(attrid == "vp12"){
               $('#q-box12').html(`
               <span class="vopros">12) <img src="images/html-txt.png" style="float: left; margin-right: 10px"> Марія намагалась створити HTML файл у блокноті, але в неї вийшов текстовий файл формату .txt з назвою index.html. Якої помилки допустилась Марія?</span>
            <br><br><br>
            <button class="falseasnwer" id="vp12f1">Вона змінила кодування файлу</button>
            <button class="trueanswer"  id="vp12">Вона забула змінити тип файлу на "Усі файли"</button>
            <button class="falseasnwer" id="vp12f2">Створений нею файл не містив жодного тегу</button>
            <button class="falseasnwer" id="vp12f3">Її компьютер не підтримує формат .html</button>
            `);


$('#q-box12 .trueanswer'). css('background-color','rgba(0, 44, 126, 0.5)');            
};


        });


        var answerfalse = {
            vp1f1: '<span class="red">Неправильно!</span> <span class="tag">&lt;head&gt;</span> завжди потрібно закривати перед <span class="tag">&lt;body&gt;</span>! ',
            vp1f2: '<span class="red">Неправильно!</span> Якщо не закрити <span class="tag">&lt;р&gt;</span>, то браузер не зрозуміє де закінчується абзац, тому його завжди закривають!',
            vp1f3: '<span class="red">Неправильно!</span> <span class="tag">&lt;em&gt;</span>, хоч і рядковий, але також потребує закриття, інакше весь текст після відкриваючого тегу стане курсивом!',

            vp2f1: '<span class="red">Неправильно!</span> Адже це взагалі не заголовок, а абзац!',
            vp2f2: '<span class="red">Неправильно!</span> Це, навпаки, найбільший заголовок!',
            vp2f3: '<span class="red">Неправильно!</span> Такого рівня заголовків взагалі не існує...',

            vp3f1: '<span class="red">Неправильно!</span> Id можна задати будь-якому елементу сторінки сторінки!',
            vp3f2: '<span class="red">Неправильно!</span> Class можна задати будь-якому елементу сторінки сторінки!',
            vp3f3: '<span class="red">Неправильно!</span> Цей атрибут можна використовувати з будь-яким елементом сторінки!',

            vp4f1: '<span class="red">Неправильно!</span> Id може містити цифри усередині або вкінці назви!',
            vp4f2: '<span class="red">Неправильно!</span> Id може містити цифри та тире усередині або вкінці назви!',
            vp4f3: '<span class="red">Неправильно!</span> Id може містити тире усередині назви!',

            vp5f1: '<span class="red">Неправильно!</span> Тут звичайно є нумерований список, але він ВКЛАДЕНИЙ у маркований!',
            vp5f2: '<span class="red">Неправильно!</span> Тут звичайно є маркований список, але у нього ВКЛАДЕНИЙ нумерований!',
            vp5f3: '<span class="red">Неправильно!</span> Звичайно, список! І навіть не один!',

            vp6f1: '<span class="red">Неправильно!</span> <span class="tag">&lt;p&gt;</span> вкладений у <span class="tag">&lt;body&gt;</span>, тому він і справді йому дочірній.',
            vp6f2: '<span class="red">Неправильно!</span> Усі ці теги знаходяться всередині <span class="tag">&lt;body&gt;</span>, тому вони дочірні для нього.',
            vp6f3: '<span class="red">Неправильно!</span> Вони, справді, родинні, адже знаходяться на одному рівні вкладеності.',

            vp7f1: '<span class="red">Неправильно!</span> Це казна-що, працювати не буде!',
            vp7f2: '<span class="red">Неправильно!</span> Це казна-що, працювати не буде!',
            vp7f3: '<span class="red">Неправильно!</span> Це казна-що, працювати не буде!',

            vp8f1: '<span class="red">Неправильно!</span>',
            vp8f2: '<span class="red">Неправильно!</span>',
            vp8f3: '<span class="red">Неправильно!</span>',

            vp9f1: '<span class="red">Неправильно!</span> Не вистачає одного тегу <span class="tag">&lt;big&gt;</span>.',
            vp9f2: '<span class="red">Неправильно!</span> Вийде недостатньо жирно, спробуйте додати <span class="tag">&lt;strong&gt;</span>',
            vp9f3: '<span class="red">Неправильно!</span> Забагато <span class="tag">&lt;big&gt;</span>! Краще замініть один з них на <span class="tag">&lt;strong&gt;</span>',

            vp10f1: '<span class="red">Неправильно!</span> Це гіперпосилання створить одне нове вікно і там завжди відкриватиметься. А щоб відкрити гіперопсилання у тому ж вікні, треба використати значення "_self".',
            vp10f2: '<span class="red">Неправильно!</span> Це гіперпосилання створить одне нове вікно і там завжди відкриватиметься. Хоч там і використано слово blank, але, щоб браузер відкривав сторінку кожен раз у новому вікні, необхідно писати "_blank", інакше це буде довільне ім`я',

            vp11f1: '<span class="red">Неправильно!</span> Висоту неможливо вказати у відсотках, тож вона зміниться пропорційно ширині, яка становитиме вказану кількість відсотків від оригіналу.',
            vp11f2: '<span class="red">Неправильно!</span> Якщо вказати лише висоту, то ширина зміниться пропорційно.',
            vp11f3: '<span class="red">Неправильно!</span> Якщо вказати лише ширину, то висота зміниться пропорційно.',

            vp12f1: '<span class="red">Неправильно!</span> Насправді, Марія просто забула змінити тип файлу на "Усі файли", і компьютер зберіг файл з назвою index.html у форматі .txt (що є форматом файлів у Блокноті).',
            vp12f2: '<span class="red">Неправильно!</span> Вміст файлу не має значення. Насправді, Марія просто забула змінити тип файлу на "Усі файли", і компьютер зберіг файл з назвою index.html у форматі .txt (що є форматом файлів у Блокноті).',
            vp12f3: '<span class="red">Неправильно!</span> Усі компьютери підтримують формат .html. Марія просто забула змінити тип файлу на "Усі файли", і компьютер зберіг файл з назвою index.html у форматі .txt (що є форматом файлів у Блокноті).'

        }

        $('.falseasnwer').click(function () {
            var attridf = $(this).attr('id');
            /*  alert(answer[attrid]);
                alert(attrid);*/

            $('.htmlboy').html(` <img src="images/htmlboy/confused.png">
<p>
    ` + answerfalse[attridf] + `
</p>
    <button id="nextA" class="blue-button" >Закрити</button> `);

            $('.htmlboy').show();

            $('#nextA').on('click', function () {
                $('.htmlboy').hide();
            });


            if (attridf == "vp1f1" || attridf == "vp1f2" || attridf == "vp1f3") {
                $('#q-box1').html(`
               <span class="vopros">1) Який з цих тегів НЕ потребує закриття?</span>
            
                <button class="falseasnwer" id="vp1f1"><span class="tag">&lt;head&gt;</span></button>
                <button class="trueanswer"  id="vp1"><span class="tag">&lt;img&gt;</span></button>
                <button class="falseasnwer" id="vp1f2"><span class="tag">&lt;p&gt;</span></button>
                <button class="falseasnwer" id="vp1f3"><span class="tag">&lt;em&gt;</span></button>
            
    `);


if(attridf == "vp1f1") {
    $('#vp1f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp1f2") {
    $('#vp1f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp1f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp2f1" || attridf == "vp2f2" || attridf == "vp2f3"){
               $('#q-box2').html(`
               <span class="vopros">2) Заголовок якого рівня буде мати найменший шрифт?</span>
            
            <button class="falseasnwer" id="vp2f1"><span class="tag">&lt;p&gt;</span></button>
            <button class="falseasnwer" id="vp2f2"><span class="tag">&lt;h1&gt;</span></button>
            <button class="trueanswer"  id="vp2"><span class="tag">&lt;h6&gt;</span></button>
            <button class="falseasnwer" id="vp2f3"><span class="tag">&lt;h7&gt;</span></button>
            
    `);


if(attridf == "vp2f1") {
    $('#vp2f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp2f2") {
    $('#vp2f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp2f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp3f1" || attridf == "vp3f2" || attridf == "vp3f3"){
               $('#q-box3').html(`
               <span class="vopros">3) Який з цих атрибутів можна використовувати лише з тегом <span class="tag">&lt;а&gt;</span>?</span>
             
             <button class="falseasnwer" id="vp3f1" >class</button>
             <button class="falseasnwer" id="vp3f2">id</button>
             <button class="trueanswer"  id="vp3">target</button>
             <button class="falseasnwer" id="vp3f3">title</button>
            
    `);


if(attridf == "vp3f1") {
    $('#vp3f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp3f2") {
    $('#vp3f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp3f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp4f1" || attridf == "vp4f2" || attridf == "vp4f3"){
               $('#q-box4').html(`
               <span class="vopros">4) Який з запропонованих id не можна присвоїти елементу?</span>
            
            <button class="trueanswer"  id="vp4">"1box"</button>
            <button class="falseasnwer" id="vp4f1">"box1"</button>
            <button class="falseasnwer" id="vp4f2">"box-1"</button>
            <button class="falseasnwer" id="vp4f3" >"first-box"</button>
            
    `);


if(attridf == "vp4f1") {
    $('#vp4f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp4f2") {
    $('#vp4f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp4f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp5f1" || attridf == "vp5f2" || attridf == "vp5f3"){
               $('#q-box5').html(`
               <span class="vopros">5) Як називається такий вид списку?<br> 
                <ul>
                <li>
                  <ol>
                      <li>Пункт 1</li>
                      <li>Пункт 2</li>
                      <li>Пункт 3</li>
                  </ol>
                </li>
               
                <li>
                  <ol>
                     <li>Пункт 1</li>
                     <li>Пункт 2</li>
                     <li>Пункт 3</li>
                  </ol>
                </li>
            </ul>
        </span>
            
            <button class="falseasnwer" id="vp5f1">Нумерований</button>
            <button class="trueanswer"  id="vp5">Вкладенний</button>
            <button class="falseasnwer" id="vp5f2">Маркований</button>
            <button class="falseasnwer" id="vp5f3">Це не список</button>
            
    `);

 
if(attridf == "vp5f1") {
    $('#vp5f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp5f2") {
    $('#vp5f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp5f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp6f1" || attridf == "vp6f2" || attridf == "vp6f3"){
               $('#q-box6').html(`
               <span class="vopros">6) Яке твердження про цей фрагмент коду неправильне?
                <br>
                <span class="border-exmpl">
                    <span class="tag">&lt;body&gt;</span><br>
                    <span class="tag">&lt;h1&gt;</span>Заголовок<span class="tag">&lt;/h1&gt;</span><br>
                    <span class="tag">&lt;p&gt;</span>
                    Текст що описує зображення
                    <span class="tag">&lt;img</span> <span class="blue">src="image.jpg"</span><span class="tag">&gt;</span>
                    <span class="tag">&lt;/p&gt;</span><br>
                    <span class="tag">&lt;/body&gt;</span>
                </span>
            </span>
           
            <button class="falseasnwer" id="vp6f1">&lt;p&gt; дочірній для &lt;body&gt;</button>
            <button class="trueanswer"  id="vp6">&lt;h1&gt; материнський для &lt;img&gt;</button>
            <button class="falseasnwer" id="vp6f2">&lt;h1&gt;, &lt;p&gt; та &lt;img&gt; дочірні для &lt;body&gt;</button>
            <button class="falseasnwer" id="vp6f3">&lt;h1&gt; родинний для &lt;p&gt;</button>
            
    `);


if(attridf == "vp6f1") {
    $('#vp6f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp6f2") {
    $('#vp6f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp6f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp7f1" || attridf == "vp7f2" ||attridf == "vp7f3" ){
               $('#q-box7').html(`
               <span class="vopros">7) Який маршрут треба вказати у <span class="tag">&lt;img</span> <span class="blue">src=""</span><span class="tag">&gt;</span> в index.html, щоб у браузері відобразилось image.jpg?
            <img src="images/folders-skhema.png" width="600px"><br></span>
            
            <button class="falseasnwer" id="vp7f1">main/sites/images/headers/image.jpg</button>
            <button class="falseasnwer" id="vp7f2">../../images/headers/image.jpg</button>
            <button class="falseasnwer" id="vp7f3">../main/images/headers/image.jpg</button>
            <button class="trueanswer"  id="vp7">../images/headers/image.jpg</button>
            
    `);


if(attridf == "vp7f1") {
    $('#vp7f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp7f2") {
    $('#vp7f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp7f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp8f" || attridf == "vp8f2" ||attridf == "vp8f3"){
               $('#q-box8').html(`
               <span class="vopros">8) Установіть відповідність між номером комірки та атрибутом, використаним для її створення
                
                <table class="compare-table" style="float: left; margin: 20px; clear: both">
                    <tr>
                        <th rowspan="3">1</th> <td>a</td>  <th colspan="3">4</th> 
                    </tr>
                    <tr>
                         <th colspan="2">2</th>  <td>a</td> <th rowspan="2">3</th>
                    </tr>
                    <tr>
                             <td>a</td> <td>a</td> <td>a</td> 
                        </tr>
                </table>
                <div style="margin-left: 350px; margin-bottom: 40px;">
                    <br>
                        <ol style="list-style-type: upper-latin; list-style-position: inside">
                            <li>rowspan="2"</li>
                            <li>rowspan="3"</li>
                            <li>colspan="2"</li>
                            <li>colspan="3"</li>
                        </ol>
                    </div>
            </span>

            <button class="falseasnwer" id="vp8f1">1)D, 2)A, 3)C, 4)B</button>
            <button class="falseasnwer" id="vp8f2">1)D, 2)A, 3)B, 4)D</button>
            <button class="falseasnwer" id="vp8f3">1)D, 2)C, 3)A, 4)B</button>
            <button class="trueanswer"  id="vp8">1)B, 2)C, 3)A, 4)D</button>
            
    `);


if(attridf == "vp8f1") {
    $('#vp8f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp8f2") {
    $('#vp8f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp8f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp9f1" || attridf == "vp9f2" || attridf == "vp9f3"){
               $('#q-box9').html(`
               <span class="vopros">9) Які теги використано для форматування цього <strong><big><em>слова</em></big></strong>?</span>
            
            <button class="falseasnwer" id="vp9f1"><span class="tag">&lt;em&gt;</span>, <span class="tag">&lt;strong&gt;</span></button>
            <button class="trueanswer"  id="vp9"><span class="tag">&lt;em&gt;</span>, <span class="tag">&lt;strong&gt;</span>, <span class="tag">&lt;big&gt;</span></button>
            <button class="falseasnwer" id="vp9f2"><span class="tag">&lt;i&gt;</span>, <span class="tag">&lt;big&gt;</span></button>
            <button class="falseasnwer" id="vp9f3"><span class="tag">&lt;big&gt;</span>, <span class="tag">&lt;big&gt;</span>, <span class="tag">&lt;i&gt;</span></button>
            
    `);


if(attridf == "vp9f1") {
    $('#vp9f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp9f2") {
    $('#vp9f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp9f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp10f1" || attridf == "vp10f2"){
               $('#q-box10').html(`
               <span class="vopros">10) У якому вікні відкриється гіперпосилання та чи буде створювати нові вікна при кожному натисканні?
                <br>
                <span class="border-exmpl"><span class="tag">&lt;a </span><span class="blue">href=</span><span class="light-blue">"page.html"</span> <span class="blue">target=</span><span class="light-blue">"blank"</span><span class="tag">&gt;</span>гіперпосилання<span class="tag">&lt;/a&gt;</span></span></span>
            
            <button class="falseasnwer" id="vp10f1">Відкриється у тому ж вікні</button>
            <button class="falseasnwer" id="vp10f2">При кожному натисканні <br>створюватиме нове вікно</button>
            <button class="trueanswer"  id="vp10">При першому натисканні відкриється у новому вікні, <br>а при наступних - у вже створенному</button>
            
    `);


if(attridf == "vp10f1") {
    $('#vp10f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp10f2'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp11f1" || attridf == "vp11f2" || attridf == "vp11f3"){
               $('#q-box11').html(`
               <span class="vopros">11) Павло вірішив додати на свою сторінку зображення свого кота, але воно було завелике, тож він вирішив зменшити його за допомогою атрибутів. Але щось пішло не так... Чому зображення відображене на сторінці виглядає більш "сплюснутим" ніж оригінальне зображення?</span>
            <br>
            <figure style="display: inline-block">
                    <figcaption>Оригінальне зображення</figcaption>
                <img src="images/cat.jpg" title="оригінал"> 
            </figure>
        <figure style="display: inline-block; margin-left: 40px; vertical-align: top">
                <figcaption>Відображення на сторінці</figcaption>
                <img src="images/cat.jpg" title="відображення на сторінці" width="300px" height="200px">
        </figure>
        
        
            <br>
            <button class="trueanswer"  id="vp11">Павло вказав одночасно і height, і width</button>
            <button class="falseasnwer" id="vp11f1">Павло вказав height і width у відсотках</button>
            <button class="falseasnwer" id="vp11f2" >Павло вказав лише height та не вказав width</button>
            <button class="falseasnwer" id="vp11f3">Павло вказав лише width та не вказав height</button>
            
    `);


if(attridf == "vp11f1") {
    $('#vp11f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp11f2") {
    $('#vp11f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp11f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };
            if(attridf == "vp12f1" || attridf == "vp12f2" || attridf == "vp12f3"){
               $('#q-box12').html(`
               <span class="vopros">12) <img src="images/html-txt.png" style="float: left; margin-right: 10px"> Марія намагалась створити HTML файл у блокноті, але в неї вийшов текстовий файл формату .txt з назвою index.html. Якої помилки допустилась Марія?</span>
            <br><br><br>
            <button class="falseasnwer" id="vp12f1">Вона змінила кодування файлу</button>
            <button class="trueanswer"  id="vp12">Вона забула змінити тип файлу на "Усі файли"</button>
            <button class="falseasnwer" id="vp12f2">Створений нею файл не містив жодного тегу</button>
            <button class="falseasnwer" id="vp12f3">Її компьютер не підтримує формат .html</button>
            `);


if(attridf == "vp12f1") {
    $('#vp12f1'). css('background-color','rgba(0, 44, 126, 0.5)');
} else if (attridf == "vp7f2") {
    $('#vp12f2'). css('background-color','rgba(0, 44, 126, 0.5)');
} else {
    $('#vp12f3'). css('background-color','rgba(0, 44, 126, 0.5)');
}
            };





                $('#q-box12 .trueanswer').css('background-color', 'green', 'border-color', 'green');
                $('#q-box12 .falseasnwer').css('background-color', 'red', 'border-color', 'red');
                if (attridf == "vp12f1") {
                    $('#vp12f1').css('opacity', '0.4');
                } else if (attridf == "vp7f2") {
                    $('#vp12f2').css('opacity', '0.4');
                } else {
                    $('#vp12f3').css('opacity', '0.4');
                }
            }
            ;


        });


        $('#end-test').click(function () {
            $('#result-space').html(`
                <span class="vopros">Правильних відповідей: ` + a + `</span>`);

            $('.htmlboy').html(` <img src="images/htmlboy/good.png">
<p> Вітаю, ` + name + `! Ти пройшов(ла) цей тест на
    ` + a + ` балів! Через кілька секунд ` + teacher_name + ` отримає твій результат по E-mail :P
</p>
    <button id="nextA" class="blue-button" >Ура</button> `);

            $('.htmlboy').show();
            $('#nextA').on('click', function () {
                $('.htmlboy').hide();
            });
        });
    });


</script>
</body>
</html>
