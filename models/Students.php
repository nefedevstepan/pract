<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $name
 * @property string $fam
 * @property string $otch
 * @property string $date
 * @property string $gr
 * @property string $kurs
 * @property string $soc
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'fam', 'otch', 'date', 'gr', 'kurs', 'soc'], 'required'],
            [['name', 'fam', 'otch', 'date', 'gr', 'kurs', 'soc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'fam' => 'Фамилия',
            'otch' => 'Отчество',
            'date' => 'Дата рождения',
            'gr' => 'Группа',
            'kurs' => 'Курс',
            'soc' => 'Социальное положение',
        ];
    }
}
