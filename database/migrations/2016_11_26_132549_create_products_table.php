<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model_name')->unique();
            $table->decimal('price', 5, 2);
            $table->enum('special', ['holiday', 'custom', 'miniature', 'test'])->nullable();
            $table->string('special_free')->nullable();
            $table->integer('brand_id')->unsigned();
            $table->boolean('active')->default(true);
            $table->boolean('sale')->default(false);
            $table->string('image_file_name', 255)->nullable();
            $table->integer('image_file_size')->nullable();
            $table->string('image_content_type')->nullable();
            $table->timestamp('image_updated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
