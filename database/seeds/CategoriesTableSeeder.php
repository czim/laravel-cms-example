<?php

class CategoriesTableSeeder extends AbstractTableSeeder
{
    public function run()
    {
        $this->truncateTable('category_translations');
        $this->truncateTable('categories');

        factory(\App\Models\Category::class)->times(20)->create();
    }
}
