<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: index.php');
}
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Собаки</title>
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
				?></span>
            </a>
        </div>
        <div class="cleaner"></div>     
    </div>
    <div id="menu">
      <ul>
            <li><a href="index.php" ><span></span>Блог</a></li>
			<li><a href="contact.php"><span></span>Контакты</a></li>
			<?php if (isset($_SESSION['username'])) { ?>
				<li><a href="create.php"><span></span>Создать запись</a></li>
				<li><a href="database.php" class="current"><span></span>Собаки</a></li>
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
        <h3 class="h3">Выберите породу собаки</h3>
        <form class="form-group" action="database.php" method="post">
			<select name="dog">
				<option value="1">Лабрадор</option>
				<option value="2">Мопс</option>
				<option value="3">Хаски</option>
				<option value="4">Корги</option>
				<option value="5">Шпиц</option>
			</select><br /><br />
		  <button style="background-color: #895f69;border-style: none;border-radius: 3px;color: #fff;" type="submit">Вывести информацию</button>
		</form> <br>
        <div class="databs">
			<?php if (isset($_POST['dog'])){
				$num = $_POST['dog'];
				$stn = $pdo->query("SELECT * FROM dogs WHERE id=$num");
				foreach ($stn as $item) {
					echo '<div class="databs-tit">' . $item['name'] . '</div>';
					echo '<div class="databs-des">' . $item['descript'] . '</div>';
					echo "<img src=".$item['img']." class='databs-img'/>";
				}
			} ?>
         </div>
         <br><br>
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
	      2012-2018 <a href="contact.php">© Карина Бутко</a></span>
</div>
</body>
</html>