<footer>
<div class="row foofooter">
          <div class="col-sm-6"> <h5><strong>КОНТАКТЫ</strong></h5>            
            <a href="mailto:katerinacirkova3@gmail.com">katerinacirkova3@gmail.com</a> / 8 901 700 45 11
            <div class="row">
              <div class="col-sm-1">
                <i class="fab fa-facebook fa-2x"></i>
              </div>
              <div class="col-sm-1">
                <i class="fab fa-vk fa-2x"></i>                
              </div>
              <div class="col-sm-1">
                <i class="fab fa-instagram fa-2x"></i>
              </div>
              <div class="col-sm-6">
                Я в соцсетях.<br>Подключайтесь и следите за акциями.
              </div>
              <div class="col-sm-3">
              </div>
            </div>
            <p><a href="policy.php">Политика конфиденциальности</a></p>
            <p>(c) 2018 cirkovaphoto</p>
          </div>
          <div class="col-sm-3">
            <form>
              <div class="form-group">                
                <input type="text" class="form-control form-control-sm" id="name" name="name" aria-describedby="firstnameHelp" placeholder="Имя*">
                <?php echo "<p class='text-danger'>$errName</p>";?>
                <input type="email" class="form-control form-control-sm" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail*">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                <input type="phone" class="form-control form-control-sm" id="phone" name="phone" placeholder="Телефон">                
                <textarea class="form-control form-control-sm" id="message" name="message" rows="3" placeholder="Сообщение"></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                <button type="submit" id="submit" class="btn-block btn-outline-secondary">Отправить</button>
                <small id="emailHelp" class="form-text text-muted">Нажимая на кнопку "Отправить", вы соглашаетесь на обработку персональных данных.</small>  
                <?php echo $result; ?>  
            </div>
            </form>
          </div>
          <div class="col-sm-3">
            <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="index.php">ГЛАВНАЯ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="actors.php">АКТЕРАМ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="business.php">БИЗНЕС-ПОРТРЕТ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kids.php">KIDS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutme.php">ОБО МНЕ</a>
            </li>
            
          </ul>
          </div>
  </div>
<footer>