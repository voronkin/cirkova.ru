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
                Я в соцсетях.<br>Подключайтесь<br>и следите за акциями.
              </div>
              <div class="col-sm-3">
              </div>
            </div>
            <p><a href="policy.php">Политика конфиденциальности</a></p>
            <p>(c) 2018 cirkovaphoto</p>
          </div>
          <div class="col-sm-3">
          <?php if(!empty($emailSent)): ?>        
            <div class="alert alert-success text-center"><?php echo $config->get('messages.success'); ?>
        </div>
    <?php else: ?>
        <?php if(!empty($hasError)): ?>        
            <div class="alert alert-danger text-center"><?php echo $config->get('messages.error'); ?></div>
        
        <?php endif; ?>
        
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
            <div class="form-group">                
                
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                
            </div>
            <div class="form-group">
                
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                
            </div>
            <div class="form-group">
                
                    <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="<?php echo $config->get('fields.phone'); ?>">
                
            </div>
            <div class="form-group">
                
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                
            </div>
            <div class="form-group">
                
                    <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                
            </div>
            <div class="form-group">
                
                    <button type="submit" class="btn btn-default"><?php echo $config->get('fields.btn-send'); ?></button>
                
            </div>
        </form>    
    <?php endif; ?>

    <script type="text/javascript" src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>
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