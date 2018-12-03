<?php
session_start();
if (isset($_SESSION['username'])) {
	header('Location: index.php');
}
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Регистрация</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="stylee.css">
</head>
<body>
<div id="body_wrapper">
<div id="wrapper"> 
    <div id="header">      
        <div id="site_title">
            <a href="index.php">Dog
            	<span>Blog</span>
            </a>
        </div>
        <div class="cleaner"></div>     
    </div>
    <div id="menu">
       <ul>
            <li><a href="index.php"><span></span>Блог</a></li>
			<li><a href="contact.php"><span></span>Контакты</a></li>
			<?php if (isset($_SESSION['username'])) { ?>
				<li><a href="create.php"><span></span>Создать запись</a></li>
				<li><a href="database.php"><span></span>Собаки</a></li>
				<li><a href="logout.php"><span></span>Выйти</a></li>
			<?php }else{ ?>
				<li><a href="registr.php" class="current"><span></span>Регистрация</a></li>
				<li><a href="login.php"><span></span>Авторизация</a></li> 
			<?php }	?>	
        </ul>
    </div>
    <div id="main">
        <div id="content">
 
<div class="container">
	<form class="form-signin" method="POST" action="registr_server.php">
		<h2>Registration</h2>
		Введите имя <input type="text" name="username" class="form-control" placeholder="Username" required> <br><br>
		Введите email <input type="email" name="email" class="form-control" placeholder="Email" required> <br><br>
		Введите пароль <input type="password" name="password" class="form-control" placeholder="Password" required> <br><br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Register </button>
	</form>
		</div>
        </div>
        <div id="sidebar">        
        	<div id="aboutus">
               	<h3>Великие цитаты</h3>
                <div class="image_fl"><img src="images/exe.jpg" alt="about this blog" /></div>
                <p>"Собака — это единственное существо на земле, которое любит тебя больше, чем себя."</p>
                <p>© Дж.Биллингс</p>
          </div>           
            <div class="cleaner_h20"></div>
                </div>
    	<div class="cleaner"></div>
    </div>
</div>
<div class="cleaner"></div>
</div>
<div id="footer_wrapper">
	          2012-2018 <a href="contact.php">© Карина Бутко</a>  
</div>
</body>
</html>