<?php
if (Yii::$app->session->hasFlash('success')) {
  echo '<br>Nama : '.$model->nama;
  echo '<br>Pesan : '.$model->pesan;
} else if (Yii::$app->session->hasFlash('error')) {
  echo '<div class="alert alert-error">';
  echo Yii::$app->session->getFlash('Error');
  echo '</div>';
}
