<?php

use yii\db\Schema;
use yii\db\Migration;

if ( ! class_exists('m130524_201442_init'))
	include 'm130524_201442_init.php';

class m140921_144724_revert_user_migration extends Migration
{
    public function up()
    {
    	(new m130524_201442_init)->down();
    }

    public function down()
    {
    	(new m130524_201442_init)->up();
    }
}
