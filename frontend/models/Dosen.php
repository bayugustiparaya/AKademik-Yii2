<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Dosen extends ActiveRecord {
  public static function tableName()
  {
    return 'dosen';
  }
}