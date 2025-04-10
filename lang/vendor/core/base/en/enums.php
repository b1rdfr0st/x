<?php

return [
    'statuses' => [
        'draft' => 'Taslak',
        'pending' => 'Beklemede',
        'published' => 'Yayınlandı',
    ],
    'system_updater_steps' => [
        'download' => 'Güncelleme dosyalarını indir',
        'update_files' => 'Sistem dosyalarını güncelle',
        'update_database' => 'Veritabanlarını güncelle',
        'publish_core_assets' => 'Çekirdek varlıkları yayınla',
        'publish_packages_assets' => 'Paket varlıklarını yayınla',
        'clean_up' => 'Sistem güncelleme dosyalarını temizle',
        'done' => 'Sistem başarıyla güncellendi',

        'messages' => [
            'download' => 'Güncelleme dosyaları indiriliyor...',
            'update_files' => 'Sistem dosyaları güncelleniyor...',
            'update_database' => 'Veritabanları güncelleniyor...',
            'publish_core_assets' => 'Çekirdek varlıklar yayınlanıyor...',
            'publish_packages_assets' => 'Paket varlıkları yayınlanıyor...',
            'clean_up' => 'Sistem güncelleme dosyaları temizleniyor...',
            'done' => 'Tamamlandı! Tarayıcınız 30 saniye içinde yenilenecek.',
        ],

        'failed_messages' => [
            'download' => 'Güncelleme dosyaları indirilemedi',
            'update_files' => 'Sistem dosyaları güncellenemedi',
            'update_database' => 'Veritabanları güncellenemedi',
            'publish_core_assets' => 'Çekirdek varlıklar yayınlanamadı',
            'publish_packages_assets' => 'Paket varlıkları yayınlanamadı',
            'clean_up' => 'Sistem güncelleme dosyaları temizlenemedi',
        ],

        'success_messages' => [
            'download' => 'Güncelleme dosyaları başarıyla indirildi.',
            'update_files' => 'Sistem dosyaları başarıyla güncellendi.',
            'update_database' => 'Veritabanları başarıyla güncellendi.',
            'publish_core_assets' => 'Çekirdek varlıklar başarıyla yayınlandı.',
            'publish_packages_assets' => 'Paket varlıkları başarıyla yayınlandı.',
            'clean_up' => 'Sistem güncelleme dosyaları başarıyla temizlendi.',
        ],
    ],
];
