<?php include 'sendmessage.php';?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/my.css" rel="stylesheet">

    <title>CK Production - Photo & Video Production</title>
  </head>
  <body>
    <!-- header -->
    <?php include 'header.php';?>            
    <!-- div container -->
    <div class="container-fluid">      
      <!-- main-->           
      <div class="row">
        <div class="col-sm-3">
          <h3 class="h3-custom">АКТЁРАМ</h3>
          <div class="card">
            <a href="actors.php"><img class="card-img-top" src="img/01.jpg" alt="Card image cap"></a>            
            <div class="card-body">                            
              <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'actors.php'"><strong>ПОСМОТРЕТЬ<br>ТАРИФЫ</strong></button>
            </div>
          </div>
        </div>        
        <div class="col-sm-3">
          <h3 class="h3-custom">БИЗНЕС-ПОРТРЕТ</h3>
          <div class="card">
            <a href="business.php"><img class="card-img-top" src="img/02.jpg" alt="Card image cap"></a>     
            <div class="card-body">              
              <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'business.php'"><strong>ПОСМОТРЕТЬ<br>ТАРИФЫ</strong></button>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <h3 class="h3-custom">KIDS</h3>
          <div class="card">
            <a href="kids.php"><img class="card-img-top" src="img/03.jpg" alt="Card image cap"></a>     
            <div class="card-body">              
              <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'kids.php'"><strong>ПОСМОТРЕТЬ<br>ТАРИФЫ</strong></button> 
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <h3 class="h3-custom">ВИДЕО</h3>
          <div class="card">
            <img class="card-img-top" src="img/04.jpg" alt="ВИДЕО">
            <div class="card-body">              
              <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'aboutme.php'"><strong>ПОСМОТРЕТЬ<br>ТАРИФЫ</strong></button>
            </div>
          </div>
        </div>
      </div>
      <br>      
      <h4 class="text-center">Акция <strong>"СООБРАЖАЕМ НА ТРОИХ"</strong></h4>
      <h4 class="text-center">Приводи двух друзей и получайте скидку на фото и видеосъёмку!</h4>
      <br>
      <h4 class="text-center">Специальные условия для студентов и учащихся киношкол.</h4>
      <br>  
      <div class="row">
        <div class="col-sm-4">
          <img class="card-img-top" src="img/me.png" alt="Card image cap">
        </div>
        <div class="col-sm-8">
          <h5>Привет.</h5>          
          <p>Я - Катерина Циркова - фотограф и режиссер.<br>Закончила курсы режиссуры Александра Митты.<br>Сейчас сама преподаю фотографию в школе телевидения VIDEOFORME.<br>И, конечно же, снимаю. Мне нравится находить образы, которые подходят под психологию человека, его внешность и искать способы раскрепостить его во время съемки.<br>Ко мне на курс приходят ученики из разных профессий, чаще всего мои студенты не только учатся фотосъёмке, но и бывают на месте модели.<br> Кто-то легко расслабляется, а кто-то, несмотря на публичную деятельность замыкается перед камерой. Мне всегда было интересно находить интересные ракурсы, фиксировать истинные эмоции человека.<br>Я долго искала разные техники по раскрепощению, и открыла для себя технику в жанре Headshot.<br>Особенность этого стиля заключается в том, что фотограф выступает ещё и в качестве психолога. Задача такой фотографии передать ваши эмоции и уникальность, сделать её "живой". А это важно.<br>Я выделила три главных составляющих хорошего портрета:<br>Открытость<br>Естественность<br>Узнаваемость<br>Именно эти три компонента помогают мне передать вашу личность. Это особенно важно тем, кто связан с бизнесом, деловым людям, а также представителям творческих профессий: ведущим и актёрам!<br>Фотосъёмка и видеосъёмка CK Production - это не только щелчок затвора, это целый продакшен, от создания идеи, концепции, до съёмки и постпродакшена.</p>
        </div>

      </div>
    </div>
    <!-- footer-->
    <?php include 'footer.php';?>      



    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>