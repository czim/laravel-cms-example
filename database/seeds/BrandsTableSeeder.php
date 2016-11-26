<?php

class BrandsTableSeeder extends AbstractTableSeeder
{
    public function run()
    {
        $this->truncateTable('brands');

        factory(\App\Models\Brand::class)->times(30)->create();
    }
}
