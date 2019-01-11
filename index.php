<!doctype html>
<html lang="ru">
  <head>		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> 
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="css/my.css" rel="stylesheet">
		<title>CK Production - Photo & Video Production</title>
	</head>
	<body>
		<?php include 'header.php';?>
    <main role="main" class="container-fluid">
      <!-- main-->           
      <div class="row">
        <div class="col-lg-3 element">
          <h3 class="h3-custom">АКТЁРАМ</h3>          
          <div class="card">
            <a href="actors.php"><img class="card-img-top" src="img/01.jpg" alt="Card image cap"></a>            
            <div class="card-body">                            
              <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'acttar.php'">ПОСМОТРЕТЬ<br>ТАРИФЫ</button>
            </div>
          </div>
        </div>        
        <div class="col-lg-3 element">
          <h3 class="h3-custom">БИЗНЕС-ПОРТРЕТ</h3>
          <div class="card">
            <a href="business.php"><img class="card-img-top" src="img/02.jpg" alt="Card image cap"></a>     
            <div class="card-body">              
              <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'bustar.php'">ПОСМОТРЕТЬ<br>ТАРИФЫ</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 element">
          <h3 class="h3-custom">KIDS</h3>
          <div class="card">
            <a href="kids.php"><img class="card-img-top" src="img/03.jpg" alt="Card image cap"></a>     
            <div class="card-body">              
              <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'kidstar.php'">ПОСМОТРЕТЬ<br>ТАРИФЫ</button> 
            </div>
          </div>
        </div>
        <div class="col-lg-3 element">
          <h3 class="h3-custom">ВИДЕО</h3>
          <div class="card">
            <img class="card-img-top" src="img/04.jpg" alt="ВИДЕО">
            <div class="card-body">              
              <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'videotar.php'">ПОСМОТРЕТЬ<br>ТАРИФЫ</button>
            </div>
          </div>
        </div>
      </div>
      <br>      
      <h4 class="text-center">Акция <strong>"СООБРАЖАЕМ НА ТРОИХ"</strong></h4>
      <h4 class="text-center">Приводи двух друзей и получайте скидку на фото и видеосъёмку!</h4> 
     <br>
      <h4 class="text-center">Специальные условия для студентов и учащихся киношкол.</h4>      
    </main>

    <!-- footer-->
    <?php include 'footer.php';?>    

	</body>

    
</html> 