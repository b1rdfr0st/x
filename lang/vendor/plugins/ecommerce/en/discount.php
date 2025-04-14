<?php

return [
    'name' => 'İndirimler',
    'create' => 'İndirim oluştur',
    'edit' => 'İndirimi düzenle',
    'invalid_coupon' => 'Bu kupon geçersiz veya süresi dolmuş!',
    'cannot_use_same_time_with_other_discount_program' => 'Bu kupon başka bir indirim programı ile aynı anda kullanılamaz!',
    'not_used' => 'Bu kupon henüz kullanılmadı!',
    'detail' => 'Detay',
    'used' => 'Kullanıldı',
    'intro' => [
        'title' => 'İndirim/kupon kodunu yönet',
        'description' => 'Ürünleriniz için kupon kodu veya promosyon oluşturun.',
        'button_text' => 'İndirim oluştur',
    ],
    'expired' => 'Süresi doldu',
    'discount_promotion' => 'İndirim promosyonu',
    'can' => 'kullanılabilir',
    'cannot' => 'kullanılamaz',
    'use_with_promotion' => 'promosyon ile birlikte kullanılsın',
    'create_discount_validate_title_required_if' => 'Lütfen promosyon adını girin',
    'create_discount_validate_code_required_if' => 'Lütfen promosyon kodunu girin',
    'create_discount_validate_value_required' => 'Tutar 0\'dan büyük olmalıdır',
    'create_discount_validate_target_required' => 'Promosyon için bir hedef seçilmedi',
    'enums' => [
        'type-options' => [
            'amount' => 'Tutar - Sabit',
            'percentage' => 'İndirim %',
            'shipping' => 'Ücretsiz kargo',
            'same-price' => 'Aynı fiyat',
        ],
        'types' => [
            'coupon' => 'Kupon',
            'promotion' => 'Promosyon',
        ],
        'targets' => [
            'all-orders' => 'Tüm siparişler',
            'customer' => 'Müşteri',
            'amount-minimum-order' => 'Minimum sipariş tutarı',
            'product-variant' => 'Ürün varyantı',
            'group-products' => 'Ürün koleksiyonları',
            'specific-product' => 'Belirli ürün',
            'products-by-category' => 'Kategoriye göre ürünler',
        ],
    ],
    'discount' => 'İndirim',
    'create_coupon_code' => 'Kupon kodu oluştur',
    'create_discount_promotion' => 'İndirim promosyonu oluştur',
    'generate_coupon_code' => 'Kupon kodu oluştur',
    'customers_will_enter_this_coupon_code_when_they_checkout' => 'Müşteriler ödeme sırasında bu kupon kodunu girecek',
    'select_type_of_discount' => 'İndirim türünü seçin',
    'coupon_code' => 'Kupon kodu',
    'promotion' => 'Promosyon',
    'can_be_used_with_promotion' => 'Promosyon ile birlikte kullanılabilir mi?',
    'can_be_used_with_flash_sale' => 'Hızlı satış ile birlikte kullanılabilir mi?',
    'can_be_used_with_flash_sale_help' => 'Müşterilerin kuponu hızlı satıştaki ürünlere uygulamasına izin verir, böylece birleşik indirimler sağlanır.',
    'unlimited_coupon' => 'Sınırsız kupon?',
    'enter_number' => 'Sayı girin',
    'coupon_type' => 'Kupon türü',
    'percentage_discount' => 'Yüzde indirim (%)',
    'free_shipping' => 'Ücretsiz kargo',
    'same_price' => 'Aynı fiyat',
    'apply_for' => 'uygula',
    'all_orders' => 'Tüm siparişler',
    'order_amount_from' => 'Sipariş tutarı',
    'product_collection' => 'Ürün koleksiyonu',
    'product_category' => 'Ürün kategorisi',
    'product' => 'Ürün',
    'customer' => 'Müşteri',
    'variant' => 'Varyant',
    'search_product' => 'Ürün ara',
    'no_products_found' => 'Ürün bulunamadı!',
    'search_customer' => 'Müşteri ara',
    'no_customer_found' => 'Müşteri bulunamadı!',
    'one_time_per_order' => 'Sipariş başına bir kez',
    'one_time_per_product_in_cart' => 'Sepetteki ürün başına bir kez',
    'number_of_products' => 'Uygulamak için gereken ürün sayısı',
    'selected_products' => 'Seçilen ürünler',
    'selected_customers' => 'Seçilen müşteriler',
    'time' => 'Zaman',
    'start_date' => 'Başlangıç tarihi',
    'end_date' => 'Bitiş tarihi',
    'never_expired' => 'Hiçbir zaman sona ermeyecek mi?',
    'save' => 'Kaydet',
    'enter_promotion_name' => 'Promosyon adını girin',
    'enter_coupon_name' => 'Kupon adını girin',
    'cancel' => 'İptal',
    'is' => 'Eşittir',
    'when_shipping_fee_less_than' => 'kargo ücreti şu değerden az olduğunda',
    'minimum_order_amount_error' => ':minimum_amount altında olduğunuz için kuponu uygulayamazsınız, sepetinize :add_more daha fazla ürün eklemeniz gerekiyor',
    'once_per_customer' => 'Müşteri başına bir kez',
    'you_need_login_to_use_coupon_code' => 'Bu kupon kodunu kullanmak için giriş yapmanız gerekiyor',
    'you_used_coupon_code' => 'Bu kupon kodunu zaten kullandınız',
    'customer_used_coupon_code' => 'Bu indirim kodunu kullanan müşteriler',
    'apply_via_url' => 'URL ile uygula?',
    'apply_via_url_description' => 'Bu ayar, müşteriler URL\'ye "?coupon=code" parametresiyle eriştiğinde kupon kodunu uygular.',
    'display_at_checkout' => 'Kupon kodunu ödeme sayfasında göster?',
    'display_at_checkout_description' => 'Kupon kodlarının listesi ödeme sayfasında gösterilecek ve müşteriler uygulamak için seçim yapabilecek.',
    'description' => 'Açıklama',
    'description_placeholder' => 'İndirim programı hakkında kısa açıklama',
    'cannot_use_same_time_with_flash_sale' => 'Bu kupon, :product_name gibi hızlı satış ürünleriyle kullanılamaz. Lütfen ürünü sepetinizden çıkarın veya farklı bir kupon seçin.',
];
