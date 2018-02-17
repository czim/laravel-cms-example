<?php

use Czim\CmsCore\Support\Database\CmsMigration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileUploadsTable extends CmsMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->prefixCmsTable('file_uploads'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference', 191)->nullable()->index();
            $table->string('name', 191)->nullable();
            $table->text('path')->nullable();
            $table->string('uploader', 191)->nullable();
            $table->integer('file_size')->unsigned()->nullable();
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
        Schema::drop($this->prefixCmsTable('file_uploads'));
    }
}
