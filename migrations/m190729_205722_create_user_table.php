<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190729_205722_create_user_table extends Migration
{
  /**
   * {@inheritdoc}
   */
  public function safeUp() {
    $this->createTable('{{%user}}', [
      'id' => $this->primaryKey(),
      'name' => $this->string(45)->notNull(),
      'email' => $this->string(45)->unique()->notNull(),
      'hash_pass' => $this->string(32)->notNull(),
      'status' => $this->integer()->defaultValue(1)
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function safeDown() {
    $this->dropTable('{{%user}}');
  }
}
