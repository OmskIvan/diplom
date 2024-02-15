<?php
      session_start();
      $link = mysqli_connect('localhost', 'root', '', 'bed_win');
    if(isset($_POST['email']))
    {
        $_SESSION['ran_code'] = 1;
        $email = $_POST['email'];
        mail($email, 'Заявка с сайта', $_SESSION['ran_code']);
    }
    elseif(isset($_POST['code']))
    {
        $ran_code = $_SESSION['ran_code'];
        $get_code = $_POST['code'];
        if($get_code == $ran_code)
        {
            echo(true);
        }
        else
        {
            echo(false);
        }
    }
    else
    {
        $check_user = $link->query("SELECT * FROM `users` WHERE `password` = '{$_POST['password']}' AND `login` = '{$_POST['login']}' ");
        if(mysqli_num_rows($check_user) == 0)
        {
            $link->query("INSERT INTO `users`(`isAdmin`, `name`, `surname`, `login`, `password`, `city`, `address`, `postcode`) 
            VALUES (0,'{$_POST['name']}','{$_POST['surname']}','{$_POST['login']}','{$_POST['password']}','{$_POST['city']}','{$_POST['address']}','{$_POST['postcode']}')");
            echo(true);
        }
    }
?>