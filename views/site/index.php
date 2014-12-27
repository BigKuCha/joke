<?php
/* @var $this yii\web\View */
$this->title = '首页';
?>
<div class="row">
    <div class="col-lg-9">
        <?= \yii\bootstrap\Carousel::widget([
            'items' => [
                ['content' => '<img src="images/1.png"/>'],
                ['content' => '<img src="images/2.jpg"/>'],
                ['content' => '<img src="images/3.png"/>'],
                ['content' => '<img src="images/4.png"/>'],
                ['content' => '<img src="images/5.png"/>'],
            ],
            'options' => [
                'class' => 'slide',
                'style' => 'width'
            ],
            'controls' => [
                '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
                '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
            ],
            'clientOptions' => [
                'interval' => 2000
            ]
        ]) ?>
        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x300" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x300" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img data-src="holder.js/300x300" alt="...">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><span class="glyphicon glyphicon-star"></span> Star</div>
            <div class="panel-body">
                Panel content
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <?= \yii\bootstrap\Tabs::widget([
            'items' => [
                [
                    'label' => '最新',
                    'content' => '我是最新的内容啊',
                    'active' => true
                ],
                [
                    'label' => '最热',
                    'content' => '最热门的就是我咯',
                    'options' => ['id' => 'myveryownID'],
                ],
                [
                    'label' => '猜你喜欢',
                    'items' => [
                        [
                            'label' => '美女哦',
                            'content' => '这里全都是美女',
                        ],
                        [
                            'label' => '帅哥',
                            'content' => '^_^',
                        ],
                    ],
                ],
            ],
        ]) ?>
    </div>
</div>