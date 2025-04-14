<?php

namespace Database\Seeders\Themes\Main;

use Botble\Ads\Models\Ads;
use Botble\Base\Facades\MetaBox;
use Botble\Ecommerce\Models\Product;
use Botble\Theme\Database\Seeders\ThemeSeeder;
use Illuminate\Support\Arr;

class AdsSeeder extends ThemeSeeder
{
    public function run(): void
    {
        Ads::query()->truncate();

        $simdi = $this->now();

        foreach ($this->getData() as $index => $item) {
            $index++;

            $reklam = Ads::query()->create([
                ...Arr::except($item, 'metadata'),
                'name' => "Reklam $index",
                'expired_at' => $simdi->clone()->addYears(5)->toDateString(),
                'location' => 'not_set',
                'order' => $index,
                'ads_type' => 'custom_ad',
            ]);

            if (isset($item['metadata'])) {
                foreach ($item['metadata'] as $anahtar => $deger) {
                    MetaBox::saveMetaBoxData($reklam, $anahtar, $deger);
                }
            }
        }
    }

    protected function getData(): array
    {
        $this->uploadFiles('banners');
        $this->uploadFiles('gadgets');

        $urunler = Product::query()
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return [
            [
                'key' => 'UROL9F9ZZVAA',
                'image' => $this->filePath('banners/1.jpg'),
                'url' => '/products',
                'metadata' => [
                    'title' => "Akıllı Telefon \n BLU G91 Pro 2022",
                    'subtitle' => 'Tüm mağazada %20 indirim',
                    'button_label' => 'Şimdi Alışveriş Yap',
                ],
            ],
            [
                'key' => 'B30VDBKO7SBF',
                'image' => $this->filePath('banners/2.jpg'),
                'url' => '/products',
                'metadata' => [
                    'title' => "HyperX Cloud II \n Kablosuz",
                    'subtitle' => '%35 indirim',
                    'button_label' => 'Şimdi Alışveriş Yap',
                ],
            ],
            [
                'key' => 'BN3ZCHLIE95I',
                'image' => $this->filePath('gadgets/gadget-banner-1.jpg'),
                'url' => '/products',
                'metadata' => [
                    'title' => "Seçilmiş yenilikçi \n Ürünler",
                    'subtitle' => 'Sadece 99,00 ₺', // Değiştirildi
                ],
            ],
            [
                'key' => 'QGPRRJ2MPZYA',
                'image' => $this->filePath('gadgets/gadget-banner-2.jpg'),
                'url' => '/products',
                'metadata' => [
                    'title' => "En Çok Oy Alan \n Ürünler",
                    'subtitle' => 'Sadece 55,00 ₺', // Değiştirildi
                ],
            ],
            [
                'key' => 'B5ZA76ZWMWAE',
                'image' => $this->filePath('banners/slider-1.png'),
                'url' => $urunler[0]->url,
                'metadata' => [
                    'title' => 'Samsung Galaxy Tab S6, Wifi Tablet',
                    'subtitle' => 'Tablet Koleksiyonu 2023',
                    'button_label' => 'Şimdi Alışveriş Yap',
                ],
            ],
            [
                'key' => 'F1LTQS976YPY',
                'image' => $this->filePath('banners/slider-2.png'),
                'url' => $urunler[1]->url,
                'metadata' => [
                    'title' => 'Samsung Galaxy Tab S6, Wifi Tablet',
                    'subtitle' => 'Tablet Koleksiyonu 2023',
                    'button_label' => 'Şimdi Alışveriş Yap',
                ],
            ],
            [
                'key' => 'IHPZ2WBSYJUK',
                'image' => $this->filePath('banners/slider-3.png'),
                'url' => $urunler[2]->url,
                'metadata' => [
                    'title' => 'Samsung Galaxy Tab S6, Wifi Tablet',
                    'subtitle' => 'Tablet Koleksiyonu 2023',
                    'button_label' => 'Şimdi Alışveriş Yap',
                ],
            ],
        ];
    }
}
