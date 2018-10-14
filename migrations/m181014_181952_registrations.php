<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m181014_181952_registrations
 */
class m181014_181952_registrations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('registrations', [
            'id' => Schema::TYPE_PK,
            'type' => "ENUM('user', 'company') NOT NULL COMMENT 'Тип регистрации'",
            'fio' => Schema::TYPE_STRING . " COMMENT 'ФИО'",
            'email' => Schema::TYPE_STRING . " COMMENT 'Email'",
            'is_employer' => Schema::TYPE_BOOLEAN . " COMMENT 'ИП'",
            'inn' => Schema::TYPE_STRING . " COMMENT 'ИНН'",
            'company_name' => Schema::TYPE_STRING . " COMMENT 'Название компании'"
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('registrations');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181014_181952_registrations cannot be reverted.\n";

        return false;
    }
    */
}
