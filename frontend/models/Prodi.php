<?php

namespace frontend\models;      // edit dari app ke frontend

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id_prodi
 * @property string $nama_prodi
 * @property int $jurusan
 * @property string|null $telpon
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_prodi', 'jurusan'], 'required'],
            [['jurusan'], 'integer'],
            [['nama_prodi'], 'string', 'max' => 80],
            [['telpon'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prodi' => 'Id Prodi',
            'nama_prodi' => 'Nama Prodi',
            'jurusan' => 'Jurusan',
            'telpon' => 'Telpon',
        ];
    }
}
