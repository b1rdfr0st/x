<?php

return [

    /**
     *
     * Paylaşılan çeviriler.
     *
     */
    'title' => 'Kurulum',
    'next' => 'Sonraki Adım',
    'back' => 'Önceki',
    'finish' => 'Kur',
    'installation' => 'Kurulum',
    'forms' => [
        'errorTitle' => 'Aşağıdaki hatalar oluştu:',
    ],

    /**
     *
     * Ana sayfa çevirileri.
     *
     */
    'welcome' => [
        'title' => 'Hoş Geldiniz',
        'message' => 'Başlamadan önce, veritabanı hakkında bazı bilgilere ihtiyacımız var. Devam etmeden önce aşağıdaki öğeleri bilmeniz gerekecek.',
        'language' => 'Dil',
        'next' => 'Hadi başlayalım',
    ],

    /**
     *
     * Gereksinimler sayfası çevirileri.
     *
     */
    'requirements' => [
        'title' => 'Sunucu Gereksinimleri',
        'next' => 'İzinleri Kontrol Et',
    ],

    /**
     *
     * İzinler sayfası çevirileri.
     *
     */
    'permissions' => [
        'next' => 'Ortamı Yapılandır',
    ],

    /**
     *
     * Ortam sayfası çevirileri.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Ortam Ayarları',
            'form' => [
                'name_required' => 'Bir ortam adı gereklidir.',
                'app_name_label' => 'Site başlığı',
                'app_name_placeholder' => 'Site başlığı',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Veritabanı Bağlantısı',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Veritabanı sunucusu',
                'db_host_placeholder' => 'Veritabanı sunucusu',
                'db_port_label' => 'Veritabanı portu',
                'db_port_placeholder' => 'Veritabanı portu',
                'db_name_label' => 'Veritabanı adı',
                'db_name_placeholder' => 'Veritabanı adı',
                'db_username_label' => 'Veritabanı kullanıcı adı',
                'db_username_placeholder' => 'Veritabanı kullanıcı adı',
                'db_password_label' => 'Veritabanı şifresi',
                'db_password_placeholder' => 'Veritabanı şifresi',
                'buttons' => [
                    'install' => 'Kur',
                ],
                'db_host_helper' => 'Eğer Laravel Sail kullanıyorsanız, DB_HOST değerini DB_HOST=mysql olarak değiştirin. Bazı hostinglerde DB_HOST, 127.0.0.1 yerine localhost olabilir.',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => '.env dosyası ayarları başarıyla kaydedildi.',
        'errors' => '.env dosyası kaydedilemedi, lütfen manuel olarak oluşturun.',
    ],

    'theme' => [
        'title' => 'Tema Seçin',
        'message' => 'Web sitenizin görünümünü kişiselleştirmek için bir tema seçin. Bu seçim, seçilen temaya uygun örnek verileri de içe aktaracaktır.',
    ],

    /**
     * Hesap oluşturma sayfası.
     */
    'createAccount' => [
        'title' => 'Hesap oluştur',
        'form' => [
            'first_name' => 'Ad',
            'last_name' => 'Soyad',
            'username' => 'Kullanıcı Adı',
            'email' => 'E-posta',
            'password' => 'Şifre',
            'password_confirmation' => 'Şifre Onayı',
            'create' => 'Oluştur',
        ],
    ],

    /**
     * Lisans sayfası.
     */

    'license' => [
        'title' => 'Lisansı Etkinleştir',
        'skip' => 'Şimdilik atla',
    ],

    'install' => 'Kur',

    'final' => [
        'pageTitle' => 'Kurulum Tamamlandı',
        'title' => 'Tamamlandı',
        'message' => 'Uygulama başarıyla kuruldu.',
        'exit' => 'Yönetici paneline git',
    ],

    'install_success' => 'Başarıyla kuruldu!',

    'install_step_title' => 'Kurulum - Adım :step: :title',
];
