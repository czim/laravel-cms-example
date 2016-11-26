<?php

use Czim\CmsCore\Support\Database\CmsMigration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsOauthPersonalAccessClientsTable extends CmsMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->prefixCmsTable('oauth_personal_access_clients'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->index();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->prefixCmsTable('oauth_personal_access_clients'));
    }
}
