<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vuelos}}`.
 */
class m210323_143559_create_vuelos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vuelos}}', [
            'id' => $this->bigPrimaryKey(),
            'origen_id' => $this->bigInteger()->notNull(),
            'destino_id' => $this->bigInteger()->notNull(),
            'salida' => $this->timestamp(0),
            'llegada' => $this->timestamp(0),
            'plazas' => $this->smallInteger(),
            'precio' => $this->decimal(7,2),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vuelos}}');
    }
}
