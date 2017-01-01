<?php

class ProductsTableSeeder extends AbstractTableSeeder
{
    public function run()
    {
        $this->truncateTable('category_product');
        $this->truncateTable('variants');
        $this->truncateTable('product_translations');
        $this->truncateTable('products');

        factory(\App\Models\Product::class)
            ->times(20)
            ->make()
            ->each(function (\App\Models\Product $product) {
                $product->brand()->associate(\App\Models\Brand::inRandomOrder()->first());
                $product->save();
            });

        foreach (\App\Models\Product::all() as $product) {

            /** @var \App\Models\Variant $variants */
            $variants = factory(\App\Models\Variant::class)
                ->times(rand(1,3))
                ->make();

            if ($variants instanceof \App\Models\Variant) {
                $variants->product()->associate($product);
                $variants->save();
            } else {
                foreach ($variants as $variant) {
                    $variant->product()->associate($product);
                    $variant->save();
                }
            }

            $ids = \App\Models\Category::inRandomOrder()->take(rand(1,2))->pluck('id')->toArray();

            $attach = [];
            foreach ($ids as $index => $id) {
                $attach[$id] = [ 'position' => $index + 1 ];
            }

            $product->categories()->attach($attach);
        }
    }
}
