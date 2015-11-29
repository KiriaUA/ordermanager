<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.11.2015
 * Time: 18:29
 */

namespace app\models;


use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public static function tableName()
    {
        return "oc_order";
    }

    public static function getAll(){
        return self::find()->all();
    }


}