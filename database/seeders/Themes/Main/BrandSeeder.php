<?php

namespace Database\Seeders\Themes\Main;

use Botble\Ecommerce\Models\Brand;
use Botble\Slug\Facades\SlugHelper;
use Botble\Theme\Database\Seeders\ThemeSeeder;

class BrandSeeder extends ThemeSeeder
{
    public function çalıştır(): void
    {
        $this->uploadFiles('brands');

        $markalar = [
            [
                'name' => 'FoodPound',
                'description' => 'Yeni Atıştırmalık Çıkışı',
                'logo' => $this->filePath('brands/1.png'),
            ],
            [
                'name' => 'iTea JSC',
                'description' => 'Mutlu Çay %100 Organik. 29,9₺’den Başlayan Fiyatlarla',
                'logo' => $this->filePath('brands/2.png'),
            ],
            [
                'name' => 'Soda Markası',
                'description' => 'Taze Et Sosis. 2 Alana 1 Bedava!',
                'logo' => $this->filePath('brands/3.png'),
            ],
            [
                'name' => 'Shofy',
                'description' => 'Taze Et Sosis. 2 Alana 1 Bedava!',
                'logo' => $this->filePath('brands/4.png'),
            ],
            [
                'name' => 'Soda Markası',
                'description' => 'Taze Et Sosis. 2 Alana 1 Bedava!',
                'logo' => $this->filePath('brands/5.png'),
            ],
        ];

        Brand::query()->truncate();

        foreach ($markalar as $anahtar => $marka) {
            $marka = Brand::query()->create([
                ...$marka,
                'order' => $anahtar,
                'is_featured' => true,
            ]);

            SlugHelper::createSlug($marka);
        }
    }
}
