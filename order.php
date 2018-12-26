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
    <!-- header -->
    <?php include 'header.php';?>            
    <main role="main" class="container-fluid">            
      <!-- main-->      
      <h3 class="text-center">Да, я хочу заказать съёмку по данному тарифу</h3>
      <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
          <form id="contact-form" method="post" action="contact.php" role="form">
            <div class="messages"></div>
            <div class="controls">            
                    <div class="form-group">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Имя *" required="required" data-error="Поле обязательно для заполнения.">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="E-mail *" required="required" data-error="Введите адрес в корректной форме.">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Телефон">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Текст сообщения *" rows="4" required="required" data-error="Пожалуйста, введите текст сообщения."></textarea>
                      <div class="help-block with-errors"></div>              
                      <input type="submit" class="btn btn-outline-secondary btn-send btn-block" value="Отправить">              
                      <p><small>Нажимая на кнопку "Отправить", вы соглашаетесь на обработку персональных данных</small></p>               
                    </div>                 
            </div>
          </form>
        </div>
        <div class="col-sm-2">
        </div>
      </div>
    </main>
    <!-- footer-->   
    <?php include 'footer.php';?>
    <script>
      var hashParams = window.location.hash.substr(1).split('&'); // substr(1) to remove the `#`
      for(var i = 0; i < hashParams.length; i++){
          var p = hashParams[i].split('=');
          document.getElementById(p[0]).value = decodeURIComponent(p[1]);;
      }      
    </script>
  </body>
</html>