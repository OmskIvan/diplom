<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/null_style.css">
    <link rel="stylesheet" href="../../style/header.css">
    <link rel="stylesheet" <?= loadStyle($name_page) ?>>
    <link rel="stylesheet" href="style/window_user.css">
    <title>Document</title>
</head>
<body>
    <div hidden id="area">
        <div hidden id="auto" class="window_user">
            <div class="close">
                <button class="but_close">X</button>
            </div>
            <div class="form_user">
                <h1>Вход в систему</h1>
                <label class="field_item">
                    <input id="email" type="text" require>
                    <span>Логин</span>
                </label>
                <label class="field_item">
                    <input id="email" type="text" require>
                    <span>Пароль</span>
                </label>
                <button class="green_but">Продолжить</button>
            </div>
           <hr>
           <div class="or_reg">
            <h1>Или</h1>
            <button id="in_add_code">Регистрация</button>
           </div>
        </div>

        <div hidden id="email_or_phone" class="window_user">
            <div class="close_and_back">
                    <button><-</button>
                    <button class="but_close">X</button>
            </div>
            <div class="form_user" id="add_email_phone">
                <h2>
                    Введите email
                    <br>
                    Или
                    <br>
                    Телефон
                </h2>
                <label class="field_item">
                    <input name="add_code" type="text">
                </label>
                <button id="add_code" class="red_but">Продолжить</button>
            </div>
        </div>


        <div hidden id="code_verification" class="window_user">
            <div class="close">
                <button class="but_close">X</button>
            </div>
            <div class="form_user">
                <h2>Введите код подтверждения</h2>
                <label class="field_item">
                    <input name="get_code" type="text" require>
                </label>
                <button id="get_code" class="red_but">Продолжить</button>
            </div>
        </div>


        <div hidden id="reg" class="window_user ">
            <div class="close_and_back">
                <button><-</button>
                <button class="but_close">X</button>
            </div>
            <form class="form_user" id="form_reg">
                <h1>Регистрация в системе</h1>
                <label class="field_item">
                    <input type="text" name="name" require>
                    <span>Имя</span>
                </label>
                <label class="field_item">
                    <input id="text" type="text" name="surname" require>
                    <span>Фамилия</span>
                </label>
                <label class="field_item">
                    <input id="text" type="text" name="login" require>
                    <span>Логин</span>
                </label>
                <label class="field_item">
                    <input id="text" type="text" name="password" require>
                    <span>Пароль</span>
                </label>
                <label class="field_item">
                    <input id="text" type="text" name="check_password" require>
                    <span>Подтвердите пароль</span>
                </label>
                <label class="field_item">
                    <input id="text" type="text" name="city" require>
                    <span>Город проживания</span>
                </label>
                <label class="field_item">
                    <input id="text" type="text" name="address" require>
                    <span>Адрес</span>
                </label>
                <label class="field_item">
                    <input id="text" type="text" name="postcode" require>
                    <span>Почтовый индекс</span>
                </label>
                <button class="green_but">Зарегистрироваться</button>
            </form>
        </div>

    </div>




<header>
    <div class="menu_header">
        <img src="" alt="" class="logo">
        <div class="menu_search">
            <div class="search">
                <input type="text">
                <div class="button_search">
                    <button>X</button>
                </div>
            </div>
            <div class="search_id">
                <div class="search_item_id">
                    <input type="text">
                    <div class="button_search">
                        <button>X</button>
                    </div>
                </div>
                <div class="search_item_id">
                    <input type="text">
                    <div class="button_search">
                        <button>X</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
              <a href="">
                <figure>
                    <div class="menu_img">
                        <img src="" alt="">
                    </div>
                    <figcaption>О сайте</figcaption>
                </figure>
              </a>
              <a href="">
                <figure>
                    <div class="menu_img">
                        <img src="" alt="">
                    </div>
                    <figcaption>Избранное</figcaption>
                </figure>
              </a>
              <a href="">
                <figure>
                    <div class="menu_img">
                        <img src="" alt="">
                    </div>
                    <figcaption>Продать</figcaption>
                </figure>
              </a>
              <a href="">
                <figure>
                    <div class="menu_img">
                        <img src="" alt="">
                    </div>
                    <figcaption>Продаю</figcaption>
                </figure>
              </a>
                <figure id="user">
                    <div class="menu_img">
                        <img src="" alt="">
                    </div>
                    <figcaption>Войти</figcaption>
                </figure>
        </div>
    </div>
</header>