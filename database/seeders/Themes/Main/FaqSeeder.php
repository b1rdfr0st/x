<?php

namespace Database\Seeders\Themes\Main;

use Botble\Faq\Models\Faq;
use Botble\Faq\Models\FaqCategory;
use Botble\Theme\Database\Seeders\ThemeSeeder;

class FaqSeeder extends ThemeSeeder
{
    public function run(): void
    {
        Faq::query()->truncate();
        FaqCategory::query()->truncate();

        $categories = [
            [
                'name' => 'Shipping',
            ],
            [
                'name' => 'Payment',
            ],
            [
                'name' => 'Order & Returns',
            ],
        ];

        foreach ($categories as $index => $value) {
            $value['order'] = $index;
            FaqCategory::query()->create($value);
        }

        $faqItems = [
            [
                'question' => 'Hangi Kargo Yöntemleri Mevcut?',
                'answer' => 'Standart kargo, ekspres kargo ve aynı gün teslimat seçeneklerimiz mevcuttur. Detaylı bilgi için kargo politikamıza göz atabilirsiniz.',
                'category_id' => 1,
            ],
            [
                'question' => 'Uluslararası Gönderim Yapıyor musunuz?',
                'answer' => 'Evet, birçok ülkeye uluslararası gönderim yapıyoruz. Gönderim ücretleri ve süreleri ülkeye göre değişiklik gösterebilir.',
                'category_id' => 1,
            ],
            [
                'question' => 'Paketim Ne Kadar Sürede Ulaşır?',
                'answer' => 'Siparişler genellikle 3-5 iş günü içinde teslim edilir. Ekspres kargo seçeneği ile bu süre daha da kısalabilir.',
                'category_id' => 1,
            ],
            [
                'question' => 'Hangi Ödeme Yöntemlerini Kabul Ediyorsunuz?',
                'answer' => 'Kredi kartı, banka kartı, havale/EFT ve kapıda ödeme seçeneklerini kabul ediyoruz.',
                'category_id' => 2,
            ],
            [
                'question' => 'Online Alışveriş Güvenli mi?',
                'answer' => 'Evet, sitemiz SSL sertifikası ile korunmaktadır ve tüm ödeme işlemleri güvenli bir şekilde gerçekleştirilir.',
                'category_id' => 2,
            ],
            [
                'question' => 'Siparişimi Nasıl Verebilirim?',
                'answer' => 'Beğendiğiniz ürünleri sepete ekleyip ödeme adımlarını takip ederek siparişinizi kolayca verebilirsiniz.',
                'category_id' => 3,
            ],
            [
                'question' => 'Siparişimi Nasıl İptal Edebilir veya Değiştirebilirim?',
                'answer' => 'Siparişinizi iptal etmek veya değiştirmek için müşteri hizmetlerimizle iletişime geçebilirsiniz. İşleme alınmamış siparişlerde bu işlemi gerçekleştirebilirsiniz.',
                'category_id' => 3,
            ],
            [
                'question' => 'Sipariş Vermek İçin Hesap Gerekli mi?',
                'answer' => 'Hayır, misafir olarak da sipariş verebilirsiniz. Ancak, hesap oluşturmak siparişlerinizi daha kolay takip etmenizi sağlar.',
                'category_id' => 3,
            ],
            [
                'question' => 'Siparişimi Nasıl Takip Edebilirim?',
                'answer' => 'Siparişiniz kargoya verildiğinde size bir takip numarası gönderilir. Bu numara ile kargonuzu takip edebilirsiniz.',
                'category_id' => 3,
            ],
            [
                'question' => 'Bir Ürünü Nasıl İade Edebilirim?',
                'answer' => 'İade işlemi için müşteri hizmetlerimizle iletişime geçerek iade talebi oluşturabilirsiniz. Ürün, orijinal ambalajında ve kullanılmamış olmalıdır.',
                'category_id' => 3,
            ],
        ];

        foreach ($faqItems as $value) {
            Faq::query()->create($value);
        }
    }
}
