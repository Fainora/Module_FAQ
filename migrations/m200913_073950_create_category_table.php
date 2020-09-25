<?php

use yii\db\Migration;

class m200913_073950_create_category_table extends Migration
{
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
