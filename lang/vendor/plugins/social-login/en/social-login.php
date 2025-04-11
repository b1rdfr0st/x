<?php

return [
    'settings' => [
        'title' => 'Sosyal Giriş Ayarları',
        'description' => 'Sosyal giriş seçeneklerini yapılandırın',
        'facebook' => [
            'enable' => 'Facebook girişi etkinleştir',
            'app_id' => 'Uygulama ID',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'helper' => 'Yeni bir uygulama oluşturmak ve Uygulama ID, Gizli Anahtarı güncellemek için lütfen https://developers.facebook.com adresine gidin. Geri Çağırma URL\'si :callback',
            'data_deletion_request_callback_url' => 'Kullanıcıların verilerini silme talebinde bulunmalarına izin vermek için bu URL\'yi :url Facebook uygulama ayarlarında Veri Silme Talebi URL\'si olarak ayarlayın.',
        ],
        'google' => [
            'enable' => 'Google girişi etkinleştir',
            'app_id' => 'Uygulama ID',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'helper' => 'Yeni bir uygulama oluşturmak ve Uygulama ID, Gizli Anahtarı güncellemek için lütfen https://console.developers.google.com/apis/dashboard adresine gidin. Geri Çağırma URL\'si :callback',
            'use_google_button' => 'Google düğmesini kullan',
            'use_google_button_helper' => 'Bu seçeneği etkinleştirirseniz, varsayılan düğme yerine Google düğmesi kullanılacaktır.',
        ],
        'github' => [
            'enable' => 'GitHub girişi etkinleştir',
            'app_id' => 'Uygulama ID',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'helper' => 'Yeni bir uygulama oluşturmak ve Uygulama ID, Gizli Anahtarı güncellemek için lütfen https://github.com/settings/developers adresine gidin. Geri Çağırma URL\'si :callback',
        ],
        'linkedin' => [
            'enable' => 'Linkedin girişi etkinleştir',
            'app_id' => 'Uygulama ID',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'helper' => 'Yeni bir uygulama oluşturmak ve Uygulama ID, Gizli Anahtarı güncellemek için lütfen https://www.linkedin.com/developers/apps/new adresine gidin. Geri Çağırma URL\'si :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Linkedin OpenID Connect girişi etkinleştir',
            'app_id' => 'Uygulama ID',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'helper' => 'Yeni bir uygulama oluşturmak ve Uygulama ID, Gizli Anahtarı güncellemek için lütfen https://www.linkedin.com/developers/apps/new adresine gidin. Geri Çağırma URL\'si :callback',
        ],
        'enable' => 'Sosyal giriş etkinleştirilsin mi?',
        'style' => 'Stil',
        'minimal' => 'Minimal',
        'default' => 'Varsayılan',
        'basic' => 'Temel',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
    ],
    'menu' => 'Sosyal Giriş',
    'description' => 'Sosyal giriş ayarlarınızı görüntüleyin ve güncelleyin',
    'sign_in_with' => ':provider ile giriş yap',
];
