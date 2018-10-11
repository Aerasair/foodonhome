<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="css/materialize.min.css">

    <link rel="stylesheet" href="css/main.css">
    <meta charset=utf-8>
    <title>Закажи пиццу!</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--JavaScript at end of body for optimized loading-->


</head>

<body>


    <div class="menu navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><img src="images/logo.png" width="150"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light " href="#pizza">Пицца</a></li>
                    <li><a class="waves-effect waves-light " href="#drink">Напитки</a></li>
                    <li><a class="waves-effect waves-light " href="#sauce">Соусы</a></li>
                    <li><a class="waves-effect waves-light btn modal-trigger" href="#modal1" id="butcorz">Корзина</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!--     Корзина-->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Корзина</h4>
            <p id="corz">Ваш заказ</p>

        </div>
        <p id="sum"></p>
        <div class="modal-footer">
            <div class="row right">
                <form method="POST" action="index.php" class="col m7">
                    Имя*<input name="name" type="text">
                    Телефон*<input name="phone" type="text">
                    Адрес*<input name="adress" type="text">
                    <!--       Заказ(скрытое поле)-->
                    <input type="text" id="zakaz" name="zakaz" style="height: 90px;" hidden>
                    <!--       сумма (скрытое поле)-->
                    <input type="text" name="itogsum" hidden>

                    <a href="#!" class="modal-close waves-effect waves-green btn-flat btn grey">Вернуться к сайту</a>
                    <button class="modal-close waves-effect waves-green btn-flat btn green" onclick="SendToServer()">Подтвердить заказ</button>
                </form>
            </div>
        </div>
    </div>
    <!--    Конец корзины-->


    <div class="content">
        <div class="row" id="pizza">
            <h3 class=""> Пицца</h3>
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/p1.jpg">

                    </div>
                    <div class="card-content ">
                        <p>Пицца Россия из грибов, зелени.</p>
                    </div>
                    <div class="fistcard_title center " onclick="add(1,'Пицца Россия',450);">Россия 450₽<i class="material-icons">add</i>
                    </div>

                </div>
            </div>

            <div class="col  s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/p2.jpg">

                    </div>
                    <div class="card-content">
                        <p>Пицца Мексика наполнена кабачками.</p>
                    </div>
                    <div class="fistcard_title center " onclick="add(1,'Пицца Мексика',500);">Мексиска 500₽<i class="material-icons">add</i></div>

                </div>
            </div>
            <div class="col  s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/p3.jpg">

                    </div>
                    <div class="card-content">
                        <p>Грибная пицца Италия с салями.</p>
                    </div>
                    <div class="fistcard_title center " onclick="add(1,'Пицца Италия',550);">Италия 550₽<i class="material-icons">add</i></div>

                </div>
            </div>

            <div class="col  s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/p4.jpg">
                    </div>
                    <div class="card-content">
                        <p>Пицца Болгария из перцев, чеснока.</p>
                    </div>
                    <div class="fistcard_title center " onclick="add(1,'Пицца Болгария',600);">Болгария 600₽<i class="material-icons">add</i></div>
                </div>
            </div>


            <div class="row">
                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/p5.jpg">
                        </div>
                        <div class="card-content">
                            <p>Пицца Африка из перцев, чеснока.</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Пицца Африка',500);">Африка 500₽<i class="material-icons">add</i></div>
                    </div>
                </div>


                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/p6.jpg">
                        </div>
                        <div class="card-content">
                            <p>Пицца Швеция из перцев, чеснока.</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Пицца Швеция',550);">Швеция 550₽<i class="material-icons">add</i></div>
                    </div>
                </div>
                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/p7.jpg">
                        </div>
                        <div class="card-content">
                            <p>Пицца Венгрия из салями, сыра.</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Пицца Венгрия',700);">Венгрия 700₽<i class="material-icons">add</i></div>
                    </div>
                </div>

                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/p8.jpg">
                        </div>
                        <div class="card-content">
                            <p>Пицца Грузия из перцев, чеснока.</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Пицца Грузия',600);">Грузия 600₽<i class="material-icons">add</i></div>
                    </div>
                </div>


            </div>


            <div class="row">
                <h3 class="" id="drink">Напитки</h3>
                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/n1.jpg">
                        </div>
                        <div class="card-content">
                            <p>Coca-cola</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Напиток Coca-cola',70);">Cola-cola 70₽<i class="material-icons">add</i></div>
                    </div>
                </div>

                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/n2.jpg">
                        </div>
                        <div class="card-content">
                            <p>Sprite</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Напиток Sprite',70);">Sprite 70₽<i class="material-icons">add</i></div>
                    </div>
                </div>

                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/n3.jpg">
                        </div>
                        <div class="card-content">
                            <p>Sprite</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Напиток Fanta',70);">Fanta 70₽<i class="material-icons">add</i></div>
                    </div>
                </div>

                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/n4.jpg">
                        </div>
                        <div class="card-content">
                            <p>Вода</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Напиток Вода',70);">Вода 50₽<i class="material-icons">add</i></div>
                    </div>
                </div>


            </div>

            <div class="row">
                <h3 class="" id="sauce">Соусы</h3>
                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/s1.jpg">
                        </div>
                        <div class="card-content">
                            <p>Барбекю</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Соус Барбекю',30);">Барбекю 30₽<i class="material-icons">add</i></div>
                    </div>
                </div>


                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/s2.jpg">
                        </div>
                        <div class="card-content">
                            <p>Кисло-сладкий</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Соус Кисло-сладкий',30);">Кисл-сладкий 30₽<i class="material-icons">add</i></div>
                    </div>
                </div>
                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/s3.jpg">
                        </div>
                        <div class="card-content">
                            <p>Сырный</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Соус Сырный',30);">Сырный 30₽<i class="material-icons">add</i></div>
                    </div>
                </div>

                <div class="col  s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/s4.jpg">
                        </div>
                        <div class="card-content">
                            <p>Чесночный</p>
                        </div>
                        <div class="fistcard_title center " onclick="add(1,'Соус Чесночный',30);">Чесночный 30₽<i class="material-icons">add</i></div>
                    </div>
                </div>


            </div>

        </div>



        <script type="text/javascript">
            //           Сумма заказа записывается в переменную sum
            var sum = 0;
            var kolvotov = 0; //Количество товаров в корзине
            //функция add с входными параметрами - кол-во штук товара, наименование товара, цена товара
            function add(x, st, p) {
                var x;
                var st;
                kolvotov++;
                sum += p;
                //        alert("Добавлено в корзину  "+x+" "+st);
                $(".modal-content ").append(x + " " + st + " " + p + "<br>"); //Добавление в коорзину товара
                document.getElementById("sum").innerHTML = "<b>Итого: " + sum + "</b><br>"; //добавление суммы в общее поле

                document.getElementsByName('zakaz')[0].value += x + " " + st + " " + p + "; "; //добавление списка всех товаров в скрытое поле
                document.getElementsByName('itogsum')[0].value = sum; //добавление суммы в скрытое поле, скрытые поля необходимы для отправки на сервер


                document.getElementById("butcorz").innerHTML = "Корзина(" + kolvotov + ")"; //запись кол-во товаров прямо на кнопку "Корзина"
            }

        </script>




        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/materialize.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.modal').modal();
            });

        </script>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "food";
        
        if(isset($_POST["zakaz"])){
                 $zakaz=$_POST["zakaz"];
                 $itogsum=$_POST["itogsum"];
                 $name= $_POST["name"];
                 $phone= $_POST["phone"];
                 $adress= $_POST["adress"];
                    
            // Create connection
            $conn = new mysqli($servername, $username, $password,$db);
                $sql = "INSERT INTO food (description,sum,name,phone,adress) 
                VALUES('$zakaz','$itogsum','$name','$phone','$adress')";
                $result = $conn->query($sql);
          }
        
          
        ?>




        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Пиццерия "Плоский колобок" (с)</h5>
                        <p class="grey-text text-lighten-4">Все товарные знаки защищены.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Контакты</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Вконтакте</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Телеграмм</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Азаров Андрей
                    <a class="grey-text text-lighten-4 right" href="#!"></a>
                </div>
            </div>
        </footer>

</body>

</html>
