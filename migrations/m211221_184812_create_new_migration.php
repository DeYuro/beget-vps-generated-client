<?php

use yii\db\Migration;

/**
 * Class m211221_184812_create_new_migration
 */
class m211221_184812_create_new_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("transaction", [
            "id" => "VARCHAR(30) PRIMARY KEY ",
            "amount" => "DECIMAL(8,2) NOT NULL",
            "status" => "ENUM('wait','done','canceled','processing') NOT NULL",
            "error" => "TEXT",
            "owner_type" => "VARCHAR(255) NOT NULL",
            "owner_order_id" => "INT NOT NULL",
            "created_at" => "TIMESTAMP NOT NULL",
        ]);

        $this->createTable("order", [
            "id" => "INT PRIMARY KEY AUTO_INCREMENT",
            "name" => "VARCHAR(32) NOT NULL",
            "surname" => "VARCHAR(32) NOT NULL",
            "patronymic" => "VARCHAR(32)",
            "status" => "ENUM('created','payment','processing','completed', 'error') NOT NULL",
            "transaction_id" => "VARCHAR(30) NOT NULL",
            "error" => "TEXT",
            "email" => "VARCHAR(255) NOT NULL",
            "created_at" => "DATETIME NOT NULL DEFAULT NOW()",
            "complete_at" => "DATETIME DEFAULT NULL",
        ]);
        $this->createIndex("idx_transaction_status", "transaction", "status");
        $this->createIndex("idx_transaction_owner_type", "transaction", "owner_type");
        $this->createIndex("idx_transaction_owner_order_id", "transaction", "owner_order_id");
        $this->createIndex("idx_transaction_created_at", "transaction", "created_at");

        $this->addForeignKey(
            "fk_order_transaction_id", "order", "transaction_id",
            "transaction", "id");

        $this->createIndex("idx_order_status", "order", "status");
        $this->createIndex("idx_order_created_at", "order", "created_at");

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("order");
        $this->dropTable("transaction");

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211221_184812_create_new_migration cannot be reverted.\n";

        return false;
    }
    */
}
