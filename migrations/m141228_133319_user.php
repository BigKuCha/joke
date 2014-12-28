<?php

use yii\db\Schema;
use yii\db\Migration;

class m141228_133319_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        /**
         * 用户表
         */
        $this->createTable('{{%user}}', [
            'id'         => Schema::TYPE_PK,
            'username'   => Schema::TYPE_STRING . "(32) NOT NULL COMMENT '用户名'",
            'password'   => Schema::TYPE_STRING . "(64) NOT NULL COMMENT '密码'",
            'email'      => Schema::TYPE_STRING . "(64) NOT NULL COMMENT '邮箱'",
            'photo'      => Schema::TYPE_STRING . "(128)  COMMENT '头像'",
            'created_at' => Schema::TYPE_DATETIME . " NOT NULL COMMENT '添加时间'",
            'updated_at' => Schema::TYPE_DATETIME . " NOT NULL COMMENT '修改时间'",
        ], $tableOptions." COMMENT='用户表'");

        $this->insert('{{%user}}',[
            'username' => 'admin',
            'password' => Yii::$app->security->generatePasswordHash('admin'),
            'email' => 'admin@qq.com',
        ]);
    }

    public function safeDown()
    {
        $tables = array('user');
        foreach ($tables as $table) {
            $tablename = '{{%' . $table . '}}';
            try {
                $this->dropTable($tablename);
            } catch (Exception $e) {
                return false;
            }
        }
        return true;
    }
}
