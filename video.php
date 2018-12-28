<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="css/ekko-lightbox.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">

    <title>CK Production - Photo & Video Production: ВИДЕО ВИЗИТКА & SHOWREEL</title>
  </head>
  <body>
    <!-- header -->
    <?php include 'header.php';?>            
    <main role="main" class="container-fluid">
      
      <!-- portfolio-->
      <h3 class="text-center">ВИДЕО ВИЗИТКА & SHOWREEL</h3>

      <div class="row justify-content-center">
          <div class="col-md-8">
            <h3 class="text-center">АКТЁРАМ</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/4sz-mbn_0o8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="row">              
              <div class="col-sm-3">
                <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'videotar.php'">ТАРИФЫ</button>
              </div>
              <div class="col-sm-6">
              </div>
              <div class="col-sm-3">
                <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'actors.php'">ФОТО</button>
              </div>              
            </div>
          </div>
      </div>
      <br>
      <div class="row justify-content-center">
          <div class="col-md-8">
            <h3 class="text-center">БИЗНЕСМЕНАМ</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/4sz-mbn_0o8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="row">              
              <div class="col-sm-3">
                <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'videotar.php'">ТАРИФЫ</button>
              </div>
              <div class="col-sm-6">
              </div>
              <div class="col-sm-3">
                <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'actors.php'">ФОТО</button>
              </div>              
            </div>
          </div>
      </div>
      <br>
      <div class="row justify-content-center">
          <div class="col-md-8">
            <h3 class="text-center">ДЕТЯМ</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/4sz-mbn_0o8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="row">              
              <div class="col-sm-3">
                <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'videotar.php'">ТАРИФЫ</button>
              </div>
              <div class="col-sm-6">
              </div>
              <div class="col-sm-3">
                <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'actors.php'">ФОТО</button>
              </div>              
            </div>
          </div>
      </div>      

      <!--

      <br>
      <h3 style="text-align:center">ВИДЕОВИЗИТКА & SHOWREEL</h3>
      <div class="embed-responsive embed-responsive-16by9">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/4sz-mbn_0o8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <br>
      <div class="embed-responsive embed-responsive-16by9">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/lBIxcyDpAUY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>    
      -->   
      <!-- footer-->   
      
    </main>
    <?php include 'footer.php';?>          
    
    <script src="js/ekko-lightbox.min.js"></script>
    <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();                
            });
    </script>
  </body>
</html>