<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('string', 255)->nullable();
            $table->string('short_string', 4)->nullable();
            $table->text('text')->nullable();
            $table->text('richtext')->nullable();
            $table->boolean('boolean')->default(false);
            $table->integer('integer')->default(0);
            $table->decimal('decimal', 11, 3)->default(0.0);
            $table->enum('enum', [ 'alpha', 'beta', 'gamma', 'omega' ])->default('alpha')->nullable();
            $table->date('date')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('color', 7)->nullable();
            $table->string('location', 200)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
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
        Schema::dropIfExists('examples');
    }
}
