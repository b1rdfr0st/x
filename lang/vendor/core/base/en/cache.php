<?php

return [
    'cache_management' => 'Önbellek Yönetimi',
    'cache_management_description' => 'Sitenizi güncel tutmak için önbelleği temizleyin.',
    'cache_commands' => 'Önbellek temizleme komutları',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Tüm CMS önbelleğini temizle',
            'description' => 'CMS önbelleğini temizle: veritabanı önbelleği, statik bloklar... Verileri güncelledikten sonra değişiklikleri görmüyorsanız bu komutu çalıştırın.',
            'success_msg' => 'Önbellek temizlendi',
        ],
        'refresh_compiled_views' => [
            'title' => 'Derlenmiş görünümleri yenile',
            'description' => 'Görünümleri güncel tutmak için derlenmiş görünümleri temizleyin.',
            'success_msg' => 'Önbellek görünümü yenilendi',
        ],
        'clear_config_cache' => [
            'title' => 'Yapılandırma önbelleğini temizle',
            'description' => 'Üretim ortamında bir şey değiştirdiğinizde yapılandırma önbelleğini yenilemeniz gerekebilir.',
            'success_msg' => 'Yapılandırma önbelleği temizlendi',
        ],
        'clear_route_cache' => [
            'title' => 'Rota önbelleğini temizle',
            'description' => 'Rota önbelleğini temizleyin.',
            'success_msg' => 'Rota önbelleği temizlendi',
        ],
        'clear_log' => [
            'title' => 'Logları temizle',
            'description' => 'Sistem log dosyalarını temizleyin',
            'success_msg' => 'Sistem logları temizlendi',
        ],
    ],
];
