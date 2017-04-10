<?php 
	error_reporting(E_ALL);
	$name = 'Михаил' ;
	$nametitle = "Имя";
	$age = 20;
	$agetitle = "Возраст";
	$email = "roc7007@yandex.ru";
	$emailtitle = "Адрес электронной почты";
	$city = "Одинцово";
	$citytitle = "Город";
	$about = "Студент вшэ миэм";
	$abouttitle = "О себе";
	$Maintitle = "Страница пользователя Михаил";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Моя первая PHP-страница</title>
	<style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
</head>
<body>

	<h1><?php   
			echo $Maintitle;
	?></h1>
		 
		 <dl>
		            <dt><?php echo $nametitle; ?></dt>
		            <dd><?php echo $name; ?></dd>
		 </dl>

		 <dl>
		            <dt><?php echo $agetitle; ?></dt>
		            <dd><?php echo $age; ?></dd>
		 </dl>

		 <dl>
		            <dt><?php echo $emailtitle; ?></dt>
		            <dd><a href="mailto:roc7007@yandex.ru"><?php echo $email; ?></a></dd>
		 </dl>

		 <dl>
		            <dt><?php echo $citytitle; ?></dt>
		            <dd><?php echo $city; ?></dd>
		 </dl>

		  <dl>
		            <dt><?php echo $abouttitle; ?></dt>
		            <dd><?php echo $about; ?></dd>
		        </dl>
</body>
</html>
