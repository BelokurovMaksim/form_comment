<?php

/* Конфигурация базы данных */

$db_host		= 'localhost'; /* хост */
$db_user		= 'belokurov'; /* имя пользователя */
$db_pass		= 'belokurov'; /* пароль */
$db_database	= 'comments'; /* имя базы данных */

/* Конец секции */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Не могу установить соединение с базой данных');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>