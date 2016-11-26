<?php

use Illuminate\Database\Seeder;

abstract class AbstractTableSeeder extends Seeder
{

    /**
     * Unsafely force-truncate a table and reset the auto-increment count
     *
     * @param  string $table	table name
     */
    protected function truncateTable($table) {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table($table)->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
