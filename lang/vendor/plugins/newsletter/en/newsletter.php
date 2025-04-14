<?php

return [
    'name' => 'Bültenler',
    'newsletter_form' => 'Bülten formu',
    'description' => 'Bülten abonelerini görüntüleyin ve silin',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Bülten',
                'description' => 'Bülten e-posta şablonlarını yapılandırın',
                'to_admin' => [
                    'title' => 'Yöneticilere gönderilen e-posta',
                    'description' => 'Yöneticilere e-posta göndermek için şablon',
                    'subject' => 'Yeni bir kullanıcı bülteninize abone oldu',
                    'newsletter_email' => 'Bültene abone olan kullanıcının e-postası',
                ],
                'to_user' => [
                    'title' => 'Kullanıcıya gönderilen e-posta',
                    'description' => 'Aboneye e-posta göndermek için şablon',
                    'subject' => '{{ site_title }}: Abonelik Onaylandı!',
                    'newsletter_name' => 'Bültene abone olan kullanıcının tam adı',
                    'newsletter_email' => 'Bültene abone olan kullanıcının e-postası',
                    'newsletter_unsubscribe_link' => 'Bülten aboneliğinden çıkış bağlantısı',
                    'newsletter_unsubscribe_url' => 'Bülten aboneliğinden çıkış URL\'si',
                ],
            ],
        ],
        'title' => 'Bülten',
        'panel_description' => 'Bülten ayarlarını görüntüleyin ve güncelleyin',
        'description' => 'Bülten ayarları (birisi web sitesinde bültene kaydolduğunda otomatik olarak SendGrid, Mailchimp... gibi hizmetlere e-posta gönderir).',
        'mailchimp_api_key' => 'Mailchimp API Anahtarı',
        'mailchimp_list_id' => 'Mailchimp Liste ID',
        'mailchimp_list' => 'Mailchimp Listesi',
        'sendgrid_api_key' => 'Sendgrid API Anahtarı',
        'sendgrid_list_id' => 'Sendgrid Liste ID',
        'sendgrid_list' => 'Sendgrid Listesi',
        'enable_newsletter_contacts_list_api' => 'Bülten kişi listesi API\'sini etkinleştir?',
    ],
    'statuses' => [
        'subscribed' => 'Abone Olundu',
        'unsubscribed' => 'Abonelikten Çıkıldı',
    ],
];
