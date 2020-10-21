<?php
if (Yii::$app->session->hasFlash('success')) {
  echo '<div class="alert alert-success"></div>';
  echo Yii::$app->session->getFlash('success');
  echo '</div>';
  echo '<br>Nama : '.$model->nama;
  echo '<br>Pesan : '.$model->pesan;
} else if (Yii::$app->session->hasFlash('error')) {
  echo '<div class="alert alert-error"></div>';
  echo Yii::$app->session->getFlash('Error');
  echo '</div>';
}
