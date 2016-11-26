<?php

use Czim\CmsCore\Support\Database\CmsMigration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsOauthAccessTokensTable extends CmsMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->prefixCmsTable('oauth_access_tokens'), function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->integer('user_id')->index()->nullable();
            $table->integer('client_id');
            $table->string('name')->nullable();
            $table->text('scopes')->nullable();
            $table->boolean('revoked');
            $table->nullableTimestamps();
            $table->dateTime('expires_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->prefixCmsTable('oauth_access_tokens'));
    }
}
