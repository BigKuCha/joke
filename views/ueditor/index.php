<?php
/**
 *      ┏┓　　　┏┓
 *    ┏┛┻━━━┛┻┓
 *    ┃　　　　　　　┃
 *    ┃　　　━　　　┃
 *    ┃　┳┛　┗┳　┃
 *    ┃　　　　　　　┃
 *    ┃　　　┻　　　┃
 *    ┃　　　　　　　┃
 *    ┗━┓　　　┏━┛
 *        ┃　　　┃   神兽保佑
 *        ┃　　　┃   代码无BUG！
 *         ┃　　　┗━━━┓
 *        ┃　　　　　　　┣┓
 *        ┃　　　　　　　┏┛
 *        ┗┓┓┏━┳┓┏┛
 *          ┃┫┫　┃┫┫
 *          ┗┻┛　┗┻┛
 */

/* @var $this yii\web\View */
use xj\ueditor\Ueditor;
use kartik\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'username')->widget(Ueditor::className(), [
//    'model'      => $model,
//    'attribute'  => 'password',
//    'name'       => 'customName',
    'value'      => 'content',
    'style'      => 'width:100%;height:400px',
    'renderTag'  => true,
    'readyEvent' => 'console.log("example2 ready")',
    'jsOptions'  => [
        'serverUrl'        => yii\helpers\Url::to(['upload']),
        'autoHeightEnable' => true,
        'autoFloatEnable'  => true
    ],
]) ?>
<?php $form->end() ?>

<?= Ueditor::widget([
    'model'      => $model,
    'attribute'  => 'password',
    'name'       => 'customName',
    'value'      => 'content',
    'style'      => 'width:100%;height:400px',
    'renderTag'  => true,
    'readyEvent' => 'console.log("example2 ready")',
    'jsOptions'  => [
        'serverUrl'        => yii\helpers\Url::to(['upload']),
        'autoHeightEnable' => true,
        'autoFloatEnable'  => true
    ],
]) ?>