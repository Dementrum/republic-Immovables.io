
<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['tema'])&&$_POST['tema']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
	$to = 'dmi56756877@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
	$message = '
					<html>
							<head>
									<title>'.$subject.'</title>
							</head>
							<body>
									<p>Имя: '.$_POST['name'].'</p>
									<p>Телефон: '.$_POST['phone'].'</p>     
									<p>Тема: '.$_POST['tema'].'</p>                    
							</body>
					</html>'; //Текст нащего сообщения можно использовать HTML теги
	$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
	$headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
	mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
   