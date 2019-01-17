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

    <title>CK Production - Photo & Video Production</title>
  </head>   
  <body>
    <!-- header -->
    <?php include 'header.php';?>            
    <main role="main" class="container-fluid">  
      <!-- main-->  
      <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
      <h1 class="text-center">СПЕЦПРЕДЛОЖЕНИЯ</h1>      
        <p>На этой странице ты можешь узнать информацию о ближайших фотоднях - это дни, когда на все пакеты фото и видеосъемки действует специальная цена. </p>
        <h3>КАК ПРОХОДИТ ФОТОДЕНЬ</h3>
        <p>Фотодень - это день, когда мы снимаем актерское портфолио для небольшой группы актеров, поэтому в этот день мы можем позволить себе сделать цену максимально низкой!</p>
        <p>И самое важное - что в этот день мы делаем портфолио под ключ. Со мной так же будет в команде визажист-стилист, ассистент по свету. Мы создаем такое портфолио, которое сразу можно использовать в своей работе - например, отправлять на кастинги.</p>
        <h3>ПЛЮСЫ</h3>
        <p>Мы понимаем, что стоимость персональной фотосъемки особенно 2-3 часовой, не бюджетна, и обновлять портфолио каждый год - полгода может уложиться в копеечку,  поэтому в фотодни мы собираем небольшие группы и цену из-за этого делаем самую низкую, причем это выгодно и тебе и нашей команде, визажисту и фотографу.</p>
        <p>Несмотря на то, что съемка будет групп - у нас ограниченная запись до 3-5 человек в день! Каждого участника мы записываем на определенное время, и тебе не придется никого ждать;)  К каждому актеру мы относимся по-особенному и уделяем нужное время на подготовку и съемку, чтобы получить хороший результат! =)</p>
        <h3>ЧТО ТЫ ПОЛУЧИШЬ</h3>
        <p>Мы подготовили несколько пакетов - по съемке актерского портфолио и видеовизитки, ты сможешь выбрать для себя лучший вариант. Ознакомиться с пакетами ты можешь на этой странице.</p>
        <h3>СТОИМОСТЬ</h3>
        <p>В каждый пакет также включена стоимость. А для тех, кто успеет забронировать даты до 20 января  - дополнительная 10% скидка на каждый пакет!</p>
        <h3>ДАТЫ</h3>
        <p>В первой половине 2019 года, мы организовываем фотодни в двух городах:</p>
        <h2>МОСКВА: 8-12 МАРТА</h2>
        <h2>САНКТ-ПЕТЕРБУРГ: 15-19 МАРТА</h2>
        <p>Даты и время лучше бронировать заранее, чтобы успеть закрепить за собой время.</p>
        <p>Если у тебя остались вопросы или сомнения - напиши мне! Я проведу бесплатную консультацию по выбору лучшего предложения)</p>
        <p>Первым 10, кто забронирует даты, до 10 февраля - в подарок персональный программа продвижения в социальных сетях, на основе анализа твоей страницы ;)</p>
        <button type="button" class="btn-block btn-xl-red" onclick="location.href = 'order.php#form_message=Записаться%20на%20ФОТОДНИ'">ЗАПИСАТЬСЯ</button>    
    </div>
      <div class="col-md-2">
      </div>
    </div>    
    <img src="img/special/pd/pd01.jpg" class="img-fluid">
    <hr>
    <img src="img/special/pd/pd02.jpg" class="img-fluid">   
    <hr>
    <img src="img/special/pd/pd03.jpg" class="img-fluid">
    <hr>
    <img src="img/special/pd/pd04.jpg" class="img-fluid">
    <hr>
    <img src="img/special/pd/pd05.jpg" class="img-fluid">   
    <hr>
    <img src="img/special/pd/pd06.jpg" class="img-fluid">
    <hr>
    <img src="img/special/pd/pd07.jpg" class="img-fluid">
    <hr>
    <img src="img/special/pd/pd08.jpg" class="img-fluid">   
    <hr>
    <img src="img/special/pd/pd09.jpg" class="img-fluid">            
    </main>    
    <!-- footer-->   
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