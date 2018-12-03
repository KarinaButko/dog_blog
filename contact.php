<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Контакты</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="body_wrapper">
<div id="wrapper"> 
    <div id="header">      
        <div id="site_title">
            <a href="index.php">Dog
            	<span>Blog</span>
                 <span class="tagline">
				<?php 
					if (isset($_SESSION['username'])) {
						echo "Здравствуйте ".$_SESSION['username']." вы авторизованы";
					}
				?>
				</span>
            </a>
        </div>
        <div class="cleaner"></div>     
    </div>
	<div id="menu">
       <ul>
            <li><a href="index.php"><span></span>Блог</a></li>
			<li><a href="contact.php" class="current"><span></span>Контакты</a></li>
			<?php if (isset($_SESSION['username'])) { ?>
				<li><a href="create.php"><span></span>Создать запись</a></li>
				<li><a href="database.php"><span></span>Собаки</a></li>
				<li><a href="logout.php"><span></span>Выйти</a></li>
			<?php }else{ ?>
				<li><a href="registr.php"><span></span>Регистрация</a></li>
				<li><a href="login.php"><span></span>Авторизация</a></li> 
			<?php }	?>	
        </ul>
    </div>
    <div id="main">
        <div id="content">
			<p>Зовут меня <b>Бутко Карина.</b> Я автор этого блога. По всем вопросам размещения информации в данном блоге обращайтесь ко мне.  </p>
			<p>Возможно размещение рекламных материалов на взаимовыгодных условиях. Данные о посещаемости сайта предоставлю по запросу. </p>
			<p>Связаться со мной можно по телефону: <b>+380953153341</b> (Vodafone, WhatsApp, Viber).   </p>
        </div>
        <div id="sidebar">        
        	<div id="aboutus">
               	<h3>Великие цитаты</h3>
                <div class="image_fl"><img src="images/exe.jpg" alt="about this blog" /></div>
                <p>"Собака — это единственное существо на земле, которое любит тебя больше, чем себя."</p>
                <p>© Дж.Биллингс</p>
			</div>           
		</div>
		<div class="cleaner"></div>
	</div>
</div>
<div id="footer_wrapper">
	          2012-2018 <a href="contact.php">© Карина Бутко</a>  
</div>
</body>
</html>