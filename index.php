<?php include 'sendmessage.php';?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/my.css" rel="stylesheet">

    <title>CK Production - Photo & Video Production</title>
  </head>
  <body>
    <div class="container">
      <!-- header -->
      <?php include 'header.php';?>            
      <!-- main-->      
      <div class="row">
        <div class="col-sm-3">
          <h3 class="h3-custom">АКТЁРАМ</h3>
          <div class="card">
            <a href="actors.php"><img class="card-img-top" src="img/01.jpg" alt="Card image cap"></a>            
            <div class="card-body">              
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'actgal.php'">Photo gallery</button>
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'actors.php'"><strong>ВЫБРАТЬ ТАРИФ</strong></button>
            </div>
          </div>
        </div>        
        <div class="col-sm-3">
          <h3 class="h3-custom">БИЗНЕС-ПОРТРЕТ</h3>
          <div class="card">
            <a href="business.php"><img class="card-img-top" src="img/02.jpg" alt="Card image cap"></a>     
            <div class="card-body">
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'busgal.php'">Photo gallery</button>
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'business.php'"><strong>ВЫБРАТЬ ТАРИФ</strong></button>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <h3 class="h3-custom">KIDS</h3>
          <div class="card">
            <a href="kids.php"><img class="card-img-top" src="img/03.jpg" alt="Card image cap"></a>     
            <div class="card-body">
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'kidsgal.php'">Photo gallery</button>
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'kids.php'"><strong>ВЫБРАТЬ ТАРИФ</strong></button> 
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <h3 class="h3-custom">ОБО МНЕ</h3>
          <div class="card">
            <img class="card-img-top" src="img/04.jpg" alt="Card image cap">
            <div class="card-body">              
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'aboutme.php'">ПОДРОБНЕЕ</button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-6">
          <h4 style="text-align:left">Нажми на кнопку <strong>"ВЫБРАТЬ ТАРИФ"</strong> и узнай о специальных условиях для студентов и учащихся киношкол.</h4>
        </div>
        <div class="col-sm-6">
          <h4 style="text-align:right">Акция "СООБРАЖАЕМ НА ТРОИХ"<br>Приводи двух друзей и получайте скидку на фото и видеосъёмку!</h4>
        </div>

      </div>
      <!-- footer-->
      <?php include 'footer.php';?>      
    </div>



    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>