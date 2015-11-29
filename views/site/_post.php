<?php
use yii\widgets\DetailView;

?>
<div class="order">
    <?php
    echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',               // title attribute (in plain text)
            'telephone',    // description attribute formatted as HTML
        ],
    ]);
    ?>
</div>