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
        ]) ?><br>
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
                <ul class="list-group">
                    <li class="list-group-item">亚航一架印尼飞新加坡客机失联 <small> 作者: <em>段超</em></small> <span class="pull-right">2014-12-12</span></li>
                    <li class="list-group-item">周鸿祎开骂被称绝望的咆哮<span class="pull-right">2014-02-12</span></li>
                    <li class="list-group-item">媒体：习近平治国理政“十件大事”<span class="pull-right">2014-11-09</span></li>
                    <li class="list-group-item">风波中的弹幕视频网站：爱奇艺等集体起诉哔哩哔哩<span class="pull-right">2014-10-23</span></li>
                    <li class="list-group-item">赵本山徒弟疑回应师父传言：国家管造谣么<span class="pull-right">2014-06-19</span></li>
                </ul>
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
        <br>
        <div class="panel panel-default">
            <div class="panel-body">
                Basic panel example
            </div>
        </div>
    </div>
</div>