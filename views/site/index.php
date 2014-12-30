<?php
/* @var $this yii\web\View */
$this->title = '首页';
?>
<div class="row">
    <div class="col-lg-9">
        <?= \yii\bootstrap\Carousel::widget([
            'items' => [
                ['content' => '<img src="/images/1.png"/>'],
                ['content' => '<img src="/images/2.jpg"/>'],
                ['content' => '<img src="/images/3.png"/>'],
                ['content' => '<img src="/images/4.png"/>'],
                ['content' => '<img src="/images/5.png"/>'],
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
                    <img src="images/sj.jpg" alt="...">
                    <div class="caption">
                        <h3>深圳突施限牌令</h3>
                        <p>万恶的“忙死DAY”如约而至，当大伙满心欢喜地期待2015年元旦佳节来临之际，一则“深圳正式实施汽车限购”的重磅公告瞬间引爆了整个车市...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/ipad.jpg" alt="...">
                    <div class="caption">
                        <h3>被逼上绝路的ipad</h3>
                        <p>iPhone 6的成功其实是以牺牲iPad平板电脑为代价的，此种情况下，苹果势必会调整iPad的战略决策。</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/zhubo.jpg" alt="...">
                    <div class="caption">
                        <h3>网络主播的真实生活</h3>
                        <p>小雪，山西太原人，从小和爷爷奶奶在一起生活的她，现在是虎牙90998一名职业网络游戏女主播。在大家看来，这个职业让人更多联想到的关键词是甜美、娇声细语，但小雪其实是一个颇具男孩儿性格的90后女孩。</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><span class="glyphicon glyphicon-star"></span> 今日要闻 <small class="pull-right"><a href="#">查看更多</a></small></div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">亚航一架印尼飞新加坡客机失联 <small> <em class="text-success">作者: 张三</em></small> <span class="pull-right">2014-12-12</span></li>
                    <li class="list-group-item">周鸿祎开骂被称绝望的咆哮 <small> <em class="text-success">作者: 李四</em></small><span class="pull-right">2014-02-12</span></li>
                    <li class="list-group-item">媒体：习近平治国理政“十件大事” <small> <em class="text-success">作者: 小明</em></small><span class="pull-right">2014-11-09</span></li>
                    <li class="list-group-item">风波中的弹幕视频网站：爱奇艺等集体起诉哔哩哔哩 <small> <em class="text-success">作者: 张三</em></small> <span class="pull-right">2014-10-23</span></li>
                    <li class="list-group-item">赵本山徒弟疑回应师父传言：国家管造谣么 <small> <em class="text-success">作者: 黄大仙</em></small><span class="pull-right">2014-06-19</span></li>
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
                            'label' => '帅哥哦',
                            'content' => '^_^ 哈哈',
                        ],
                    ],
                ],
            ],
        ]) ?>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading"><i class="glyphicon glyphicon-comment"></i>&nbsp;热门话题</div>
            <div class="panel-body">
                <ul class="post-list">
                    <li>
                        <a href="#">Cras justo odio</a>
                    </li>
                    <li>
                        Cras justo odio
                    </li>
                    <li>
                        Cras justo odio
                    </li>
                </ul>
            </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge">14</span>
                Cras justo odio
            </li>
            <li class="list-group-item">
                <span class="badge">14</span>
                Cras justo odio
            </li>
            <li class="list-group-item">
                <span class="badge">14</span>
                Cras justo odio
            </li>
        </ul>
    </div>
</div>