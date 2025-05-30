<?php

return [
    'name' => 'Shippo',
    'description' => 'Tüm Taşıyıcılar ve Mağazalar Bir Arada',
    'note_0' => 'Etkinleştirmeden önce lütfen aşağıdaki talimatları okuyun',
    'note_1' => 'Yönetici -> Konumlar bölümünden şehirleri, eyaletleri ve ülkeleri kullanmanız gerekiyor, <a href=":link" target="_blank" rel="noopener noreferrer">:link</a>',
    'note_2' => 'Shippo\'nun düzgün çalışması için "Eklenti konumundan ülkeleri, eyaletleri, şehirleri yükle?" ve "Posta Kodu Etkinleştir?" seçeneklerini etkinleştirin',
    'note_3' => 'Şehir, eyalet, ülke bilgilerini konum eklentisi verileriyle güncelleyin, "<a href=":link" target="_blank">Temel bilgiler</a>" bölümünde adres ve posta kodunu girip kontrol edin',
    'note_4' => 'Satıcı, Şirket ve Posta Kodunu güncellemelidir. Şehir, eyalet, ülke bilgilerini konum eklentisi verileriyle güncelleyin',
    'note_5' => 'Shippo, yalnızca 24 saat içinde gönderim/tarife ile işlem oluşturulmasına izin verir, 24 saatten fazla ise tarifeyi tekrar güncelleyin',
    'note_6' => 'Kapıda ödeme yöntemi için <a href=":link" target="_blank" rel="noopener noreferrer">buraya</a> bakın',
    'configuration_instruction' => ':name için yapılandırma talimatı',
    'configuration_requirement' => ':name kullanmak için ihtiyacınız olanlar',
    'service_registration' => ':name ile kayıt olun',
    'after_service_registration_msg' => ':name\'de kayıt olduktan sonra bir API Anahtarınız olacak',
    'enter_api_key' => 'API Anahtarını sağdaki kutuya girin',
    'please_provide_information' => 'Lütfen bilgi sağlayın',
    'sandbox_mode' => 'Test modu',
    'activate' => 'Etkinleştir',
    'disabled_in_demo_mode' => 'Demo modunda Shippo ayarlarını güncelleyemezsiniz!',
    'parcel' => 'Paket',
    'estimated_days' => 'Tahmini teslimat :day gün içinde',
    'from_address' => 'Gönderen adresi',
    'to_address' => 'Alıcı adresi',
    'check_validate_token' => 'Token doğrulamasını kontrol et?',
    'saved_shipping_settings_success' => 'Ayarlar başarıyla kaydedildi!',
    'token_name_is_required' => 'Entegrasyonun çalışması için :name gereklidir',
    'token_name_is_invalid' => ':name geçersiz',
    'live_api_token' => 'Canlı API Token',
    'test_api_token' => 'Test API Token',
    'print_label' => 'Etiket yazdır',
    'transaction' => [
        'created' => 'İşlem oluşturuldu #:tracking',
        'view_and_create' => 'İşlemi Görüntüle ve Oluştur',
        'create' => 'İşlem oluştur',
        'created_success' => 'İşlem başarıyla oluşturuldu!',
        'updated' => 'İşlem güncellendi #:tracking',
    ],
    'tracking' => [
        'updated' => 'Takip güncellendi #:tracking',
        'statuses' => [
            'pre_transit' => 'Etiket oluşturuldu ancak paket taşıyıcıya teslim edilmeden önce.',
            'transit' => 'Paket taşıyıcı tarafından tarandı ve taşınma sürecinde.',
            'delivered' => 'Paket başarıyla teslim edildi.',
            'returned' => 'Paket göndericiye geri gönderiliyor veya başarıyla geri gönderildi.',
            'failure' => 'Taşıyıcı, teslimatla ilgili bir sorun olduğunu belirtti. Bu, çeşitli nedenlerle olabilir ve taşıyıcıya bağlıdır. Bu durum teknik değil, teslimat sorunudur.',
            'unknown' => 'Paket, taşıyıcının takip sisteminde bulunamadı.',
        ],
    ],
    'view_other_exchange_rates' => ':count diğer döviz kurlarını görüntüle',
    'carrier_could_not_be_found' => 'Sipariş için seçilen taşıyıcı bulunamadı',
    'update_rate' => 'Tarifeyi güncelle',
    'updated_rate_success' => 'Tarife başarıyla oluşturuldu!',
    'recheck_rate' => 'Tarifeyi tekrar kontrol et',
    'shipment_object_id_not_found' => 'Eşleşen gönderim #:id bilgisi bulunamadı',
    'order_amount' => 'Sipariş tutarı',
    'logging' => 'Günlük kaydı?',
    'webhooks' => 'Webhooks?',
    'cache_response' => 'Yanıtı önbelleğe al?',
    'not_available_in_cod_payment_method' => 'Seçilen ödeme yöntemi Kapıda Ödeme (COD) ise Shippo seçenekleri gösterilmeyecek!',
];
