<?php
$this->title = Yii::$app->name;
?>

<div class="row">
    <div class="col-lg-4 mb-3">
        <div class="col-lg-4 mb-3">
            <?php foreach($posts as $post): ?>
            <div class="col-md-3">
                <div class="single-post">
                    <h3><a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>"><?= $post->title ?></a> </h3>
                    <p>
                        <?= $post->excerpt ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>