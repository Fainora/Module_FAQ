<?php

use yii\db\Migration;

class m200913_074035_create_question_table extends Migration
{
    public function up()
    {
        $this->createTable('question', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'answer' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
		
		 // creates index for column `category_id`
        $this->createIndex(
            'idx-question-category_id',
            'question',
            'category_id'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-question-category_id',
            'question',
            'category_id',
			'category',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('question');
    }
}
