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
      <!-- portfolio--> 
      <div class="row">
        <div class="col-sm-6">        
          <h3>БИЗНЕС-ПОРТРЕТ</h3>          
          <div class="row">
            <img class="card-img-top marg5" src="img/01.jpg" alt="Card image cap">
          </div>
          <div class="row">
            <div class="col-sm-6">        
              <img class="card-img-top marg5" src="img/02.jpg" alt="Card image cap">
            </div>
            <div class="col-sm-6">        
              <img class="card-img-top marg5" src="img/03.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="row">
            <img class="card-img-top marg5" src="img/01.jpg" alt="Card image cap">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">        
              <img class="card-img-top marg5" src="img/02.jpg" alt="Card image cap">
            </div>
            <div class="col-sm-6">        
              <img class="card-img-top marg5" src="img/03.jpg" alt="Card image cap">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">        
              <img class="card-img-top marg5" src="img/02.jpg" alt="Card image cap">
            </div>
            <div class="col-sm-6">        
              <img class="card-img-top marg5" src="img/03.jpg" alt="Card image cap">
            </div>
          </div>
           <div class="row">
            <div class="col-sm-6">
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'business.php'"><strong>ВЫБРАТЬ ТАРИФ</strong></button>              
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn-block btn-outline-secondary" onclick="location.href = 'actors.php'"><strong>СМОТРЕТЬ ВСЕ</strong></button>              
            </div>
          </div>
        </div>
      </div>
      <br>
      <h3 style="text-align:center">ВИДЕОВИЗИТКА</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/nXPDRSK1mYg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>        
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