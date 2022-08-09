<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "darsJadvali".
 *
 * @property int $id
 * @property string $guruh
 * @property string $dushanba1
 * @property string $dushanba2
 * @property string $dushanba3
 * @property string $dushanba4
 * @property string $seshanba1
 * @property string $seshanba2
 * @property string $seshanba3
 * @property string $seshanba4
 * @property string $chorshanba1
 * @property string $chorshanba2
 * @property string $chorshanba3
 * @property string $chorshanba4
 * @property string $payshanba1
 * @property string $payshanba2
 * @property string $payshanba3
 * @property string $payshanba4
 * @property string $juma1
 * @property string $juma2
 * @property string $juma3
 * @property string $juma4
 * @property string $shanba1
 * @property string $shanba2
 * @property string $shanba3
 * @property string $shanba4
 */
class DarsJadvali extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'darsJadvali';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guruh', 'dushanba1', 'dushanba2', 'dushanba3', 'seshanba1', 'seshanba2', 'seshanba3', 'chorshanba1', 'chorshanba2', 'chorshanba3', 'payshanba1', 'payshanba2', 'payshanba3', 'juma1', 'juma2', 'juma3', 'shanba1', 'shanba2', 'shanba3'], 'required'],
            [['dushanba1', 'dushanba2', 'dushanba3', 'dushanba4', 'seshanba1', 'seshanba2', 'seshanba3', 'seshanba4', 'chorshanba1', 'chorshanba2', 'chorshanba3', 'chorshanba4', 'payshanba1', 'payshanba2', 'payshanba3', 'payshanba4', 'juma1', 'juma2', 'juma3', 'juma4', 'shanba1', 'shanba2', 'shanba3', 'shanba4'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'guruh' => 'Guruhi',
            'dushanba1' => 'Dushanba1',
            'dushanba2' => 'Dushanba2',
            'dushanba3' => 'Dushanba3',
            'dushanba4' => 'Dushanba4',
            'seshanba1' => 'Seshanba1',
            'seshanba2' => 'Seshanba2',
            'seshanba3' => 'Seshanba3',
            'seshanba4' => 'Seshanba4',
            'chorshanba1' => 'Chorshanba1',
            'chorshanba2' => 'Chorshanba2',
            'chorshanba3' => 'Chorshanba3',
            'chorshanba4' => 'Chorshanba4',
            'payshanba1' => 'Payshanba1',
            'payshanba2' => 'Payshanba2',
            'payshanba3' => 'Payshanba3',
            'payshanba4' => 'Payshanba4',
            'juma1' => 'Juma1',
            'juma2' => 'Juma2',
            'juma3' => 'Juma3',
            'juma4' => 'Juma4',
            'shanba1' => 'Shanba1',
            'shanba2' => 'Shanba2',
            'shanba3' => 'Shanba3',
            'shanba4' => 'Shanba4',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DarsJadvaliQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DarsJadvaliQuery(get_called_class());
    }
}
