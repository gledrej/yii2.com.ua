<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<p> Вы ввели имя<b><?=$name?></b> и email <?=$email?>
<?php $f = ActiveForm::begin();?>

      <?=$f->field($form, 'name')?>
      <?=$f->field($form, 'email')?>
      <?= Html::submitButton('Отправить');?>

<?php ActiveForm::end(); ?>
