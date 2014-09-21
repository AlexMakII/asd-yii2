<?php

use yii\db\Schema;
use yii\db\Migration;

class m140921_162837_create_admin_user extends Migration
{
    public function up()
    {
        $this->insert('{{%user}}', [
            'username'      => 'admin',
            'email'         => 'admin@asd.fo',
            // Password is "somepassword"
            'password_hash' => '$2y$12$kufnnY64sLE3OmPtfap6JOFEb9VIudTtjOqP5moPV96ghs408pt7q',
            'role'          => 'admin'
            ]);
    }

    public function down()
    {
        $this->delete('{{%user}}', 'username = "admin"');
        $user = User::findByUsername('admin');
        $user->delete();
    }
}
