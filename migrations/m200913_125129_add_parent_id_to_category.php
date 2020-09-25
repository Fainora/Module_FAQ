<?php

use yii\db\Migration;

class m200913_125129_add_parent_id_to_category extends Migration
{
    public function up()
    {
        $this->addColumn('category', 'parent_id', $this->integer()->notNull());
		
		 // creates index for column `category_id`
        $this->createIndex(
            'idx-category-parent_id',
            'category',
            'parent_id'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-category-parent_id',
            'category',
            'parent_id',
			'category',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropColumn('category', 'parent');
    }
}
