<?php
/**
 *	  ┏┓　　　┏┓
 *	┏┛┻━━━┛┻┓
 *	┃　　　　　　　┃
 *	┃　　　━　　　┃
 *	┃　┳┛　┗┳　┃
 *	┃　　　　　　　┃
 *	┃　　　┻　　　┃
 *	┃　　　　　　　┃
 *	┗━┓　　　┏━┛
 *	    ┃　　　┃   神兽保佑
 *	    ┃　　　┃   代码无BUG！
 *	 	 ┃　　　┗━━━┓
 *	    ┃　　　　　　　┣┓
 *	    ┃　　　　　　　┏┛
 *	    ┗┓┓┏━┳┓┏┛
 *	      ┃┫┫　┃┫┫
 *	      ┗┻┛　┗┻┛
 */ 

namespace app\controllers;

use Yii;
use yii\web\Controller;
use kartik\widgets\ActiveForm;

class WebController extends Controller
{
    public function behaviors()
    {
        return parent::behaviors();
    }
    public function init()
    {
        Yii::$container->set('yii\widgets\LinkPager',[
            'firstPageLabel'=>'首页',
            'lastPageLabel'=>'尾页',
            'prevPageLabel'=>'上页',
            'nextPageLabel'=>'下页',
            'hideOnSinglePage'=>false,
            'options'=>[
                'class'=>'pagination pull-right'
            ],
        ]);
        Yii::$container->set('yii\data\Pagination',[
            'defaultPageSize'=>15
        ]);
        Yii::$container->set('yii\grid\ActionColumn',[
            'header'=>'操作',
            'template'=>'{update} {delete}',
        ]);
        //kartik ActiveForm插件
        Yii::$container->set(ActiveForm::className(),[
            'type'=>ActiveForm::TYPE_HORIZONTAL,
        ]);
        //日期时间选择插件
        Yii::$container->set('kartik\widgets\DateTimePicker',[
            'pluginOptions'=>[
                'autoclose'=>true,
            ],
        ]);
        //时间选择插件
        Yii::$container->set('kartik\widgets\TimePicker',[
            'pluginOptions'=>[
                'showSeconds'=>true,
                'showMeridian'=>false,
                'minuteStep'=>5,
            ]
        ]);
        //TimestampBehavior
        Yii::$container->set('yii\behaviors\TimestampBehavior',[
            'value'=>function()
            {
                return date('Y-m-d H:i:s');
            }
        ]);
    }
}