<?php
session_start();
?>

<DOCTYPE html/>
<html lang="rus">

  <head>
  <meta charset="utf-8">

  <title>Страница заказа</title>
  <meta name="description" content="Лэндинг чайханы">
  <meta name="author" content="NTYKHPI">

  </head>

  <body class = "orderPage">

    <div class="textCenter" style="background-color:#ADD8E6;">
        <h1 class="h1"> Здравствуйте,  <?php echo $_POST['username']; ?></h1>
        <p class="pTop"> Мы очень рады помочь вам в выборе качественного чая :)</p>
        <p class="pTop"> Наши менеджеры перезвонят на ваш номер (<?php echo $_POST['phone']; ?>) для уточнения деталей заказа в течении пары минут </p>
      </div>


      <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="media/slideshow_1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="media/slideshow_2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="media/slideshow_3.jpg" style="width:100%">
        </div>

      <link rel="stylesheet" type="text/css" href="styles/style.css" />
      <script src="JS/slideshow.js"></script>
      </body>
    </html>

<?php
session_destroy();
 ?>
