<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DarsJadvali]].
 *
 * @see DarsJadvali
 */
class DarsJadvaliQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return DarsJadvali[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return DarsJadvali|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
