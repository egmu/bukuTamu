<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id
 * @property string $nama
 * @property string $instansi
 * @property string $tujuan
 * @property string $keperluan
 * @property string $tanggal
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'instansi', 'tujuan', 'keperluan', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            [['instansi'], 'string', 'max' => 100],
            [['tujuan'], 'string', 'max' => 150],
            [['keperluan'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'instansi' => 'Instansi',
            'tujuan' => 'Tujuan',
            'keperluan' => 'Keperluan',
            'tanggal' => 'Tanggal',
        ];
    }
}
