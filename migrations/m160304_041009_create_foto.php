<?php

use yii\db\Migration;

class m160304_041009_create_foto extends Migration
{
    public function up()
    {
        $this->createTable('foto', [
            'id' => $this->primaryKey(),
            'foto' => $this->string(200)
        ]);
    }

    public function down()
    {
        $this->dropTable('foto');
    }
}
