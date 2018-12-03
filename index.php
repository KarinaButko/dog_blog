<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<title>Блог о собаках</title>
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
		<span id="hello_user"></span>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.php" class="current"><span></span>Блог</a></li>
			<li><a href="contact.php"><span></span>Контакты</a></li>
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
			<?php include 'connect.php' ?>
				<?php 
					$stn = $pdo->query("SELECT * FROM news ORDER BY id DESC");
					foreach ($stn as $item) {
						echo '<div class="post_box">';
						echo '<h2><a href="#">' . $item['title'] . '</a></h2>';
						echo '<div class="image_wrapper"><a href="#"><img src="' . $item['img'] . '" alt="image 1" /></a></div>';
						echo '<p align="justify">' . $item['descript'] . '</p>';
						echo '<div class="cleaner"></div>';
						echo '</div>';
					}		
				?>   
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