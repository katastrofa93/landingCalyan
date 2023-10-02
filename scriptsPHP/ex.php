<?php
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $check = htmlspecialchars(trim($_POST['check']));

    $telephone = '/^[+7,8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/';
    $text = '/^[a-zA-Zа-яА-Я]+$/ui';

    $location = 'С формы обратной связи';

    $to = 'example@mail.com';
    $subject = 'Хочу заказать звонок';
    $message = '
        <html>
            <body>
                <center>	
                <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
                    <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
                    <tr>
                    <td><b>Откуда</b></td>
                    <td>'.$location.'</td>
                    </tr>
                    <tr>
                    <td><b>От кого</b></td>
                    <td>'.$name.'</td>
                    </tr>
                    <tr>
                    <td><b>Телефон</b></td>
                    <td>'.$phone.'</td>
                    </tr>
                    <tr>
                    <td><b>Тема</b></td>
                    <td>'.$subject.'</td>
                    </tr>
                </table>
                </center>	
            </body>
        </html>
    '; 
    $headers  = "Content-type: text/html; charset=utf-8\r\n";

    if(isset($name)){
        mail($to, $subject, $message, $headers);
    }

?>