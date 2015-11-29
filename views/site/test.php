<?php

/* @var $this yii\web\View */

use app\models\Order;
use yii\data\ArrayDataProvider;
use yii\widgets\ListView;

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>Заказы</h1>

    <?php
        $dataProvider = new ArrayDataProvider([
            'allModels' => Order::getAll(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        echo ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_post',
        ]);
    ?>

</div>
