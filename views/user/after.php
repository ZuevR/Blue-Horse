<?php

/* @var $username yii\web\View */
/* @var $email yii\web\View */

?>
<div class="site-sign-up">

  <div class="row">
    <div class="col-12">
      <div style="margin-top:100px;"></div>
      <div class="sign-up-info" style="height:auto;">
        <h2 class="info-success"><span class="info-success-colored"><?= $username; ?></span>, ваши данные были успешно отправлены.</h2>
        <h2 class="info-success">Как только ваша регистрация будет подтверждена
          вы получите уведомление на указанный адрес электронной почты. <span class="info-success-colored">“<?= $email; ?>“</span>
        </h2>
        <h2 class="info-success">А так же вы сможете авторизоваться в системе на cтранице <span class="info-success-colored">“Login“</span></h2>
      </div>
    </div>
  </div>

</div>
