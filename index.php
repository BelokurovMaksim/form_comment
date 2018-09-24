<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Скрипт комментариев для сайта на PHP</title>
		<link rel="stylesheet" type="text/css" href="comments/css/styles.css" />
		
	    <!--[if IE]><style>.footer a{color:#00ccff;}.footer a:hover{color:#0F6698;}</style><![endif]-->	
	</head>
	<body>
	   				    <?php
	            // Сообщение об ошибке:
	            error_reporting(E_ALL^E_NOTICE);
	            include "comments/connect.php";
	            include "comments/comment.class.php";
	            

	            /* Выбираем все комментарии и наполняем массив $comments объектами */
	            $comments = array();
	            $result = mysql_query("SELECT * FROM comments ORDER BY id ASC");
	            while($row = mysql_fetch_assoc($result))
	            {
		            $comments[] = new Comment($row);
	            }
				
				/* Вывод комментариев один за другим: */
				foreach($comments as $c){
					echo $c->markup();
				}
            ?>
			<div id="addCommentContainer">
				<p>Добавить комментарий</p>
				<form id="addCommentForm" method="post" action="">    				<div>
        				<label for="name">Имя</label>
        				<input type="text" name="name" id="name" />    			            
            			<label for="body">Содержание комментария</label>
            			<textarea name="body" id="body" cols="20" rows="5"></textarea>           
            			<input type="submit" id="submit" value="Отправить" />
        			</div>
    			</form>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-v1.4.2.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>

