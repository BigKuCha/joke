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

namespace app\controllers;

use app\models\User;
use xj\ueditor\actions\Upload;

class UeditorController extends WebController
{
    public function actions()
    {
        return [
            'upload' => [
                'class'          => Upload::className(),
                'uploadBasePath' => '@webroot', //file system path
                'uploadBaseUrl'  => '@web', //web path
                'csrf'           => true, //csrf校验
                'configPatch'    => [
                    'imageMaxSize'         => 500 * 1024, //图片
                    'scrawlMaxSize'        => 500 * 1024, //涂鸦
                    'catcherMaxSize'       => 500 * 1024, //远程
                    'videoMaxSize'         => 1024 * 1024, //视频
                    'fileMaxSize'          => 1024 * 1024, //文件
                    'imageManagerListPath' => '/', //图片列表
                    'fileManagerListPath'  => '/', //文件列表
                ],
                'pathFormat'     => [
                    'imagePathFormat'      => 'image/{yyyy}{mm}{dd}/{time}{rand:6}',
                    'scrawlPathFormat'     => 'image/{yyyy}{mm}{dd}/{time}{rand:6}',
                    'snapscreenPathFormat' => 'image/{yyyy}{mm}{dd}/{time}{rand:6}',
                    'catcherPathFormat'    => 'image/{yyyy}{mm}{dd}/{time}{rand:6}',
                    'videoPathFormat'      => 'video/{yyyy}{mm}{dd}/{time}{rand:6}',
                    'filePathFormat'       => 'file/{yyyy}{mm}{dd}/{time}{rand:6}',
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $model = new User();
        return $this->render('index', [
            'model' => $model,
        ]);
    }
}