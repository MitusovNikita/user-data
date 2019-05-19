<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Информация о посетителе:</h1>
    <ul>
      <li><b>Время захода: </b><?=date("d.m.Y",time()).' '.date("H:i:s",time());?></li>
      <li><b>Ip адрес: </b><?=$_SERVER['REMOTE_ADDR'];?></li>
      <li><b>Узнать провайдер по ip: </b><a href="https://www.bravica.net/ru/net-provider.html">bravica.net</a></li>
      <li><b>Узнать географию по ip: </b><a href="https://www.bravica.net/ru/net-geo.html">bravica.net</a></li>
      <li><b>Браузер, операционная система: </b><?=$_SERVER['HTTP_USER_AGENT'];?></li>
      <li><b>Ссылка по которой перешли на страницу: </b><?=$_SERVER['HTTP_REFERER'];?></li>
    </ul>
  </body>
</html>
