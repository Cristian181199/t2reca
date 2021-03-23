<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reservas}}`.
 */
class m210323_143755_create_reservas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reservas}}', [
            'id' => $this->bigPrimaryKey(),
            'usuario_id' => $this->bigInteger()->notNull(),
            'vuelo_id' => $this->bigInteger()->notNull(),
            'asiento' => $this->integer()->notNull()->check('asiento > 0'), // Comprobacion de que el asiento es mayor a 0
            'UNIQUE (vuelo_id, asiento)', // No puede haber un asiento reservado dos veces en el mismo vuelo.
            'UNIQUE (usuario_id, vuelo_id)', // Un usuario no puede reservar un mismo vuelo 2 veces.
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reservas}}');
    }
}
