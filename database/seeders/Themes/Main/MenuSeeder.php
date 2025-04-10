<?php

namespace Database\Seeders\Themes\Main;

use Botble\Blog\Models\Post;
use Botble\Ecommerce\Models\Product;
use Botble\Menu\Database\Traits\HasMenuSeeder;
use Botble\Page\Database\Traits\HasPageSeeder;
use Botble\Page\Models\Page;
use Botble\Theme\Database\Seeders\ThemeSeeder;

class MenuSeeder extends ThemeSeeder
{
    use HasMenuSeeder;
    use HasPageSeeder;

    public function run(): void
    {
        $this->createMenus($this->getData());
    }

    protected function getData(): array
    {
        return [
            [
                'name' => 'Ana Menü',
                'slug' => 'main-menu',
                'location' => 'main-menu',
                'items' => [
                    [
                        'title' => 'Anasayfa',
                        'reference_id' => 1,
                        'reference_type' => Page::class,
                        'children' => [
                            [
                                'title' => 'Elektronik',
                                'url' => 'https://shofy.botble.com',
                            ],
                            [
                                'title' => 'Moda',
                                'url' => 'https://shofy-fashion.botble.com',
                            ],
                            [
                                'title' => 'Güzellik',
                                'url' => 'https://shofy-beauty.botble.com',
                            ],
                            [
                                'title' => 'Takı',
                                'url' => 'https://shofy-jewelry.botble.com',
                            ],
                            [
                                'title' => 'Market',
                                'url' => 'https://shofy-grocery.botble.com',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Mağaza',
                        'children' => [
                            [
                                'title' => 'Kategoriler',
                                'reference_id' => $this->getPageId('Categories'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Markalar',
                                'reference_id' => $this->getPageId('Brands'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Liste Görünümü',
                                'url' => '/products?layout=list',
                            ],
                            [
                                'title' => 'Izgara Görünümü',
                                'url' => '/products?layout=grid',
                            ],
                            [
                                'title' => 'Ürün Detayı',
                                'url' => Product::query()->wherePublished()->where('is_variation', false)->inRandomOrder()->first()->url,
                            ],
                            [
                                'title' => 'Kuponlar',
                                'reference_id' => $this->getPageId('Coupons'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Sepet',
                                'url' => '/cart',
                            ],
                            [
                                'title' => 'Karşılaştır',
                                'url' => '/compare',
                            ],
                            [
                                'title' => 'Favoriler',
                                'url' => '/wishlist',
                            ],
                            [
                                'title' => 'Sipariş Takibi',
                                'url' => '/orders/tracking',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Satıcılar',
                        'url' => '/stores',
                    ],
                    [
                        'title' => 'Sayfalar',
                        'children' => [
                            [
                                'title' => 'SSS',
                                'reference_id' => $this->getPageId('FAQs'),
                                'reference_type' => Page::class,
                            ],
                            [
                                'title' => 'Giriş Yap',
                                'url' => '/login',
                            ],
                            [
                                'title' => 'Kayıt Ol',
                                'url' => '/register',
                            ],
                            [
                                'title' => 'Şifre Sıfırla',
                                'url' => '/password/reset',
                            ],
                            [
                                'title' => '404 Hatası',
                                'url' => '/404',
                            ],
                            [
                                'title' => 'Yakında',
                                'url' => '/coming-soon',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Blog',
                        'reference_id' => $this->getPageId('Blog'),
                        'reference_type' => Page::class,
                        'children' => [
                            [
                                'title' => 'Blog Izgara',
                                'url' => '/blog?layout=grid',
                            ],
                            [
                                'title' => 'Blog Liste',
                                'url' => '/blog?layout=list',
                            ],
                            [
                                'title' => 'Blog Detayı',
                                'url' => Post::query()->wherePublished()->inRandomOrder()->first()->url,
                            ],
                        ],
                    ],
                    [
                        'title' => 'İletişim',
                        'reference_id' => $this->getPageId('Contact'),
                        'reference_type' => Page::class,
                    ],
                ],
            ],
            [
                'name' => 'Hesabım',
                'slug' => 'my-account',
                'items' => [
                    [
                        'title' => 'Sipariş Takibi',
                        'url' => '/orders/tracking',
                    ],
                    [
                        'title' => 'Kargo',
                        'reference_id' => $this->getPageId('Shipping'),
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Favoriler',
                        'url' => '/wishlist',
                    ],
                    [
                        'title' => 'Hesabım',
                        'url' => '/customer/overview',
                    ],
                    [
                        'title' => 'Sipariş Geçmişi',
                        'url' => '/customer/orders',
                    ],
                    [
                        'title' => 'İadeler',
                        'url' => '/customer/order-returns',
                    ],
                ],
            ],
            [
                'name' => 'Bilgi',
                'slug' => 'information',
                'items' => [
                    [
                        'title' => 'Hikayemiz',
                        'reference_id' => $this->getPageId('Our Story'),
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Kariyer',
                        'reference_id' => $this->getPageId('Careers'),
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Gizlilik Politikası',
                        'reference_id' => $this->getPageId('Cookie Policy'),
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Son Haberler',
                        'url' => '/blog',
                    ],
                    [
                        'title' => 'Bize Ulaşın',
                        'reference_id' => $this->getPageId('Contact'),
                        'reference_type' => Page::class,
                    ],
                ],
            ],
        ];
    }
}
