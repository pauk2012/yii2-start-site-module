<?php

/**
 * Frontend main page view.
 *
 * @var yii\web\View $this View
 */

use yii\helpers\Url;


$this->title = Yii::$app->name;
$this->params['noTitle'] = true; ?>

<section id="main-slider" class="no-margin center">
    <div class="well">

        <a href="<?=Url::toRoute(['/klasses/default/index', 'tag' => 'yoga'])?>" class="btn btn-default btn-lg">Йога класс</a>
        <a href="<?=Url::toRoute(['/klasses/default/index', 'tag' => 'dance'])?>" class="btn btn-default btn-lg">Танцевальный класс</a>
        <p></p>
        <a href="<?=Url::toRoute(['/klasses/default/index', 'tag' => 'accounting'])?>" class="btn btn-default btn-lg">Бухгалтерия</a>
        <a href="<?=Url::toRoute(['/klasses/default/index', 'tag' => 'musical instruments'])?>" class="btn btn-default btn-lg">Музыкальные инструменты</a>
        <p></p>
        <a href="<?=Url::toRoute(['/klasses/default/index', 'tag' => 'martial arts'])?>" class="btn btn-default btn-lg">Восточные единоборства</a>
        <a href="<?=Url::toRoute(['/klasses/default/index', 'tag' => 'vocals'])?>" class="btn btn-default btn-lg">Вокал</a>
        <p></p>
        <a href="<?=Url::toRoute(['/klasses/default/index'])?>" class="btn btn-primary btn-lg">Найти ещё </a> или <a href="<?=Url::toRoute(['/backend/klasses/default/create'])?>" class="btn btn-primary btn-lg">Добавит класс</a>

    </div>
</section>

<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-user icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Для треннеров</h3>
                        <p>Вход в личный кабинет</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
