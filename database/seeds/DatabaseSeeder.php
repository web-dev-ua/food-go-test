<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $additives = factory(\App\Models\Additive::class, 3)->create();
        $tags = factory(\App\Models\Tag::class, 5)->create();
        $categories = factory(\App\Models\Category::class, 5)->create()->each(function ($category) use ($additives, $tags) {
            $category->products()->saveMany(factory(\App\Models\Product::class, 3)->create(['category_id' => $category->id])->each(function ($product) use ($additives, $tags) {
                $product->sizes()->saveMany(factory(\App\Models\ProductSizes::class, 2)->make());

                $product->additives()->attach(
                    $additives->random(rand(1, 3))->pluck('id')->toArray()
                );

                $product->tags()->attach(
                    $tags->random(rand(1, 3))->pluck('id')->toArray()
                );
            }));
        });
    }
}
