<?php

namespace Database\Seeders\Themes\Main;

use Botble\Ecommerce\Models\FlashSale;
use Botble\Ecommerce\Models\Product;
use Botble\Theme\Database\Seeders\ThemeSeeder;
use Illuminate\Support\Facades\DB;

class FlashSaleSeeder extends ThemeSeeder
{
    public function run(): void
    {
        FlashSale::query()->truncate();
        DB::table('ec_flash_sale_products')->truncate();

        /**
         * @var FlashSale $flashSale
         */
        $flashSale = FlashSale::query()->create([
            'name' => 'Kış İndirimi', // "Winter Sale" ifadesi Türkçeleştirildi
            'end_date' => $this->now()->addMonths(3)->addDays($this->fake()->numberBetween(10, 30))->toDateString(),
        ]);

        $products = Product::query()->where('is_variation', false)->limit(10)->get();

        foreach ($products as $product) {
            $price = $product->price;

            if ($product->front_sale_price !== $product->price) {
                $price = $product->front_sale_price;
            }

            $flashSale->products()->attach([
                $product->getKey() => [
                    'price' => $price - ($price * rand(10, 70) / 100), // İndirim oranı hesaplanıyor
                    'quantity' => rand(6, 20), // Ürün miktarı rastgele belirleniyor
                    'sold' => rand(1, 5), // Satılan miktar rastgele belirleniyor
                ],
            ]);
        }
    }
}
