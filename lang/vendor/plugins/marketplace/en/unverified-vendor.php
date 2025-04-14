<?php

return [
    'name' => 'Doğrulanmamış Satıcılar',
    'verify' => 'Satıcıyı doğrula ":name"',
    'forms' => [
        'email' => 'E-posta',
        'store_name' => 'Mağaza adı',
        'store_phone' => 'Mağaza telefonu',
        'vendor_phone' => 'Telefon',
        'verify_vendor' => 'Satıcıyı doğrula',
        'registered_at' => 'Kayıt Tarihi',
        'certificate' => 'Sertifika',
        'government_id' => 'Kimlik Belgesi',
    ],
    'view_certificate' => 'Sertifikayı görüntüle',
    'view_government_id' => 'Kimlik belgesini görüntüle',
    'approve' => 'Onayla',
    'reject' => 'Reddet',
    'approve_vendor_confirmation' => 'Satıcı onaylama doğrulaması',
    'approve_vendor_confirmation_description' => ':vendor\'ı bu sitede satış yapmak için onaylamak istediğinizden emin misiniz?',
    'reject_vendor_confirmation' => 'Satıcı reddetme doğrulaması',
    'reject_vendor_confirmation_description' => ':vendor\'ı bu sitede satış yapmak için reddetmek istediğinizden emin misiniz?',
    'new_vendor_notifications' => [
        'new_vendor' => 'Yeni satıcı',
        'view' => 'Görüntüle',
        'description' => ':customer kayıt oldu ancak doğrulanmadı.',
    ],
];
